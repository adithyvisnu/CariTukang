<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function login()
	{
		//print_r($_POST);
		$u = $this->input->post('username',TRUE);
		$p = $this->input->post('password',TRUE);

		$data1 = array('username' => $u, 'password' => md5($p));
		$data2 = array('telp' => $u, 'password' => md5($p));

		$num1 = $this->db->get_where('tb_perangkat_desa',$data1)->row();
		if (!empty($num1->nomor_ktp)) {
			# code...
			$data_user = array('username' => $num1->id,
								'level' => $num1->level,
								'login' => TRUE);
			$this->session->set_userdata($data_user);
			//redirect('search','location');
			?> 
			<script type="text/javascript">
				
				alert('Halo, <?php echo $num1->nama; ?>');
				top.location="<?php echo base_url();?>";

			</script> 
			<?php
		} else { 
			$num2 = $this->db->get_where('tb_juragan',$data2)->row();
			if (!empty($num2->telp)) {
				# code...
				//echo $num->nama;
				$data_user = array('username' => $num2->ID_juragan,
									'level' => $num2->level,
									'login' => TRUE);
				$this->session->set_userdata($data_user);
				//redirect('search','location');
				?> 
				<script type="text/javascript">
					
					alert('Halo, <?php echo $num2->nama; ?>');
					top.location="<?php echo base_url();?>";

				</script> 
				<?php

			} else{
				?> 
				<script type="text/javascript">
					
					alert('Username atau password salah');
					top.location="<?php echo base_url();?>";

				</script> 
				<?php
			}
		}

		

	}

	public function logout()
	{
		# code...
		$data_user = array('username' => '',
							'level' => '',
							'login' => FALSE);
		$this->session->set_userdata($data_user);

		?> 
		<script type="text/javascript">
			
			alert('Telah keluar dari hak akses sebelumnya');
			top.location="<?php echo base_url();?>";

		</script> 
		<?php
	}

	function hit_post ( $sentdata=array() , $timeout =''){
		$ch		= curl_init();
		$url 	= 'http://118.98.97.159/smsnotif/notification.conf';

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($sentdata));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $sentdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}

	public function add_pekerja(){
		//print_r($_POST);
		//echo $_SERVER['DOCUMENT_ROOT']."";
		$move = "ayomaju/assets/img/prof_pict/";
		move_uploaded_file($_FILES['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$move.$_FILES['foto']['name']);
		$_POST['foto'] = $_FILES['foto']['name'];
		//print_r($_POST);
		//die();
		$data = $this->insert->pekerja($_POST);
		die();
		if ($data) {
			# code...
			//redirect('dashboard/pekerja','refresh');
			$pesan		= "Anda telah terdaftar di Aplikasi AyoMaju sebagai Pekerja. Silahkan meminta ulasan kepada pelanggan apabila telah selesai dalam mengerjakan tugas";
			$hitsms		= array  (
				                "auth"		=> "19099504",
				                "password"  => "hackathon2015v2",
				                "number"    => $_POST['telp'],
				                "messages"  => $pesan
				            );
			$hit = $this->hit_post	( $hitsms , 180  );

			?> 
				<script type="text/javascript">
					
					alert('Pendaftaran pekerja berhasil, akan ada SMS pemberitahuan ke nomor pekerja');
					top.location="<?php echo $_SERVER['HTTP_REFERER'] ?>";

				</script> 
				<?php
		} else {
			?> 
			<script type="text/javascript">
				
				alert('Gagal menambah data');
				top.location="<?php echo $_SERVER['HTTP_REFERER'];?>";

			</script> 
			<?php

		}
	}


}

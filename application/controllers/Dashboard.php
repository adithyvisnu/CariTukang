<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	function __construct() {
		parent::__construct();
		if (!($this->session->userdata('login')) OR ($this->session->userdata('level') != 3)) {
			redirect('search','location');
		}

	}
	public function index(){

		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function keahlian(){

		$this->load->view('header');
		$data['keahlian'] = $this->select->get_keahlian();
		$this->load->view('keahlian',$data);
		$this->load->view('footer');
	}
	public function add_keahlian(){
		//print_r($_POST);
		$data = $this->insert->keahlian($_POST);
		if ($data) {
			# code...
			redirect('dashboard/keahlian','refresh');
		} else {
			?> 
			<script type="text/javascript">
				
				alert('Gagal menambah data');
				top.location="<?php echo base_url();?>dashboard/keahlian";

			</script> 
			<?php

		}
	}
	public function edit_keahlian(){
		# code...
		if (!empty($this->input->post('keahlian'))) {
			# code...
			$data = $this->update->keahlian($_POST);
			if ($data) {
				# code...
				redirect('dashboard/keahlian','refresh');
			} else {
				?> 
				<script type="text/javascript">
					
					alert('Gagal update data');
					top.location="<?php echo base_url();?>dashboard/keahlian";

				</script> 
				<?php

			}
		} else{
			$this->load->view('header');
			$this->load->view('keahlian_edit');
			$this->load->view('footer');
		}
	}



	public function rt(){
		$this->load->view('header');
		$data['rt'] = $this->select->get_rt();
		$this->load->view('list_rt',$data);
		$this->load->view('footer');
	}
	public function add_rt(){
		//print_r($_POST);
		$n = $this->input->post('nama',TRUE);
		$a = $this->input->post('alamat',TRUE);
		$k = $this->input->post('nomor_ktp',TRUE);
		$u = $this->input->post('username',TRUE);
		$p = md5($this->input->post('password',TRUE));
		$data_rt = array( "nama" => $n,
							"alamat" => $a,
							"nomor_ktp" => $k,
							"username" => $u,
							"password" => $p
			);
		$num = $this->db->get_where('tb_perangkat_desa',array('username'=>$u))->row();
		if ($num->nomor_ktp != 0) {
			# code...?> 
			<script type="text/javascript">
				
				alert('username sudah dipakai');
				top.location="<?php echo base_url();?>dashboard/rt";

			</script> 
			<?php
		} else{

			$data = $this->insert->rt($data_rt);
			if ($data) {
				# code...
				redirect('dashboard/rt','refresh');
			} else {
				?> 
				<script type="text/javascript">
					
					alert('Gagal menambah data');
					top.location="<?php echo base_url();?>dashboard/rt";

				</script> 
				<?php

			}
		}
	}
	public function rt_edit(){
		# code...
		if (!empty($this->input->post('nomor_ktp'))) {
			# code...
			//print_r($_POST);
			//die();
			$data = $this->update->rt($_POST);
			if ($data) {
				# code...
				redirect('dashboard/rt','location');
			} else {
				?> 
				<script type="text/javascript">
					
					alert('Gagal update data');
					top.location="<?php echo base_url();?>dashboard/rt";

				</script> 
				<?php

			}
		} else{
			$this->load->view('header');
			$this->load->view('rt_edit');
			$this->load->view('footer');
		}
	}
	public function rt_delete()
	{
		# code...
		$id = $this->uri->segment(3);
		$hasil = $this->delete->rt($id);
		if ($hasil) {
			# code...
				redirect('dashboard/rt','location');
		} else {
				?> 
				<script type="text/javascript">
					
					alert('Gagal update data');
					top.location="<?php echo base_url();?>dashboard/rt";

				</script> 
				<?php
		}
	}




	public function juragan(){
		$this->load->view('header');
		$data['juragan'] = $this->select->get_juragan();
		$this->load->view('list_juragan',$data);
		$this->load->view('footer');
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
	public function add_juragan()
	{
		# code...
		//print_r($_POST);
		$search = $this->select->search_user($_POST);
		if ($search == TRUE) {
			if ( !empty($_POST) ) {
					$is_success 	= $this->insert->juragan($_POST);

					$pwd 			= $is_success;
					if ($is_success) {
							
						$pesan		= "Anda telah terdaftar di Aplikasi AyoMaju. Gunakan kode ".$pwd." sebagai password anda.";
						$hitsms		= array  (
							                "auth"		=> "19099504",
							                "password"  => "hackathon2015v2",
							                "number"    => $_POST['telp'],
							                "messages"  => $pesan
							            );
						$hit = $this->hit_post	( $hitsms , 180  );

						?>
						<script type="text/javascript">
						alert("Registerasi sudah berhasil, silakan cek sms untuk mengetahui password anda. Terima kasih");
						top.location="<?php echo base_url();?>dashboard/juragan";
						</script>
						<?php
						
					} else {

						?>
						<script type="text/javascript">
						alert("Maaf, data tidak Lengkap");
						top.location="<?php echo site_url();?>dashboard/juragan";		
						</script>
						<?php

					}
					
					redirect("dashboard/juragan","location");
				}
				else {	
					$this->load->view("dashboard/juragan","location");
				}
		} else {
			?> 
			<script type="text/javascript">
				
				alert('Nomor ini telah dipakai, silahkan');
				top.location="<?php echo base_url();?>dashboard/juragan";

			</script> 
			<?php
			//kasih tahu sudah ada yang memakai nomer ini
		}
	}
	public function edit_juragan(){
		# code...
		if (!empty($this->input->post('nama'))) {
			# code...
			$data = $this->update->juragan($_POST);
			if ($data) {
				# code...
				redirect('dashboard/juragan','location');
			} else {
				?> 
				<script type="text/javascript">
					
					alert('Gagal update data');
					top.location="<?php echo base_url();?>dashboard/juragan";

				</script> 
				<?php

			}
		} else{
			$this->load->view('header');
			$this->load->view('juragan_edit');
			$this->load->view('footer');
		}
	}




	public function pekerja(){
		$this->load->view('header');
		if (@($this->input->post('nama'))) {
			# code...
			$key = $this->input->post('nama');
			$where = "nama like '%$key%' OR alamat like '%$key%' OR telp like '%$key%' OR ID_keahlian like '%$key%'";
			$this->db->where($where);
			$data['pekerja']=$this->db->get('tb_pekerja')->result();

		} else{
			$data['pekerja'] = $this->select->get_pekerja();
		}
		$this->load->view('list_pekerja',$data);
		$this->load->view('footer');
	}
	public function add_pekerja(){
		//print_r($_POST);
		$data = $this->insert->pekerja($_POST);
		if ($data) {
			# code...
			redirect('dashboard/pekerja','refresh');
		} else {
			?> 
			<script type="text/javascript">
				
				alert('Gagal menambah data');
				top.location="<?php echo base_url();?>dashboard/pekerja";

			</script> 
			<?php

		}
	}
	public function edit_pekerja(){
		# code...
		if (!empty($this->input->post('bayaran'))) {
			# code...
			$data = $this->update->pekerja($_POST);
			if ($data) {
				# code...
				redirect('dashboard/pekerja','refresh');
			} else {
				?> 
				<script type="text/javascript">
					
					alert('Gagal menambah data');
					top.location="<?php echo base_url();?>dashboard/pekerja";

				</script> 
				<?php

			}
		} else{

			$data['keahlian'] = $this->select->get_keahlian();
			$this->load->view('header');
			$this->load->view('pekerja_edit',$data);
			$this->load->view('footer');
		}
	}


	public function review()
	{
		# code...
		$this->load->view('header');
		$data['review'] = $this->select->get_review_admin();
		$this->load->view('list_reviews',$data);
		$this->load->view('footer');
	
	}


}

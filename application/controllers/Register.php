<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
	public function index()
	{
		$this->load->view('header');
		$this->load->view('register');
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

	public function proses()
	{
		# code...
		//print_r($_POST);
		$search = $this->select->search_user($_POST);
		if ($search == TRUE) {
			if ( !empty($_POST) ) {
					$is_success 	= $this->insert->juragan($_POST);	
					$pwd 			= $is_success;
					if ($is_success) {
							
						$pesan		= "Anda telah terdaftar di Aplikasi AyoMaju. Username anda adalah nomor telepon yang anda pakai pada saat registrasi dan gunakan kode ".$pwd." sebagai password anda.";
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
						top.location="<?php echo base_url();?>";
						</script>
						<?php
						
					} else {

						?>
						<script type="text/javascript">
						alert("Maaf, data tidak Lengkap");
						top.location="<?php echo site_url('register');?>";		
						</script>
						<?php

					}
					
					//redirect("register");
				}
				else {	
					$this->load->view("register");
				}
		} else {
			?> 
			<script type="text/javascript">
				
				alert('Nomor ini telah dipakai, silahkan');
				top.location="<?php echo base_url();?>";

			</script> 
			<?php
			//kasih tahu sudah ada yang memakai nomer ini
		}
	}
}

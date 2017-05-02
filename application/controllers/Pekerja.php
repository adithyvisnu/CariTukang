<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerja extends CI_Controller {

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
		if (!($this->session->userdata('login')) AND ($this->session->userdata('level') > 1)) {
			redirect('search','location');
		}

	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('list_pekerja');
		$this->load->view('footer');
	}
	public function add()
	{
		# code...
		$this->load->view('header');
		$data['keahlian'] = $this->select->get_keahlian();
		$this->load->view('add_pekerja',$data);
		$this->load->view('footer');
	}
	public function edit_pekerja(){
		# code...

		$id = $this->uri->segment(3);
		$pekerja = $this->db->get_where('tb_pekerja',array('ID_pekerja'=>$id))->row();
		if (($this->session->level == 3) OR (($this->session->level == $pekerja->level_penambah) AND ($this->session->username == $pekerja->id_penambah))){

			if (!empty($this->input->post('bayaran'))) {
				# code...

				$data = $this->update->pekerja($_POST);
				if ($data) {
					# code...
					//redirect('dashboard/pekerja','refresh');
					?> 
					<script type="text/javascript">
						
						alert('Sukses mengubah data');
						top.location="<?php echo $_SERVER['HTTP_REFERER'] ?>";

					</script> 
					<?php
				} else {
					?> 
					<script type="text/javascript">
						
						alert('Gagal mengubah data');
						top.location="<?php echo $_SERVER['HTTP_REFERER'] ?>";

					</script> 
					<?php

				}
			} else{

				$data['keahlian'] = $this->select->get_keahlian();
				$this->load->view('header');
				$this->load->view('pekerja_edit',$data);
				$this->load->view('footer');
			}
		} else{
			header('location:'.$_SERVER['HTTP_REFERER']);
		}
	}
}

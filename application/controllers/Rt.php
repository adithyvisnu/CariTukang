<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt extends CI_Controller {

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
		if (!($this->session->userdata('login')) OR ($this->session->userdata('level') != 2)) {
			redirect('search','location');
		}

	}
	public function index(){

		$this->load->view('header');
		$data['keahlian'] = $this->select->get_keahlian();
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
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



}

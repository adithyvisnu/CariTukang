<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Model {

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
	public function search_user($data)
	{
		$telp = $data['telp'];
		$ada = $this->db->get_where('tb_juragan',array('telp' => $telp))->num_rows();
		if ($ada != 1) {
			# code...
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function juragan_oke( $telp )
	{
		//$data = $this->db->query("select * from tb_juragan where telp = '$telp'");
		$data = $this->db->get_where('tb_juragan',array('telp' => $telp));
		return $data->result();
	}	

	public function get_keahlian()
	{
		# code...
		$data = $this->db->get('tb_keahlian');
		return $data->result();
	}

	public function get_juragan()
	{
		# code...
		$this->db->where("level = 1");
		$data = $this->db->get('tb_juragan');
		return $data->result();
	}

	public function get_pekerja()
	{
		# code...
		$data = $this->db->get('tb_pekerja');
		return $data->result();
	}

	public function get_rt()
	{
		# code...
		$data = $this->db->get('tb_perangkat_desa');
		return $data->result();
	}

	public function get_review()
	{
		# code...
		$id = $this->session->username;
		$level = $this->session->level;
		$this->db->group_by("id_pekerja");
		$this->db->where("id_pereview",$id);
		$this->db->where("level_pereview",$level);
		$data = $this->db->get('tb_review');
		return $data->result();
	}
	public function get_review_admin()
	{
		# code...
		$this->db->group_by("id_pekerja");
		$data = $this->db->get('tb_review');
		return $data->result();
	}
}

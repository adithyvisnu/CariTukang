<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Model {

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
	public function keahlian($data)
	{
		//print_r($data);
		$this->db->where('ID_keahlian',$data['ID_keahlian']);
		$query = $this->db->update('tb_keahlian',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function rt($data)
	{
		$this->db->where('id',$data['id']);
		$query = $this->db->update('tb_perangkat_desa',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function pekerja($data)
	{
		$this->db->where('ID_pekerja',$data['ID_pekerja']);	
		$query = $this->db->update('tb_pekerja',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function juragan($data)
	{
		$this->db->where('ID_juragan',$data['ID_juragan']);	
		$query = $this->db->update('tb_juragan',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
}

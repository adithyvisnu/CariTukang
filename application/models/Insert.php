<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Model {

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
		$query = $this->db->insert('tb_keahlian',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function rt($data)
	{
		//print_r($data);die();
		$query = $this->db->insert('tb_perangkat_desa',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function juragan($data)
	{
		//print_r($data);die();
		$pass	= $this->generateRandomString();
		$data['password']	= md5($pass);
		$query = $this->db->insert('tb_juragan',$data);
		if ($query) {
			# code...
			return $pass;
		} else{
			return FALSE;
		}
	}
	public function pekerja($data)
	{
		//print_r($data);die();
		$query = $this->db->insert('tb_pekerja',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}
	public function review($data)
	{
		//print_r($data);
		$id = $data['ID_pekerja'];
		$like = $data['likes'];
		if ($like == 1) {
			# code...
			$data_pekerja = $this->db->get_where("tb_pekerja",array("ID_pekerja"=>$id))->row();
			$rating = $data_pekerja->rating;
			$rating = $rating + 1;
			$data2 = array('rating' => $rating);
			$this->db->where("ID_pekerja",$id);
			$query2 = $this->db->update("tb_pekerja",$data2);
		}
		//die();
		$query = $this->db->insert('tb_review',$data);
		if ($query) {
			# code...
			return TRUE;
		} else{
			return FALSE;
		}
	}


	function generateRandomString($length = 3) {
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) {
       		$randomString .= $characters[rand(0, strlen($characters) - 1)];
    	}
    	
    	return $randomString;
	}
	
}

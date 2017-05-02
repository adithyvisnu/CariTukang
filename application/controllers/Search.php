<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
		$this->load->view('search');
		$this->load->view('footer');
	}
	public function result()
	{
		# code...
		if (@($this->input->get('keyword',TRUE))) {
			# code...

			$keyword = strtolower($this->input->get('keyword',TRUE));
			$key = explode(" ", $keyword);
			//print_r($key);
			$total = array();

			for ($i=0; $i < sizeof($key); $i++) { 
				# code...
				$keyword = $key[$i];
				$temp = array();

				$b = 0;
				$e = array();

				$c = 0;
				$d = array();

				$where = "keahlian like '%$keyword%' or keyword like '%$keyword%'";
				$this->db->where($where);
				$keahlian = $this->db->get('tb_keahlian')->result();
				//echo"<pre>";print_r($keahlian);echo"</pre>";
				$a = 0;
				foreach ($keahlian as $datakeahlian) {
					# code...
					$id_keahlian = $datakeahlian->ID_keahlian;
					//$id = array();
					//echo "$id_keahlian<br>";
					$temp[$a]=$id_keahlian;
					//echo "id[".$a."]";
					//array_push($temp, $id);
					$a++;
				}
				//echo"<pre>";print_r($temp);echo"</pre>";

				if (sizeof($temp) != 0) {
					# code...
				
					$this->db->where_in("ID_keahlian",$temp);
					$data_pekerja_keahlian = $this->db->get("tb_pekerja")->result();

					//echo"<pre>";print_r($data_pekerja_keahlian);echo"</pre>";
					
					foreach ($data_pekerja_keahlian as $data_pekerja) {
						# code...
						$id = $data_pekerja->ID_pekerja;
						//$id = array();
						//echo "$id<br>";
						$e[$b]=$id;
						//echo "id[".$a."]";
						//array_push($temp, $id);
						$b++;
					}
				} else {
					$b = 0;
					$e = array();
				}
				//echo"<pre>";print_r($e);echo"</pre>";

				
				$where = "nama like '%$keyword%' or alamat like '%$keyword%' or bayaran like '%$keyword%' or telp like '%$keyword%'";
				$this->db->where($where);
				$data_pekerja = $this->db->get("tb_pekerja")->result();
				foreach ($data_pekerja as $data_pekerja) {
					# code...
					$id = $data_pekerja->ID_pekerja;
					//$id = array();
					//echo "$id<br>";
					$d[$c]=$id;
					//echo "id[".$a."]";
					//array_push($temp, $id);
					$c++;
				}
				//echo"<pre>";print_r($d);echo"</pre>";
				$array = array_unique (array_merge ($d, $e));

				$total[$i] = $array;
				//echo"<pre>";print_r($array);echo"</pre>";
				
				
				
			}
			
			//die();
			//echo"<pre>";print_r($total);echo"</pre>";
			$array_baru = array();
			$hitung = 0;
			for ($i=0; $i < sizeof($total); $i++) { 
				# code...
				if (is_array($total[$i])) {
					# code...
					for ($g=0; $g < sizeof($total[$i]); $g++) { 
						//echo $total[$i][$g]." ".$hitung.br(1);
						$array_baru[$hitung] = $total[$i][$g];
						$hitung++;
					}
				}
				//$hitung++;
			}
			$array = array_unique($array_baru);
			//echo"<pre>";print_r(array_unique($array_baru));echo"</pre>";
				if (sizeof($array) != 0) {
					# code...
					$this->db->where_in('ID_pekerja',$array);
					$data['pekerja']=$this->db->get('tb_pekerja')->result();
					$data['row']=$this->db->get('tb_pekerja')->num_rows();
					$data['hasil']=1;
				} else {
					$data['pekerja']="Maaf, keyword yang anda cari tidak ditemukan";
					$data['row']=0;
					$data['hasil']=0;
				}

			//echo"<pre>";print_r($data['pekerja']);echo"</pre>";
			//die();

			//print_r($pagination);
			//die();
			$this->load->view('header');
			$this->load->view('result',$data);
			$this->load->view('footer');

		} else{
			redirect('search/','location');
		}
		
	}

	public function review()
	{
		# code...
		if ($this->session->userdata('login')) {
			$data['id'] = $this->uri->segment(3);
			//print_r($id);
			$this->load->view('header');
			$this->load->view('review',$data);
			$this->load->view('footer');
		} else {
			redirect('login_exception','location');
		}
	}
}

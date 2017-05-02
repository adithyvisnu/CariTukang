<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {

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
		if (!($this->session->userdata('login'))) {
			redirect('search','location');
		}
	}
	public function index()
	{
		$this->load->view('header');
		$data['review'] = $this->select->get_review();
		$this->load->view('list_reviews',$data);
		$this->load->view('footer');
	}
	public function review()
	{
		# code...
		$data = $this->insert->review($_POST);
		if ($data) {
			# code...
				?> 
			<script type="text/javascript">
				
				alert('Terimakasih, review anda telah masuk ke data kami');
				top.location="<?php echo base_url();?>";

			</script> 
			<?php
		} else {
				?> 
			<script type="text/javascript">
				
				alert('Maaf, review anda tidak masuk');
				top.location="<?php echo base_url();?>";

			</script> 
			<?php
		}
		die();
	}
}

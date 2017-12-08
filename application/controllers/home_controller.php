<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home_controller extends CI_Controller {
	
		public function index()
		{
			$data['main_view'] = 'home_view';
			$this->load->view('template',$data);

		}
	
	}
	
	/* End of file home_controller.php */
	/* Location: ./application/controllers/home_controller.php */
?>
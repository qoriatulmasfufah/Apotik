<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $data = '';

	public function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
			$this->load->model('obat_model');
		}


	//PERLU DITANYAKAN??
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE)
			{
				redirect(base_url('index.php/admin/data_obat')); // session security, redirect dibuat yg ngerun controllernya.
			}else{
				$this->load->view('login');
			}	
	}



	public function login(){
			$this->load->view('login'); //buat nge run di crome nya, view('login')-->nama viewnya
		}


	// public function edit_obat()
	// {
	// 	if ($this->session->userdata('logged_in')==TRUE) {

	// 			$kode_obat=$this->uri->segment(3);

	// 			$data['main_view'] = 'detail_obat_view2';
	// 			$data['detil'] = $this->obat_model->get_detail_obat($kode_obat);
				
	// 			$this->load->view('template', $data);
	// 		}else{

	// 			redirect('admin');
	// 		}
	// }


	// public function do_edit_obat()
	// {
	// 	if ($this->input->post("submit")) {
	// 		$this->form_validation->set_rules('kode_obat', 'Kode Obat', 'trim|required');
	// 		$this->form_validation->set_rules('nama_obat', 'Nama Obat', 'trim|required');
	// 		$this->form_validation->set_rules('indikasi','Indikasi', 'trim|required');
	// 		$this->form_validation->set_rules('harga','Harga', 'trim|required|numeric');
	// 		$this->form_validation->set_rules('stock','Stock', 'trim|required|numeric');

	// 		if($this->form_validation->run() == TRUE){
	// 			if ($this->admin_model->update($this->uri->segment(3)) == TRUE)
	// 			{
	// 				$data['notif'] = "Edit Sukses";
	// 				$data['detil'] = $this->obat_model->get_detail_obat($this->uri->segment(3));
	// 				$data['main_view'] = 'detail_obat_view2';
	// 				$this->load->view('template',$data);
	// 			}
	// 			else {
	// 				$data['notif'] = "Edit Gagal";
	// 				$data['detil'] = $this->obat_model->get_detail_obat($this->uri->segment(3));
	// 				$data['main_view'] = 'detail_obat_view2';
	// 				$this->load->view('template',$data);
	// 			}
	// 		}else {
	// 			$data['notif'] = validation_errors();
	// 			$data['detil'] = $this->obat_model->get_detail_obat($this->uri->segment(3));
	// 			$data['main_view'] = 'detail_obat_view2';
	// 			$this->load->view('template',$data);
	// 		}

	// 	}
	// }

	public function masuk()
		{
			if ($this->input->post('submit')) 
			{
				$this->form_validation->set_rules('username','Username','trim|required'); // username depan adalah nama name pada form login nya
				$this->form_validation->set_rules('password','Password','trim|required'); // sama

				if ($this->form_validation->run() == TRUE) {
					if($this->admin_model->cek_user() == TRUE ){
						redirect(base_url('index.php/home_controller/index')); // nama tujuan file ketika di penjet
					}else{
						$data['notif'] = 'login gagal';
						$this->load->view('login',$data);
					}
					

				}else{
					$data['notif'] = validation_errors();
					$this->load->view('login',$data);
				}
			}
		}

	public function logout()
	{
		$data = array(
			'username' => '',
			'logged_in' => FALSE);
		$this->session->sess_destroy(); //sess_des untuk mematikan akun
		$this->load->view('login');
	}

	// public function kembali()
	// {
	// 	if ($this->input->post('back')) {
	// 		redirect('obat/data_obat');
	// 	}
		
	// }

	// function update_stok()
 //  	{
	//     if ($this->input->post('submit')) {
	//       $ido = $this->input->post('id_obat');
	//       $quan = $this->input->post('qty');
	//       $stok = $this->admin_model->getStokObat($ido);
	//       $tambah = (int)$quan + $stok;
	//       $this->admin_model->tambah($ido,$tambah);

	//       redirect(base_url().'index.php/admin/obat');
 //  		}
 //  	}
  }

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */


?>

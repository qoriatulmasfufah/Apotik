<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Obat extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('obat_model');
		}

		
		//untuk lihat obat
		public function data_obat(){

			if ($this->session->userdata('logged_in') == TRUE) {
				$data['main_view'] = 'data_obat_1';
				$data['obat'] = $this->obat_model->get_data_obat();
				$this->load->view('template', $data);
			}else{
				redirect('admin');
			}
		}

		//untuk tambah jenis obat
		public function obat_view(){
			$data['main_view'] = 'obat_view';
			$this->load->view('template', $data);
		}


		//validasi jika ingin tambah jenis obat
		public function simpan(){
			if ($this->input->post('submit')) {
				
				$this->form_validation->set_rules('nm_obat', 'Nama Obat', 'trim|required');
				$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
				$this->form_validation->set_rules('indikasi', 'Indikasi', 'trim|required');
				$this->form_validation->set_rules('stock', 'Stock', 'trim|required');


				if ($this->form_validation->run() == TRUE) {
					
					if($this->obat_model->insert() == TRUE){ //insert -> untuk menambah ke db
						$data['notif'] = 'Berhasil';
						$data['main_view'] = 'obat_view';
						$this->load->view('template', $data);
					}else{
						$data['notif'] = 'Gagal';
						$data['main_view'] = 'obat_view';
						$this->load->view('template', $data);

					}
				}else{
						$data['notif'] = validation_errors();
						$data['main_view'] = 'obat_view';
						$this->load->view('template', $data);
				}

			}
		}

		//lihat sebelum update
		public function lihat($id_obat){
			$id_obat = $this->uri->segment(3);
			$data['main_view'] = 'obat_view_detil';
			$data['detil'] = $this->obat_model->getdetil_byid($id_obat);
			$this->load->view('template', $data);
			var_dump($data);
		}

		//menampilkan data id dan nama pada tambah stock bisa dibilang lihat tambah stock
		public function tambah($id_obat){
			$id_obat = $this->uri->segment(3);
			$data['main_view'] = 'tambah_stock';
			$data['detil'] = $this->obat_model->tambah($id_obat);
			$this->load->view('template', $data);
			var_dump($data);
		}


		//untuk edit pada form obat
		public function edit(){

			if ($this->input->post('submit')) {
				
				$this->form_validation->set_rules('nm_obat', 'Nama Obat', 'trim|required');
				$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
				$this->form_validation->set_rules('indikasi', 'Indikasi', 'trim|required');
				$this->form_validation->set_rules('stock', 'Stock', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
					$id_obat = $this->uri->segment(3);
					if($this->obat_model->update($id_obat) == TRUE){
						$data['notif'] = 'Berhasil';
						$data['main_view'] = 'obat_view';
						$this->load->view('template', $data);
					}else{
						$data['notif'] = 'Gagal';
						$data['main_view'] = 'obat_view';
						$this->load->view('template', $data);

					}
				}else{
						$data['notif'] = validation_errors();
						$data['main_view'] = 'obat_view';
						$this->load->view('template', $data);
				}

			}
		}

		public function tambah_stock(){

			if ($this->input->post('submit')) {
				
				$this->form_validation->set_rules('jumlah_tambah', 'Stock', 'trim|required');

				if ($this->form_validation->run() == TRUE) {
					$id_obat = $this->input->post('id_obat');
					$jumlah_tambah = $this->input->post('jumlah_tambah');


					if($this->obat_model->tambah_stock($id_obat, $jumlah_tambah) == TRUE){
						redirect('obat/data_obat');
					}else{
						$data['notif'] = 'Gagal';
						$data['main_view'] = 'tambah_stock';
						$this->load->view('template', $data);

					}
				}else{
						$data['notif'] = validation_errors();
						$data['main_view'] = 'tambah_stock';
						$this->load->view('template', $data);
				}

			}
		}



			public function tampil_tambah_stok()
			{
				$stok_form 	= $this->input->post('stock'); //input->post untuk mengambil data dari inputan pada form
				$obat_form	= $this->input->post('obat');
				$stock_field = $this->obat_model->stock($obat_form);
				$stock_tambah = (int)($stock_field + $stok_form);

				
			}


		}




	
		// public function index()
		// {
		// 	if ($this->session->userdata('logged_in') == TRUE)
		// 	{
		// 		$data['main_view'] = 'welcome_view';
		// 		$this->load->view('template', $data);
		// 	} else {
		// 		redirect('login');
		// 	}	
		// }

		// public function data_obat()
		// {
		// 	if ($this->session->userdata('logged_in') == TRUE) {
		// 	$data['main_view'] = 'data_obat_view';
		// 	$data['obat'] = $this->obat_model->get_data_obat(); //obat diambil dari $obat dari view data_model
			
		// 	$this->load->view('template', $data);
		// 	} else {
		// 	redirect('admin');
		// 	}	

		// }


		// public function detail_obat()
		// {
		// 	if ($this->session->userdata('logged_in')==TRUE) {

		// 		$kode_obat=$this->uri->segment(3);

		// 		$data['main_view'] = 'detailobat_view';
		// 		$data['detil'] = $this->obat_model->get_detail_obat($kode_obat);
				
		// 		$this->load->view('template', $data);
		// 	}else{

		// 		redirect('admin');
		// 	}

			
		// }

		// public function hapus(){
		// 	if ($this->session->userdata('logged_in')== TRUE) 
		// 	{
		// 		$obat = $this->uri->segment(3); //deklarasi

		// 		if ($this->obat_model->delete($obat) == TRUE) //dari deklarasi atas
		// 		{
		// 			//Berhasil d hapus
		// 			redirect('obat/data_obat');
		// 		}else{
		// 			//Gagal
		// 			redirect('obat');
		// 		}
		// 	}else{
		// 		redirect('admin');
		// 	}
		// }


	

	
	/* End of file obat.php */
	/* Location: ./application/controllers/obat.php */
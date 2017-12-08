<?php
	date_default_timezone_set('Asia/Jakarta');

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Transaksi extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('transaksi_model');

		}

		public function index(){
			$data['main_view']='transaksi_jual';
			$this->load->view('template', $data);
		}


		public function transaksi(){
			if ($this->input->post('submit')) {

				$this->form_validation->set_rules('nm_pembeli', 'Nama Pembeli', 'trim|required');
				$this->form_validation->set_rules('id_obat', 'ID Obat', 'trim|required');
				$this->form_validation->set_rules('qty', 'Qty', 'trim|required');
				$this->form_validation->set_rules('tgl_transaksi', 'Tgl transaksi', 'trim|required');
				$this->form_validation->set_rules('qty', 'Qty', 'trim|required');

				if ($this->form_validation->run() == TRUE) {

					$id_obat = $this->input->post('id_obat');
					$qty = $this->input->post('qty');
					
					if($this->transaksi_model->insert() == TRUE){
						$this->transaksi_model->kurangi_stock($id_obat, $qty);
						$data['notif'] = 'Berhasil';
						$data['main_view'] = 'transaksi_jual';
						$this->load->view('template', $data);
					}else{
						$data['notif'] = 'Gagal';
						$data['main_view'] = 'transaksi_jual';
						$this->load->view('template', $data);

					}
				}else{
						$data['notif'] = validation_errors();
						$data['main_view'] = 'transaksi_jual';
						$this->load->view('template', $data);
				}

			}
		}


		public function lihat_transaksi(){

			if ($this->session->userdata('logged_in') == TRUE) {
				$data['main_view'] = 'data_transaksi_view';

				$data['obat'] = $this->transaksi_model->get_data_transaksi();
				$this->load->view('template', $data);
			}else{
				redirect('admin');
			}

		}


		



	
	}
	
	/* End of file transaksi.php */
	/* Location: ./application/controllers/transaksi.php */
?>
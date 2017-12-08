<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Obat_model extends CI_Model {
	

		public function get_data_obat()
		{
			return $this->db->order_by('id_obat','ASC')
							->get('obat')//nama obat
							->result();
		}


		public function insert(){
			$data = array(
				'nm_obat' 	=> $this->input->post('nm_obat'),
				'harga'		=> $this->input->post('harga'),
				'indikasi'	=> $this->input->post('indikasi'),
				'stock'		=> $this->input->post('stock')
				);

			$this->db->insert('obat', $data);

			if ($this->db->affected_rows() > 0 ) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function update($id_obat){
			$data = array(
				'nm_obat' 	=> $this->input->post('nm_obat'),
				'harga'		=> $this->input->post('harga'),
				'indikasi'	=> $this->input->post('indikasi'),
				'stock'		=> $this->input->post('stock')
				 );

			$this->db->where('id_obat',$id_obat)
					 ->update('obat', $data);


			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}
		}


		public function getdetil_byid($id_obat){
			return $this->db->where('id_obat',$id_obat) // kiriman dari controller
							->get('obat')
							->row();
					
		}


		//menampilkan
		public function tambah($id_obat){
			return $this->db->where('id_obat',$id_obat) // kiriman dari controller
							->get('obat')
							->row();
					
		}

		//ngubah di db
		public function tambah_stock($id_obat, $jumlah_tambah){
			$this->db->query('update obat set stock = stock + "'.$jumlah_tambah.'" where id_obat = "'.$id_obat.'"');
			
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		//buat ambil data dari id -> ndak dibuat tambah stok kok


		public function stock($id_obat){
			return $this->db->where('id_obat',$id_obat)
							->select('stock')
							->get('obat')
							->row();//perbaris
					
		}
		//ambil data obat keseluruhan-> bingung -> tdk untuk tambah stock

		public function ambil_data_obat()
		{
			return $this->db->order_by('id_obat','ASC')
							->get('obat')//nama obat
							->result(); //keseluruhan
		}

		//untuk update stok ->bingung -> ngga  uat tambah stock

		public function update_stock($id_obat,$stock_tambah){
			$data = array(
				'stock' 	=> $stock
				 );

			$this->db->where('id_obat',$id_obat)
					 ->update('obat', $data);


			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}
		}




		// public function get_detail_obat($kode_obat)
		// {

		// 	return $this->db->where('kode_obat', $kode_obat)
		// 					->get('tb_obat')
		// 					->row();
		// }


		// public function delete($kode_obat)
		// {
		// 	$this->db->where('kode_obat', $kode_obat)
		// 			->delete('tb_obat');
		// 			//cek apakah hapus berhasil

		// 			if ($this->db->affected_rows() > 0) {
		// 				return TRUE;
		// 			}else{
		// 				return FALSE;
		// 			}
		// }
	
	}
	
	/* End of file obat_model.php */
	/* Location: ./application/models/obat_model.php */
?>
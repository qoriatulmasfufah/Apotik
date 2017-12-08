<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function insert(){
			$data = array(
				'id_transaksi' 		=> NULL,
				'nm_pembeli'		=> $this->input->post('nm_pembeli'),
				'id_obat'			=> $this->input->post('id_obat'),
				'qty'				=> $this->input->post('qty'),
				'tgl_transaksi'		=> $this->input->post('tgl_transaksi')
				);

			$this->db->insert('transaksi', $data);

			if ($this->db->affected_rows() > 0 ) {
				return TRUE;
			}else{
				return FALSE;
			}
		}


	public function kurangi_stock($id_obat, $qty){
			$this->db->query('update obat set stock = stock - "'.$qty.'" where id_obat = "'.$id_obat.'"');
			
			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}
		}


	public function get_data_transaksi()
	{
		return $this->db->select('*')
						->join('obat','obat.id_obat=transaksi.id_obat')
						->order_by('id_transaksi','ASC')
						->get('transaksi')
						->result();
	}
}
	


	



/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */
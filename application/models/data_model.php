<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Data_model extends CI_model {
	
		
		public function get_data_pendaftar(){
			return $this->db->order_by('id','ASC')
							->get('tb_obat')// nama tabel
							->result();
		}


		public function get_detail_dataobat(){
			return ($this->session->userdata('logge_in';url))
			$data['main_view']= 'detailobat_view';
			$data['data']=$this->
		}
	
	}
	
	/* End of file data_model.php */
	/* Location: ./application/models/data_model.php */

?>
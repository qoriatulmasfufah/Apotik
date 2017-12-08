<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

	public function __construct()
	{
		parent::__construct();
	}

	public function cek_user(){
		
		$username = $this->input->post('username'); //name form
		$password = $this->input->post('password'); //name form

			$query = $this->db->where('username',$username) //nama field di db
							->where('password',$password)
							->get('akun'); //nm db nya



			//ndak paham
			if ($query->num_rows() > 0) {
				$data = array(
						'username'	=> $username,
						'level' 	=> $query->row()->level,
						'logged_in'	=> TRUE
						);

				$this->session->set_userdata($data);
				return TRUE;

			} else {
				return FALSE;
			}

	}


	// public function update($kode_obat){
	// 	$data = array(
	// 		// 'kode_obat' 	=> $this->input->post('kode_obat'),
	// 		'nama_obat' 	=> $this->input->post('nama_obat'),
	// 		'indikasi'  	=> $this->input->post('indikasi'),
	// 		'harga_obat'	=> $this->input->post('harga'),
	// 		'stock'			=> $this->input->post('stock')

	// 		);

	// 	$this->db->where('kode_obat', $kode_obat)
	// 			 ->update('tb_obat', $data);

	// 			if ($this->db->affected_rows() > 0) {
	// 				return TRUE;
	// 			}else{
	// 				return FALSE;
	// 			}
	// }


	// public function getStokObat($id_obat)
	//   {
	//     $this->db->select('stok')->from('obat')->where('id_obat',$id_obat);
	//     $query = $this->db->get();

	//     if ($query->num_rows() == 1) {
	//       $sql = $query->row();
	//       return $sql->stok;
	//     }
	//   }

	  
	 //  public function add_stock($id_obat)
  // {
  //   return $this->db->where('id_obat',$id_obat)
  //               ->get('obat')
  //               ->row();

  // }
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
?>
<?php 
/**
* 
*/
class wedding_model extends CI_Model
{
	
	function __construct(){
		$this->load->database();
	}

	function wedding_list(){
		$tampil = $this->db->get("tbl_wedding");
		return $tampil->result_array();
	}

	function wedding_get($id){
        $hasil = $this->db->get_where('tbl_wedding', array('id_package' => $id));
        return $hasil->row_array();
    }

	function wedding_create(){
		$data = array(
			'id_package' => $this->input->post('IdPaket'),
			'nama_package' => $this->input->post('NamaPaket'),
			'harga' => $this->input->post('Harga'),
			'descript' => $this->input->post('Deskripsi')
		);

		$this->db->insert('tbl_wedding', $data);

	}

	function wedding_update(){
		$data = array(
			'nama_package' => $this->input->post('NamaPaket'),
			'harga' => $this->input->post('Harga'),
			'descript' => $this->input->post('Deskripsi')
		);

		$this->db->where('id_package', $this->input->post('IdPaket'));
			return $this->db->update('tbl_wedding', $data);
	}

	function wedding_delete($id){
		$this->db->where('id_package', $id);
		$this->db->delete('tbl_wedding');
		return true;
	}

}







?>
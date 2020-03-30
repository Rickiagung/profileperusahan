<?php
class M_RekapSosmed extends CI_Model{

	function get_all_sosmed(){
		$sql="SELECT * FROM tbl_rekap_sosmed";
        $query=$this->db->query($sql);
        return $query->result();
		
	}
	function simpan_sosmed($sosmed){
		$hsl=$this->db->query("insert into tbl_rekap_sosmed(nama_sosmed) values('$sosmed')");
		return $hsl;
	}
	function update_sosmed($kode,$sosmed){
		$hsl=$this->db->query("update tbl_rekap_sosmed set nama_sosmed='$sosmed' where id_rekap_sosmed='$kode'");
		return $hsl;
	}
	function hapus_sosmed($kode){
		$hsl=$this->db->query("delete from tbl_rekap_sosmed where id_rekap_sosmed='$kode'");
		return $hsl;
	}
	
	function get_sosmed_byid($id_rekap_sosmed){
		$hsl=$this->db->query("select * from tbl_rekap_sosmed where id_rekap_sosmed='$id_rekap_sosmed'");
		return $hsl;
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Keberatan_informasi extends CI_Model{
    



    public function get_all_keberatan_informasi(){
        $q=$this->db->select('B.NAMA,B.TELEPON,B.EMAIL,B.ALAMAT,C.nama_provinsi,D.nama,E.ALASAN_KEBERATAN,A.DESKRIPSI_KEBERATAN_INFORMASI,A.TANGGAL_KEBERATAN,A.ID_KEBERATAN_INFORMASI')
        ->from('tabel_keberatan_informasi as A')            
        ->join('tabel_pelapor_keberatan as B', 'A.ID_PELAPOR=B.ID_PELAPOR')
        ->join('provinsi as C','B.id_prov=C.id_prov')
        ->join('kabupaten as D','B.id_kab=D.id_kab')
        ->join('tabel_alasan_keberatan as E','A.ID_ALASAN_KEBERATAN_INFORMASI=E.ID_ALASAN_KEBERATAN_INFORMASI')
        ->get();
         return $q->result_array();
    }

    public function simpan_keberatan_informasi($NAMA,$TELEPON,$EMAIL,$ALAMAT,$PROVINSI,$KAB_KOTA,
    $ALASAN_KEBERATAN,$DESKRIPSI_KEBERATAN_INFORMASI)
    {
 
        $datakeberatan1 = array(
            
            'NAMA' => $NAMA,
            'TELEPON' => $TELEPON,
            'EMAIL' => $EMAIL,
            'id_prov' => $PROVINSI,
            'id_kab' => $KAB_KOTA,
            'ALAMAT' => $ALAMAT
 
        );
       $this->db->insert('tabel_pelapor_keberatan',$datakeberatan1);
       $idpelapor=$this->db->insert_id();
    

       $datakeberatan4 = array(
            
        'ID_PELAPOR' => $idpelapor,
        'ID_ALASAN_KEBERATAN_INFORMASI' => $ALASAN_KEBERATAN,
        'TANGGAL_KEBERATAN' => date("Y-m-d"),
        'DESKRIPSI_KEBERATAN_INFORMASI' => $DESKRIPSI_KEBERATAN_INFORMASI

    );
        $this->db->insert('tabel_keberatan_informasi',$datakeberatan4);
        $this->session->set_flashdata('msg_alert', 'Pengaduan Berhasil');

    }

    
   

    // public function get_nama_provinsi($ID_PROVINSI){
    //     $q=$this->db->select('id_provinsi,provinsi')->from('tabel_alamat')->where('id_provinsi',$ID_PROVINSI)->get();
    //     return $q->result();
    // }
    // public function get_nama_kabupaten($ID_PROVINSI){
    //     $q=$this->db->select('id_provinsi,kab/kota')->from('tabel_alamat')->where('id_provinsi',$ID_PROVINSI)->get();
    //     return $q->result();
    // }
    public function delete_pengaduan_asn($ID_PENGADUAN_ASN,$ID_PELAPOR,$ID_PROVINSI,$ID_NIP_TERLAPOR,$ID_TERLAPOR) {
        $this->db->delete('tabel_pengaduan_asn',$ID_PENGADUAN_ASN);
        $this->db->delete('tabel_pelapor',$ID_PELAPOR);
        $this->db->delete('tabel_alamat',$ID_PROVINSI);
        $this->db->delete('tabel_nama_terlapor_asn',$ID_NIP_TERLAPOR);
        $this->db->delete('tabel_terlapor_asn',$ID_TERLAPOR);
    }

    public function getProv()
	{
        $sql="SELECT * FROM provinsi";
        $query=$this->db->query($sql);
        return $query->result();
	}

	public function getKab($id_prov)
	{
        $sql="SELECT * FROM kabupaten WHERE id_prov=$id_prov";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function getKota()
	{
        $sql="SELECT * FROM kabupaten";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getAlasanKeberatan()
	{
        $sql="SELECT * FROM tabel_alasan_keberatan";
        $query=$this->db->query($sql);
        return $query->result();
    }
    
}


?>
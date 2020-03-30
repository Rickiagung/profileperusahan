<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class M_Permohonan_informasi extends CI_Model{

    
    public function get_all_permohonan(){
        $q=$this->db->select('B.IDENTITAS,C.NOMOR_IDENTITAS,C.NAMA,C.UNIT_KERJA,C.SUB_UNIT_KERJA,C.ALAMAT,D.nama_provinsi,E.nama,A.TANGGAL_PERMOHONAN,F.BIDANG,G.KATEGORI,A.DESKRIPSI_PERMOHONAN,A.ID_PERMOHONAN_INFORMASI')
        ->from('tabel_permohonan_informasi_publik as A')            
        ->join('tabel_nama_pemohon_informasi_publik as C','A.ID_PEMOHON=C.ID_PEMOHON')
        ->join('tabel_identitas as B','C.ID_IDENTITAS=B.ID_IDENTITAS')
        ->join('provinsi as D','C.id_prov=D.id_prov')
        ->join('kabupaten as E','C.id_kab=E.id_kab')
        ->join('tabel_bidang_yang_dituju as F','A.ID_BIDANG_YANG_DITUJU=F.ID_BIDANG_YANG_DITUJU')
        ->join('tabel_kategori_pemohon as G','A.ID_KATEGORI_PERMOHONAN=G.ID_KATEGORI_PERMOHONAN')
        ->get();
         return $q->result_array();
    }

    public function simpan_permohonan_informasi($IDENTITAS,$NOMOR,$NAMA,$UNIT_KERJA,$SUB_UNIT_KERJA,
    $ALAMAT,$PROVINSI,$KAB_KOTA,$KATEGORI_PERMOHONAN,$DESKRIPSI_PERMOHONAN_INFORMASI,$BIDANG_YANG_DITUJU)
    {
 
        $datapengaduan1 = array(
            'NAMA' => $NAMA,
            'NOMOR_IDENTITAS' => $NOMOR,
            'ID_IDENTITAS' => $IDENTITAS,
            'ALAMAT' => $ALAMAT,
            'id_prov' => $PROVINSI,
            'id_kab' => $KAB_KOTA,
            'UNIT_KERJA' => $UNIT_KERJA,
            'SUB_UNIT_KERJA' => $SUB_UNIT_KERJA
 
        );

       $this->db->insert('tabel_nama_pemohon_informasi_publik',$datapengaduan1);
       $idpemohon=$this->db->insert_id();

        $datapengaduan2 = array(
            'ID_PEMOHON'=>$idpemohon,
            'ID_KATEGORI_PERMOHONAN' => $KATEGORI_PERMOHONAN,
            'ID_BIDANG_YANG_DITUJU' => $BIDANG_YANG_DITUJU,
            'DESKRIPSI_PERMOHONAN'=> $DESKRIPSI_PERMOHONAN_INFORMASI,
            'TANGGAL_PERMOHONAN' => date("Y-m-d")
          
        );
        $this->db->insert('tabel_permohonan_informasi_publik',$datapengaduan2);
       
        $this->session->set_flashdata('msg_alert', 'Pengaduan Berhasil');
    }

    

    public function getIndetitas(){
        $sql="SELECT ID_IDENTITAS, IDENTITAS FROM tabel_identitas";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function getProv()
	{
        $sql="SELECT * FROM provinsi";
        $query=$this->db->query($sql);
        return $query->result();
	}

	public function getKab()
	{
        $sql="SELECT * FROM kabupaten";
        $query=$this->db->query($sql);
        return $query->result();
    }
  
    public function getBidangYangDituju(){
        $sql="SELECT * FROM tabel_bidang_yang_dituju";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getKategoriPemohon(){
        $sql="SELECT * FROM tabel_kategori_pemohon";
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
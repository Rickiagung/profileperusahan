<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_Pengaduan_asn extends CI_Model{
    

    public function get_all_pengaduan_asn(){
        $q=$this->db->select('A.ID_PELAPOR_PENGADUAN_ASN,A.TANGGAL_PENGADUAN,B.NAMA,B.TELEPON,B.EMAIL,B.ALAMAT,C.nama_provinsi,D.nama,E.IDENTITAS_TERLAPOR,E.NIP_TERLAPOR,E.NAMA_TERLAPOR,E.DESKRIPSI_PELAPORAN,E.SAKSI')
        ->from('tabel_pengaduan_asn as A')
        ->join('tabel_pelapor_asn as B','A.ID_PELAPOR=B.ID_PELAPOR')
        ->join('tabel_terlapor_asn as E','A.ID_TERLAPOR=E.ID_TERLAPOR')            
        ->join('provinsi as C','B.id_prov=C.id_prov')
        ->join('kabupaten as D','B.id_kab=D.id_kab')
        ->get();
        return $q->result_array();
    }


    public function simpan_pengaduan_asn($NAMA,$TELEPON,$EMAIL,$ALAMAT,$PROVINSI,$KAB_KOTA,
    $NIP_TERLAPOR,$NAMA_TERLAPOR,$IDENTITAS_TERLAPOR,$DESKRIPSI_PELAPORAN,$SAKSI){
 
        $datapengaduan2 = array(
            
            'NAMA' => $NAMA,
            'TELEPON' => $TELEPON,
            'EMAIL' => $EMAIL,
            'id_prov' => $PROVINSI,
            'id_kab' => $KAB_KOTA,
            'ALAMAT' => $ALAMAT
 
        );
       $this->db->insert('tabel_pelapor_asn',$datapengaduan2);
       $idpelapor=$this->db->insert_id();

        $datapengaduan5 = array(

            'NIP_TERLAPOR' => $NIP_TERLAPOR,
            'NAMA_TERLAPOR' => $NAMA_TERLAPOR,
            'IDENTITAS_TERLAPOR' => $IDENTITAS_TERLAPOR,
            'DESKRIPSI_PELAPORAN' => $DESKRIPSI_PELAPORAN,
            'SAKSI'=> $SAKSI
       
        );
       $this->db->insert('tabel_terlapor_asn',$datapengaduan5);
       $idterlapor=  $this->db->insert_id();


        $datapengaduan1 = array(
           
            'ID_PELAPOR' =>  $idpelapor,
            'ID_TERLAPOR' => $idterlapor,
            'TANGGAL_PENGADUAN' => date("Y-m-d")
        );
   
        $this->db->insert('tabel_pengaduan_asn',$datapengaduan1);
        $this->session->set_flashdata('msg_alert', 'Pengaduan Berhasil');
    }

    
   

    public function get_nama_provinsi($ID_PROVINSI){
        $q=$this->db->select('id_provinsi,provinsi')->from('tabel_alamat')->where('id_provinsi',$ID_PROVINSI)->get();
        return $q->result();
    }
    public function get_nama_kabupaten($ID_KABUPATEN){
        $q=$this->db->select('id_provinsi,kab/kota')->from('tabel_alamat')->where('id_provinsi',$ID_KABUPATEN)->get();
        return $q->result();
    }
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

	public function getKab()
	{
        $sql="SELECT * FROM kabupaten";
        $query=$this->db->query($sql);
        return $query->result();
	}

	// public function getId_Pelapor($NAMA)
	// {
	//   $sql="SELECT * FROM kecamatan WHERE id_kab={$id_kab} ORDER BY nama";
	//   $query=$this->db->query($sql);
    // return $query->result();
	// }

	// public function getId_Terlapor($IDENTITAS_TERLAPOR)
	// {
	//   $sql="SELECT * FROM kelurahan WHERE id_kec={$id_kec} ORDER BY nama";
	//   $query=$this->db->query($sql);
    // return $query->result();
	// }
}


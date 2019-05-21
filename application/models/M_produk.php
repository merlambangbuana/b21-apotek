<?php
class M_produk extends CI_Model {
  public function __construct() {
        parent::__construct();
  }
  
  function get_obat_list($limit, $start)
	{
		$query = $this->db->get('obat', $limit, $start);
		return $query;
	}
	
	
  public function input($data){
	try{
      $this->db->insert('obat', $data);
      return true;
    }catch(Exception $e){
    }
  }
  
  public function input2($data){
	try{
      $this->db->insert('apoteker', $data);
      return true;
    }catch(Exception $e){
    }
  }



public function data(){
 $this->db->select('*');    
        $this->db->from('obat');
        $this->db->join('kategori', 'obat.jenis_obat = kategori.jenis_obat','left');
        $query = $this->db->get();
        return $query->result();
 }
 
 public function data2(){
 $this->db->select('*');    
        $this->db->from('apoteker');
        $this->db->join('jadwal', 'apoteker.shift = jadwal.shift','left');
        $query = $this->db->get();
        return $query->result();
 }
 
 function get_option() {
 $this->db->select('*');
 $this->db->from('kategori');
 $query = $this->db->get();
 return $query->result();
}

function get_option2() {
 $this->db->select('*');
 $this->db->from('jadwal');
 $query = $this->db->get();
 return $query->result();
}

 public function getid($id_obat){
     $this->db->where('id_obat', $id_obat);
     return $this->db->get('obat')->result();
   }
 public function getid2($id_apoteker){
     $this->db->where('id_apoteker', $id_apoteker);
     return $this->db->get('apoteker')->result();
   }

 public function gambar($id_obat)
   {
     $this->db->where('id_obat', $id_obat);
     return $this->db->get('obat')->row();
   }
   
 public function gambar2($id_apoteker)
   {
     $this->db->where('id_apoteker', $id_apoteker);
     return $this->db->get('apoteker')->row();
   }
   
 public function ubah($id_obat, $data) {
     try{
       $this->db->where('id_obat',$id_obat)->limit(1)->update('obat', $data);
       return true;
     }catch(Exception $e){}
 }
 
 public function ubah2($id_apoteker, $data) {
     try{
       $this->db->where('id_apoteker',$id_apoteker)->limit(1)->update('apoteker', $data);
       return true;
     }catch(Exception $e){}
 }

 public function hapus($id_obat){
   $this->db->where('id_obat', $id_obat);
   $this->db->delete('obat');
 }
 
 public function hapus2($id_apoteker){
   $this->db->where('id_apoteker', $id_apoteker);
   $this->db->delete('apoteker');
 }

}
?>

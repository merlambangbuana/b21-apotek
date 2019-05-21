<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_produk');

		if($this->session->userdata('status') != "login"){
		redirect(base_url("login"));
		}
	}
	
	
	
	public function index()
	{
		$this->load->view('v_admin');
	}
	
	

	
    public function input(){
		
		$data=array('get_jenis_obat'=> $this->M_produk->get_option());
		$this->load->view('input',$data);
    }
    public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './assets/images/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 1000, 'max_width' => 1000,
        'max_height' => 1000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('Cadmin/input', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['gambar' => $file['file_name'],
           'id_obat' => set_value('id_obat'),
           'nama_obat' => set_value('nama_obat'),
		   'jenis_obat' => set_value('jenis_obat'),	
           'harga' => set_value('harga'),
		   'stock' => set_value('stock'),
           'deskripsi_obat' => set_value('deskripsi_obat')
         ];
          $this->M_produk->input($data); //memasukan data ke database
          redirect('Cadmin/data'); //mengalihkan halaman

      }
  }

  public function data(){
		
  $data['obat'] = $this->M_produk->data();
  $this->load->view('data', $data);
}

public function ubah($id_obat){
    
	$data['obat'] = $this->M_produk->getid($id_obat);
    $this->load->view('update', $data);
  }

  public function proses_ubah($id_obat){
    $gambar = $this->M_produk->gambar($id_obat);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 1000, 'max_width' => 1000,
          'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('update', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['gambar' => $file['file_name']];
            unlink('assets/images/'.$gambar->gambar); //menghapus gambar yang lama
        }
      }
      $data['nama_obat']      = set_value('nama_obat');
      $data['harga']   = set_value('harga');
      $data['stock']   = set_value('stock');
	  $data['deskripsi_obat']   = set_value('deskripsi_obat');
      $this->M_produk->ubah($id_obat, $data); //memasukan data ke database
      redirect('Cadmin/data'); //mengalihkan halaman
  }

  public function hapus($id_obat){
  $gambar = $this->M_produk->gambar($id_obat);
  unlink('assets/images/'.$gambar->gambar);
  $this->M_produk->hapus($id_obat);
  redirect('Cadmin/data'); //mengalihkan halaman
}

 public function input2(){
		
		$data=array('get_shift'=> $this->M_produk->get_option2());
		$this->load->view('input2',$data);
    }
    public function proses_input2(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './assets/images/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 9000, 'max_width' => 9000,
        'max_height' => 9000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('Cadmin/input2', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['gambar' => $file['file_name'],
           'id_apoteker' => set_value('id_apoteker'),
           'nama' => set_value('nama'),
		   'jenis_kelamin' => set_value('jenis_kelamin'),	
           'alamat' => set_value('alamat'),
		   'umur' => set_value('umur'),
		   'nomer_telepon' => set_value('nomer_telepon'),
		   'shift' => set_value('shift')
         ];
          $this->M_produk->input2($data); //memasukan data ke database
          redirect('Cadmin/data2'); //mengalihkan halaman

      }
  }

  public function data2(){
  $data['apoteker'] = $this->M_produk->data2();
  $this->load->view('data2', $data);
}

public function ubah2($id_apoteker){
    
	$data['apoteker'] = $this->M_produk->getid2($id_apoteker);
    $this->load->view('update2', $data);
  }

  public function proses_ubah2($id_apoteker){
    $gambar = $this->M_produk->gambar2($id_apoteker);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 9000, 'max_width' => 9000,
          'max_height' => 9000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('update2', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['gambar' => $file['file_name']];
            unlink('assets/images/'.$gambar->gambar2); //menghapus gambar yang lama
        }
      }
      $data['nama']      = set_value('nama');
      $data['alamat']   = set_value('alamat');
	  $data['umur']   = set_value('umur');
	  $data['nomer_telepon']      = set_value('nomer_telepon');
      $this->M_produk->ubah2($id_apoteker, $data); //memasukan data ke database
      redirect('Cadmin/data2'); //mengalihkan halaman
  }

  public function hapus2($id_apoteker){
  $gambar = $this->M_produk->gambar2($id_apoteker);
  unlink('assets/images/'.$gambar->gambar);
  $this->M_produk->hapus2($id_apoteker);
  redirect('Cadmin/data2'); //mengalihkan halaman
}


}

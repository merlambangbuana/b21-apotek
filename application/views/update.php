<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-clearmin.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/roboto.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/material-design.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/small-n-flat.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/font-awesome.min.css">
		<style>
  .kotak
 {
  padding:10px;
  border:1px solid #e8e8e8;
  margin-bottom:15px;
  background:#F4F4F4;
  border-radius:5px;
 }
  </style>
        <title>Apotek Database</title>
    </head>
    <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><a href="index.html" class="cm-logo"></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li class="active"><a href="<?php echo site_url('Cadmin')?>" class="sf-house">Home</a></li>
                            <li class="cm-submenu">
                                <a class="sf-window-layout">Data Obat<span class="caret"></span></a>
                                <ul>
                                    <li><a href="<?php echo site_url('Cadmin/input')?>">Tambah obat</a></li>
                                    <li><a href="<?php echo site_url('Cadmin/data')?>">Data Obat</a></li>
                                </ul>
                            </li>
                            <li class="cm-submenu">
                                 <a class="sf-notepad">Data User<span class="caret"></span></a>
                                <ul>
                                    <li><a href="<?php echo site_url('Cadmin/input2')?>">Tambah User</a></li>
                                    <li><a href="<?php echo site_url('Cadmin/data2')?>">Data User</a></li>
                                </ul>
                            </li>
                           <li><a href="<?php echo site_url('Login/logout')?>" class="sf-lock-open">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>Data Obat</h1> 
                    
                </div>
                
               
            </nav>
        </header>
        <div id="global">
		<div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-body">
					
	<h3> Merubah Data Produk </h3>	
   <?php foreach($obat as $r) {?>
     <?=form_open_multipart('Cadmin/proses_ubah/'.$r->id_obat)?>
    <div class="form-group">
      <label for="nama_obat">Nama Obat :</label>
      <input type="text" name="nama_obat" class="form-control" placeholder="Masukan Nama Produk" id="nama_obat" value="<?php echo $r->nama_obat ?>" required>
    </div>
    <div class="form-group">
      <label for="harga">Harga :</label>
      <input type="number" name="harga" class="form-control" placeholder="Masukan Harga Produk" id="harga" value="<?php echo $r->harga ?>" required>
    </div>
    <div class="form-group">
      <label for="stock">Stock :</label>
      <input type="number" name="stock" class="form-control" placeholder="Masukan Stok Produk" id="stok" value="<?php echo $r->stock ?>" required>
    </div>
	<div class="form-group">
      <label for="deskripsi_obat">Deskripsi Obat :</label>
      <input type="text" name="deskripsi_obat" class="form-control" placeholder="Masukan Deskripsi Obat" id="deskripsi_obat" value="<?php echo $r->deskripsi_obat ?>" required>
    </div>
    <div class="form-group">
      <label for="userfile">Gambar :</label>
      <input type="file" name="userfile" class="file">
      <div class="input-group col-xs-12">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
        <input type="text" class="form-control input-lg" disabled placeholder="Upload Gambar">
        <span class="input-group-btn">
          <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
        </span>
      </div><br>
    </div>
  <?php }?>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 </div>

     </div>
		</div>
		</div>
		</div>

            
            <footer class="cm-footer"><span class="pull-left">Muhamad Erlambang Buana</span><span class="pull-right">&copy; Manajemen Informatika 2017</span></footer>
        </div>
        <script src="<?= base_url()?>assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="<?= base_url()?>assets/js/jquery.mousewheel.min.js"></script>
        <script src="<?= base_url()?>assets/js/jquery.cookie.min.js"></script>
        <script src="<?= base_url()?>assets/js/fastclick.min.js"></script>
        <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>assets/js/clearmin.min.js"></script>
        <script src="<?= base_url()?>assets/js/demo/home.js"></script>
		
    </body>
</html>
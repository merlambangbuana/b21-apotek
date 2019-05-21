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
  .file {
    visibility: hidden;
    position: absolute;
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
                    <h1>Data Apoteker</h1> 
                    
                </div>
                
                
            </nav>
        </header>
        <div id="global">
		<div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-body">
					
	<h3> Menambah Data User </h3>	
   <?=form_open_multipart('Cadmin/proses_input2')?>
    <div class="form-group">
      <label for="id_apoteker">Id Apoteker :</label>
      <input type="text" name="id_apoteker" class="form-control" placeholder="Masukan Id Apoteker" id="id_apoteker" required>
    </div>
    <div class="form-group">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" id="nama" required>
    </div>
	<div class="form-group">
    <label for="shift"> Shift</label>
        <select class="form-control" name="shift">
                <option  value="">---Shift---</option>                    
            <?php foreach($get_shift as $row) { ?>
                <option value="<?php echo $row->shift;?>"><?php echo $row->shift;?></option>
            <?php } ?>
        </select>    
    </div>                 
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <input type="radio" name="jenis_kelamin"   id="jenis_kelamin" value="Laki-laki" required>Laki-laki
	  <input type="radio" name="jenis_kelamin"   id="jenis_kelamin" value="Perempuan" required>Perempuan
	</div>
    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" id="alamat" required>
    </div>
	<div class="form-group">
      <label for="umur">Umur :</label>
      <input type="text" name="umur" class="form-control" placeholder="Masukan Umur" id="umur" required>
    </div>
	<div class="form-group">
      <label for="nomer_telepon">No Handphone :</label>
      <input type="text" name="nomer_telepon" class="form-control" placeholder="Masukan Nomer Telepon" id="nomer_telepon" required>
    </div>
	<div class="form-group">
      <label for="username">Username :</label>
      <input type="text" name="username" class="form-control" placeholder="Masukan Username" id="username" required>
    </div>
	<div class="form-group">
      <label for="password">Password:</label>
      <input type="text" name="password" class="form-control" placeholder="Masukan Password" id="Password" required>
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
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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
		<script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>
    </body>
</html>
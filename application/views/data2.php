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
 .img2 {
    position: relative;
    
    width:  300px;
    height: 300px;
    
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
                                <a class="sf-notepad">Text Editor<span class="caret"></span></a>
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
                   <div class="panel-heading">Data User</div>
                            <div class="panel-body">
                
          <?php foreach($apoteker as $p){ ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="kotak">
            <a href="#"></a>
            <a href="#"><img class="img2"  src="<?php echo base_url() . 'assets/images/'.$p->gambar  ?>"/></a>
              <div class="card-body">
                <h1 class="card-title">
                  <a href="#"><?php echo $p->nama ?></a>
                </h1>
                <h4><?php echo $p->jenis_kelamin ?></h4>
                  <p class="card-text">Shift : <?php echo $p->shift ?></p>
             </div>
              <div class="card-footer">
                <a href="<?php echo base_url();?>index.php/Cadmin/ubah2/<?php echo $p->id_apoteker ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                <a href="<?php echo base_url();?>index.php/Cadmin/hapus2/<?php echo $p->id_apoteker ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
              </div>
            </div>
          </div>
      <?php } ?>
				</div>	
					</div>
							
		</div>
		</div>

            
            
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
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
    
    width:  200px;
    height: 200px;
    
}
  </style>
  <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url()?>assets/js/admin.js"></script>
  <script type="text/javascript" src="<?= base_url()?>assets/js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
				</script>
    
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
                            <div class="panel-heading">Data Obat</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover display" id="dt1">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
											<th>Id Obat</th>
                                            <th>Nama Obat</th>
											<th>Jenis Obat</th>
                                            <th>Harga</th>
                                            <th>Stock</th>
											<th>Deskripsi Obat</th>
                                            <th>Deskripsi Jenis</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										<?php foreach($obat as $p){ ?>
                                        <td><img class="img2" src="<?php echo base_url() . 'assets/images/'.$p->gambar  ?>"/></td>
										<td><?php echo $p->id_obat ?></td>
										<td><?php echo $p->nama_obat ?></td>
										<td><?php echo $p->jenis_obat ?></td>
										<td>Rp.<?php echo number_format($p->harga,0,",","."); ?></td>
										<td><?php echo $p->stock ?></td>
										<td><?php echo $p->deskripsi_obat ?></td>
										<td><?php echo $p->deskripsi_jenis_obat ?></td>  
										<td>	
											<a href="<?php echo base_url();?>index.php/Cadmin/ubah/<?php echo $p->id_obat ?>" >Edit</a> 
											<a href="<?php echo base_url();?>index.php/Cadmin/hapus/<?php echo $p->id_obat ?>" >Delete</a> 
										</td>
										</tr>
										 <?php } ?>
                                    </tbody>
                                </table>
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
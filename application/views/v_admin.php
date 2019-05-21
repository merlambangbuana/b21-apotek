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
                    <h1>Home</h1> 
                    
                </div>
                            
            </nav>
        </header>
        <div id="global">
            <div class="container-fluid cm-container-white">
                <h2 style="margin-top:0;">B21.com</h2> 
                <p>B21.com yang memiliki slogan “Asli, Komplit, Cepat” hadir sebagai Apotek Online pertama di Indonesia yang "benar-benar" buka 24 Jam non Stop dan terlengkap di Indonesia. Hal ini memudahkan masyarakat Indonesia mendapatkan obat kapan saja, di mana saja dengan cepat. Obat diantar oleh Apotek terdekat ke lokasi pasien. Ya, secara otomatis sistem menentukan Apotek terdekat untuk mengantar obat ke rumah/kantor/lokasi pasien. 

Selain KOMPLIT ragam obatnya, B21Klik menjamin semua produk yang dibeli pada situs B21Klik adalah 100% ASLI. Harga yang tercantum di website B21Klik adalah harga pasti bukan estimasi. Pesanan pun langsung dapat dikirim dengan CEPAT karena dilayani oleh Apotek Mitra B21Klik dan Apotek B-21 terdekat dengan alamat tujuan. </p>
            </div>
            <div class="container-fluid">
                <div class="row cm-fix-height">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="<?= base_url()?>assets/img/stock.png" alt="Less support" class="img-responsive">
                                <br>
                                <p>Stock obat obatan yang ada di apotek.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="<?= base_url()?>assets/img/deskripsi.png" height="90%" width="80%"  alt="Responsive across devices" class="img-responsive">
                                <br>
                                <p>Deskripsi obat obatan yang ada di apotek.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="<?= base_url()?>assets/img/money.png" alt="money" height="90%" width="80%" class="img-responsive">
                                <br>
                                <p>Harga obat - obatan yang ada di apotek.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cm-fix-height">
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <a href="<?php echo site_url('Cadmin/data2')?>" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?= base_url()?>assets/img/sf/notepad.svg" alt="notepad">
                                </span>
                                <h4>Data User</h4> <small>Berisi tentang data apoteker yang dapat mengakses halaman ini</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <a href="<?php echo site_url('Cadmin/data')?>" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?= base_url()?>assets/img/sf/window-layout.svg" alt="window-layout">
                                </span>
                                <h4>Data Obat</h4> <small>Berisi tentang data obat yang ada di apotek B21</small>

                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <a href="<?php echo site_url('Login/logout')?>" class="panel panel-default thumbnail cm-thumbnail">
                            <div class="panel-body text-center">
                                <span class="svg-48">
                                    <img src="<?= base_url()?>assets/img/sf/lock-open.svg" alt="lock-open">
                                </span>
                                <h4>Log Out</h4> <small>Keluar dari dashboard admin</small>

                            </div>
                        </a>
                    </div>
                </div>
				
                <div class="panel panel-default">
                    <div class="panel-heading">Check our fancy colors</div>
                    <div class="panel-body" id="demo-buttons">
                        <p>Click buttons below to change navbar main color :</p>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-primary" data-switch-color="primary">primary</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-success" data-switch-color="success">success</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-info" data-switch-color="info">info</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-warning" data-switch-color="warning">warning</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-danger" data-switch-color="danger">danger</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-gray" data-switch-color="gray">gray</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-yellow" data-switch-color="yellow">yellow</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-purple" data-switch-color="purple">purple</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-turquoise" data-switch-color="turquoise">turquoise</button>
                                <br>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <button class="btn btn-block btn-midnight" data-switch-color="midnight">midnight</button>
                                <br>
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
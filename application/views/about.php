<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>assets/user/css/round-about.css" rel="stylesheet">
	
	<style>	
	.img2 {
    position: relative;
    
    width:  350px;
    height: 350px;
    
}
</style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('Login/home')?>">B21.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Login/home')?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('Login/about')?>">About</a>
            </li>
              <a class="nav-link" href="<?php echo site_url('Login')?>">Login Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Introduction Row -->
      
        <br>
      
      <p>Web designer backend and frontend developer </p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Sekilas Tentang Saya</h2>
        </div>
        <div class="col-lg-12 col-sm-2 text-center mb-2">
          <img class="rounded-circle img-fluid d-block mx-auto img2" src="<?= base_url()?>assets/img/proil.jpg" alt="">
          <h3>Muhamad Erlambang Buana</h3>
           
          
          <p>Mahasiswa semester 2 jurusan manajemen informatika fakultas pendidikan vokasi universitas brawijaya </p>
        </div>
       
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-primary">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; B21.com</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url()?>assets/user/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

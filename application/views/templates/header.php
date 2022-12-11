<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/Logo SIMILU transparan.png'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css" >

    
      <script src="<?php echo base_url('assets/'); ?>js/Chart.min.js"></script>  
    

    <title><?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
  <div class="container">
    <div>
      <img class="logo" src="<?php echo base_url('assets/img/Logo SIMILU transparan.png'); ?>">
    </div>
    <div>
      <a href="" class="btn btn-light" data-toggle="modal" data-target="#modalLogin"> Login / Masuk </a>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php if($this->session->userdata('id_masyarakat') != NULL) :?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link nav-active active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-active" href="#">Pemilihan Suara</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata('nama'); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
        </div>
      </li>
    </div>
  <?php endif;?>
  </div>
</nav>
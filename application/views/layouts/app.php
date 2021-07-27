<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title> <?= isset($title) ? $title : 'TeleBI' ?>- SMK10 · ONLINE SHOP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/assets/css/app.css">
    
  </head>
  <body>

<!-- Navbar-->
 <?php $this->load->view('layouts/_navbar'); ?>
<!-- Endnavbar -->

    <!-- Content -->
    <?php $this->load->view($page); ?>
    <!-- End Content -->
    <script src="/assets/libs/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/dist/sweetalert2.all.min.js"></script>
  </body>
</html>
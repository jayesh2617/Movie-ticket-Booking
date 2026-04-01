<?php 
include('../../config.php'); 
if(!isset($_SESSION['theatre'])){
    header('location:../../admin/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Theatre Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../admin/dist/css/skins/skin-purple.min.css">
    
    <script src="../../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>T</b>P</span>
      <span class="logo-lg"><b>Theatre</b> Panel</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="get_show.php"><i class="fa fa-plus"></i> <span>Add Show</span></a></li>
        <li><a href="view_shows.php"><i class="fa fa-eye"></i> <span>View Shows</span></a></li>
        <li><a href="todays_shows.php"><i class="fa fa-calendar"></i> <span>Today's Shows</span></a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
  </aside>
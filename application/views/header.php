<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	 <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.css" >
  <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <?php if($this->session->userdata('UserID') ==1): ?>
   <a class="navbar-brand" href="<?php echo base_url("") ?>">SYSTEM ZARZĄDZANIA PRACOWNIKAMI</a>
   <?php else: ?>
    <a class="navbar-brand"  href="#">SYSTEM ZARZĄDZANIA PRACOWNIKAMI</a>
    <?php endif; ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
        <?php if($this->session->userdata('UserID')== 1) : ?>
      <li class="nav-item">
     <a class="nav-link" href="<?php echo base_url(" ") ?>">Lista pracowników<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="<?php echo base_url("employee/createEmployee") ?>">Dodaj pracownika</a>
      </li>

            
<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("login/logout")?>"> Wyloguj</a>
      </li>

 
    </ul>
<div class="row">
  <div class="col-sm-1">  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

   </div></div>
  <div class="col-sm-7"> <?php echo form_open("dashboard/search", ['class'=>'navbar-form navbr-right', 'role'=>'search']); ?>
      <?php echo form_input(['name'=>'query', 'class'=>'form-control','placeholder'=>'Szukaj pracownika']);?></div>
  <div class="col-sm-1"> <?php echo form_submit(['value'=>'Szukaj', 'class'=>'btn btn-primary']);?>
      <?php echo form_close(); ?>
     <?php echo form_error('query','<div class="text-danger">','</div>'); ?></div>
</div>


      <?php elseif($this->session->userdata('UserID')) : ?>
<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("login/logout")?>"> Wyloguj</a>
      </li>

  <?php endif; ?>
  </div>
</nav>




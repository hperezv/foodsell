<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>Senamhi Control Doc</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/admin/datepicker.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/datepickerb/css/admin/bootstrap2.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/datepickerb/css/admin/datepicker2.css" rel="stylesheet" type="text/css">

  </head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand">SENAMHI DR-06</a>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/documents">Documentos</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'manufacturers'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/tipodoc">Tipo documentos</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilitarios <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/dbinport">Inport Base Datos</a>
	            </li>
	          </ul>
	          <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	               <a href="<?php echo base_url(); ?>admin/logout">Salir</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>	

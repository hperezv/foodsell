<!DOCTYPE html>
<html>
<head>
	<title> Datepicker author by @Andgaa </title>

	<!--this css for bootstrap 2-->
   <link href="<?php echo base_url(); ?>assets/datepickerb/css/bootstrap2.css" rel="stylesheet" type="text/css">
 
 <link href="<?php echo base_url(); ?>assets/datepickerb/css/datepicker2.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
	<h1>Date picker for Bootstrap 2</h1>
	<form name="datepicker3" action="#" method="get">
		<label class="control-label"> DATE </label>
         <input type="text" id="datepicker" name="date" class="input"  >  	
	</form>
</div>

	<!-- this java script must be appear when you use twitter bootstrop -->
    <script src="js/jquery.js"></script>
   
	
	<!--this datepicker java script for bootstrap 2-->
     <script type="text/javascript" src="<?php echo base_url()?>assets/datepickerb/js/jquery.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/datepickerb/js/bootstrap-datepicker2.js" charset="UTF-8"></script>
    
    <script> 
    //options method for call datepicker
	$('#datepicker').datepicker({
         format: 'yyyy-mm-dd',
		 autoclose: true,
		 todayHighlight: true
	})
    </script>
   
</body>
</html>

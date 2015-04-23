    

<link href="<?php echo base_url(); ?>assets/datepickerb/css/bootstrap2.css" rel="stylesheet" type="text/css">
 <link href="<?php echo base_url(); ?>assets/datepickerb/css/datepicker2.css" rel="stylesheet" type="text/css">

    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">New</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Adding <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>
 
      <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Correcto!</strong> El Nuevo Documento ha sido creado';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Cuidado!</strong> Vuelva a intentarlo.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');
      $options_manufacture = array('' => "Select");
      foreach ($manufactures as $row)
      {
        $options_manufacture[$row['id']] = $row['name'];
      }

      //form validation
      echo validation_errors();
      
      echo form_open('admin/documents/add', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Numero Doc</label>
            <div class="controls">
              <input type="text" id="" name="numdoc" value="<?php echo set_value('numdoc'); ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <?php
          echo '<div class="control-group">';
            echo '<label for="tipodoc_id" class="control-label">Tipo Doc</label>';
            echo '<div class="controls">';
              //echo form_dropdown('tipodoc_id', $options_manufacture, '', 'class="span2"');
              
              echo form_dropdown('tipodoc_id', $options_manufacture, set_value('tipodoc_id'), 'class="span2"');

            echo '</div>';
          echo '</div">';
          ?>
          <p></p>
          <div class="control-group">
            <label for="inputError" class="control-label">Asunto</label>
            <div class="controls">
              <input type="text" id="" name="asunto" value="<?php echo set_value('asunto'); ?>">
              <!--<span class="help-inline">Fecha</span>-->
            </div>
          </div>          
          <div class="control-group">
            
            <label for="inputError" class="control-label">Fecha</label>
            <div class="controls">
              <input type="text" id="datepicker" name="fecha" class="input"  value="<?php set_value('fecha'); ?>" >    
            </div>
          </div>

          <div class="control-group">
            <label for="inputError" class="control-label">Observación</label>
            <div class="controls">
              <input type="text" name="observ" value="<?php echo set_value('observ'); ?>">
              <!--<span class="help-inline">OOps</span>-->
            </div>
          </div>
         
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Grabar</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>
         
    </div>
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



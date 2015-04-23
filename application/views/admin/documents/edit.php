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
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Exito!</strong> Documento ha sido  grabado.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Error!</strong> Realize los  cambios  y envie de nuevo';
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

      echo form_open('admin/documents/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Número Doc</label>
            <div class="controls">
              <input type="text" id="" name="numdoc" value="<?php echo $product[0]['numdoc']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <?php
          echo '<div class="control-group">';
            echo '<label for="tipodoc_id" class="control-label">Tipo Doc</label>';
            echo '<div class="controls">';
              //echo form_dropdown('tipodoc_id', $options_manufacture, '', 'class="span2"');
              
              echo form_dropdown('tipodoc_id', $options_manufacture, $product[0]['tipodoc_id'], 'class="span2"');

            echo '</div>';
          echo '</div">';
          ?>
          <p></p>
          <div class="control-group">
            <label for="inputError" class="control-label">Asunto</label>
            <div class="controls">
              <input type="text" id="" name="asunto" value="<?php echo $product[0]['asunto']; ?>">
              <!--<span class="help-inline">Fecha</span>-->
            </div>
          </div>          
          <div class="control-group">
            <label for="inputError" class="control-label">Fecha</label>
            <div class="controls">
              <input type="text" id="" name="fecha" value="<?php echo $product[0]['fecha'];?>">
              <!--<span class="help-inline">Fecha</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Observación</label>
            <div class="controls">
              <input type="text" name="observ" value="<?php echo $product[0]['observ']; ?>">
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
     
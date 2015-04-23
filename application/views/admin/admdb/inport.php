    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
         
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php echo form_open_multipart('admin_dbinport/to_mysql');?>
 
                <input type="file" id="exampleInputFile" name="excel" style="width:1000px" class=''>
                 <p class="help-block">Seleccione el archivo</p>
                <br /><br />
                
                <span class="label label-info">Escribe el nombre de la tabla</span> 
                <div class ="alert alert-success">documents</div><br />
                <input type="text" name="table" /><br></br>
           
                <span class="label label-info"> Escribe separados por una coma los campos:</span>                
                <div class ="alert alert-success">tipodoc_id,numdoc,asunto,fecha,observ</div>
                <input type="text" name="fields" style="width:600px" />
           
                <input type="submit" value="Importar" class="btn btn-primary"/>
           
          <?php echo form_close() ?>

          </div>
      </div>
    </div>
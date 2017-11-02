<?php include("header.php"); ?>
		
<div class="container">
	<div class="row contacto">
      <div class="col-md-4 col-md-offset-4">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center ">Contactanos</legend>
    
            <!-- Name input-->
            <div class="form-group">
              
              <div class="col-md-12">
                <input id="name" name="name" type="text" placeholder="Nombre" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
     
              <div class="col-md-12">
                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
             
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message" placeholder="Escribe aquí tu mensaje..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-default btn-sm">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<?php include_once("footer.php"); ?>

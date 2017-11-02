

<?php require_once "header.php";  ?>
<!-- /.ACÁ ARRANCA EL FORM 
<form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
</form> -->

<div class="container">
  <div class="row hidden-xs hidden-sm">
      <div id="my-slider" class="carousel slide" data-ride="carousel">
        
        <!-- indicadores dot nav -->

        <ol class="carousel-indicators">
            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
            <li data-target="#my-slider" data-slide-to="1"></li>
            <li data-target="#my-slider" data-slide-to="2"></li>
        </ol>

        <!-- wrapper para los slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="images/SLIDE5.jpg" alt="algo" class="img-responsive">
              <div class="carousel-caption">
                <h2></h2>
              </div>
          </div>
          <div class="item">
              <img src="images/SLIDE3.jpg" alt="algo" class="img-responsive">
              <div class="carousel-caption">
                <h2></h2>
              </div>
          </div>
          <div class="item">
              <img src="images/SLIDE4.jpg" alt="algo" class="img-responsive">
              <div class="carousel-caption">
                <h2></h2>
              </div>
          </div>
        </div>

        <!-- controles next y prev -->

        <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
  </div>  
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/categoria_dormitorio.jpg" alt="...">
        
      </div><!-- /thumbnail-->
    </div><!-- /col-sm-6 col-md-4 -->
     <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/categoria_living.jpg" alt="...">
        
      </div><!-- /thumbnail-->
    </div><!-- /col-sm-6 col-md-4 -->
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="images/categoria_comedor.jpg" alt="...">
        
      </div><!-- /thumbnail-->
    </div><!-- /col-sm-6 col-md-4 -->
  </div><!-- /row -->
  <div class="jumbotron" style="background-color: white; text-align: center;">
    <h4>Productos destacados</h4>
  </div>
</div>  
<div class="container">
  <div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/producto1.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div><!-- /col-sm-6 col-md-4 -->
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/producto2.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div><!-- /col-sm-6 col-md-4 -->
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/producto3.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div><!-- /col-sm-6 col-md-4 -->
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/producto1.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div><!-- /col-sm-6 col-md-4 -->
</div>
 
</div>
<?php require_once("footer.php"); ?>
</body>
</html>


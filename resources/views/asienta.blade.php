@extends("masterPage")
@section("principal")
<div class="container">

{{-- Notifica al usuario de su logeo --}}
  @if (session()->has('mensaje'))
    <div class="alert alert-success notificacion" role="alert">
      {{session('mensaje')}}
    </div>
  @endif

  <div class="row hidden-xs hidden-sm">
      <div id="my-slider" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
            <li data-target="#my-slider" data-slide-to="1"></li>
            <li data-target="#my-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="images/SLIDE-A.jpg" alt="algo" class="img-responsive">
              <div class="carousel-caption">
                <a href="#" class="btn btn-info" role="button">Ver Black Friday Sale</a>
              </div>
          </div>
          <div class="item">
              <img src="images/SLIDE-B.jpg" alt="algo" class="img-responsive">
              <div class="carousel-caption">
                <h2></h2>
              </div>
          </div>
          <div class="item">
              <img src="images/SLIDE5.jpg" alt="algo" class="img-responsive">
              <div class="carousel-caption">
                <h2></h2>
              </div>
          </div>
        </div>

        <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>

      </div> 
</div>

  <div class="btn-group btn-group-justified botones-categoria">
    <a href="#" class="btn">Dormitorio</a>
    <a href="#" class="btn">Exteriores</a>
    <a href="#" class="btn">Living</a>
  </div>

  <div class="row">
    <h4 id="productosDestacados">Productos destacados</h4>
  </div>  
  <div class="row">
  <div class="col-sm-6 col-md-3 img-prod">
    <div class="thumbnail"">
      <img src="images/producto1.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 img-prod">
    <div class="thumbnail"">
      <img src="images/producto2.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 img-prod">
    <div class="thumbnail"">
      <img src="images/producto3.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 img-prod">
    <div class="thumbnail"">
      <img src="images/producto1.jpg" alt="...">
      <div class="caption">
        <h4>Banco madera jardín</h4>
        <p>Producto 123</p>
        <h5>$3.500</h5>
        <p><a href="#" class="btn btn-danger" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection
@extends("masterPage")
@section("principal")
<div class="container">

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
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="images/SLIDE1.jpg" alt="algo" class="img-responsive">
              <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                              <div class="titulo-slide1">_ <br> BLACK FRIDAY EN ASIENTA</div>
                            </h2>
                            <br>
                            <h3>
                              <div class="subtitulo-slide1"> Disfrutá de los mejores descuentos comprando on-line. </div>
                            </h3>
                          
                        </div>
                    </div>
              <div class="carousel-caption">
                <a href="#" class="btn btn-info" role="button">Ver Black Friday Sale</a>
              </div>
          </div>
          <div class="item">
              <img src="images/SLIDE2.jpg" alt="algo" class="img-responsive">
              <div class="header-text hidden-xs">
                        <div class="col-md-4 text-left">
                            <h2>
                              <div class="titulo-slide2">_ <br> REPOSERAS <br>TERRAZO <br>FIBRA <br> </div>
                            </h2>
                            <br>
                            <h3>
                              <div class="subtitulo-slide2"> Reposera de madera maciza jatobá con terminación ecoblindaje. Con fibra sintética simil ratán de polietileno. Resistente a los rayos solares y humedad. Acción insecticida y funguicida. </div>
                            </h3>
                            <a href="#" class="btn btn-info btn-lg btn-comprar" role="button">COMPRAR</a>
                            <br>
                        </div>
                    </div>
           </div>
        </div>
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
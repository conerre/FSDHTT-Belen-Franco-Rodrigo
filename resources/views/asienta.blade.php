@extends("masterPage")
@section("principal")
<div class="container">
   {{--@if (session()->has('mensaje'))
   <div class="alert alert-success notificacion" role="alert">
      {{session('mensaje')}}
   </div>
   @endif--}}
   <div class="row hidden-xs hidden-sm">
      <div id="my-slider" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
            <li data-target="#my-slider" data-slide-to="1"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="images/SLIDE1.jpg" alt="algo" class="img-responsive">
               <div class="header-text ">
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
               <img src="images/SLIDE2.jpg" alt="algo" class="img-responsive hidden-xs">
               <div class="header-text hidden-xs">
                  <div class="col-md-4 text-left">
                     <h2>
                        <div class="titulo-slide2">_ <br> REPOSERAS <br>TERRAZO <br>FIBRA <br> </div>
                     </h2>
                     <br>
                     <h4>
                        <div class="subtitulo-slide2"> Reposera de madera maciza jatobá con terminación ecoblindaje. Con fibra sintética simil ratán de polietileno. Resistente a los rayos solares y humedad. 
                        -
                        </div>
                     </h4>
                     <a href="producto/3" class="btn btn-info btn-lg btn-comprar" role="button">COMPRAR</a>
                     <br>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    <div class="row hidden-md hidden-xl hidden-lg">
      
                  <div class="col-md-12 text-center">
                     <h2>
                        <div class="titulo-slide1-xs">_ <br>ASIENTA<br>-</div>
                     </h2>
                     <h5>
                        <div class="col-sm-8 col-sm-offset-2 "> Encontrá los mejores asientos para tu hogar. La mejor calidad y estilo a la puerta de tu casa.
                     
                        </div>
                     </h5>
                     <a href="producto/3" class="btn btn-info btn-sm btn-sm-home" role="button">Ver OFERTAS del mes</a>
                  </div>
   </div>
   <div class="btn-group btn-group-justified botones-categoria ">
      @foreach(Request::get('categories')  as $category)
      <a href="/categoria/{{$category->id}}" class="btn c-divider">{{$category->name}}</a>
      @endforeach
   </div>
   @if(session('usuario'))
 <div class="btn-group btn-todos-productos btn-group-justified ">
      <a href="productos" class="btn btn">Ver todos</a>
   
   </div>
@endif
   <div class="row">
      <h4 id="productosDestacados">Últimos productos</h4>
   </div>
   @foreach($products->chunk(4) as $chunk)
   <div class="row">
      @foreach($chunk as $product)
      <div class="col-sm-6 col-md-3 img-prod">
         <div class="thumbnail">
            <a href="/producto/{{$product->id}}"><img src="{{$product->rutaThumbnail()}}" alt="imagen de producto"></a>
            <div class="caption">
               <h4>{{$product->name}}</h4>
               <h5>$ {{$product->price}}</h5>
                 <p>
                  
                  @if(session('usuario'))
                     @if(session("carrito") && in_array($product->id, session("carrito")))
                          <form class="" action="/quitarCarrito" method="POST">
                              {{csrf_field()}}
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Quitar del carro</button>
                          </form>
                        @else
                          <form class=" " action="/agregarCarrito" method="POST">
                              {{csrf_field()}}
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <button class="btn btn-default btn-xs" type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                          </form>
                        @endif
                     @endif

                   <a href="/producto/{{$product->id}}" class="btn btn-info" role="button">Comprar</a></p>
               @if(session('usuario') && session('usuario')->type==2)
               <a href="/borrarProducto/{{$product->id}}"><button type="button" name="button" class="btn btn-danger btn-xs">Elminar producto</button></a>
               <a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-edit-product btn-xs">Editar producto</button></a>        
               @endif
            </div>
         </div>
      </div>
      @endforeach
   </div>
   @endforeach
   <div class="row">
      <h4 id="productosDestacados">Productos destacados</h4>
   </div>
   @foreach($destacados->chunk(4) as $chunk)
   <div class="row">
      @foreach($chunk as $destacado)
      <div class="col-sm-6 col-md-3 img-prod">
         <div class="thumbnail">
            <a href="/producto/{{$destacado->id}}"><img src="{{$destacado->rutaThumbnail()}}" alt="imagen de producto"></a>
            <div class="caption">
               <h4>{{$destacado->name}}</h4>
               <h5>$ {{$destacado->price}}</h5>
               <p>

                 @if(session('usuario'))
                     @if(session("carrito") && in_array($product->id, session("carrito")))
                          <form class="" action="/quitarCarrito" method="POST">
                              {{csrf_field()}}
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Quitar del carro</button>
                          </form>
                        @else
                          <form class="" action="/agregarCarrito" method="POST">
                              {{csrf_field()}}
                              <input type="hidden" name="id" value="{{$product->id}}">
                              <button class="btn btn-default btn-xs" type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                          </form>
                        @endif
                     @endif
  

                     <a href="/producto/{{$product->id}}" class="btn btn-default" role="button">Comprar</a></p>
               @if(session('usuario') && session('usuario')->type==2)
               <a href="/borrarProducto/{{$destacado->id}}"><button type="button" name="button" class="btn btn-danger">Elminar producto</button></a>
               <a href="/editarProducto/{{$destacado->id}}"><button type="button" class="btn btn-warning">Editar producto</button></a>        
               @endif
            </div>
         </div>
      </div>
      @endforeach
   </div>
   @endforeach   
</div>
@endsection
@extends("masterPage")
@section("principal")
<div class="container productoBigContainer">
   <div class="row col-md-10 col-md-offset-1 col-xs-12">
      <div class="col-md-6 col-sm-6 col-xs-12 item-photo">
         <img class="imagen-producto" src="{{$product->rutaThumbnail()}}">
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 productoContainer">
         <!-- Datos del vendedor y titulo del producto -->
         <h3>{{$product->name}}</h3>
         <!-- Precios -->
         <h6 class="title-price"><small>PRECIO</small></h6>
         <h3>$ {{$product->price}}</h3>
         <!-- Detalles especificos del producto -->
         <div class="section">
            <h6 class="title-attr"><small>STOCK</small></h6>
            <div>
               {{$product->stock}}
            </div>
         </div>
         <div class="section">
            <h6 class="title-attr"><small>CANTIDAD</small></h6>
           
         </div>
         <!-- Botones de compra -->
         <div class="section">
            <div class="section">
            @if(session('usuario'))
               <a href="/compro/{{$product->id}}"><button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Comprar</button></a>
            </div>
            <br>
                @if($enCarrito)
                    <form class="" action="/quitarCarrito" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Quitar del carro</button>
                    </form>
                @else
                    <form class="" action="/agregarCarrito" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                    </form>
                @endif    
            @endif 
         </div>
         @if(session('usuario') and session('usuario')->type==2)
      
         <a href="/borrarProductoDeDetalle/{{$product->id}}"><button type="button" name="button" class="btn btn-danger btn-xs">Eliminar producto</button></a><br><br>
         <a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning btn-xs">Editar producto</button></a>
       
         @endif
      </div>
      <div class="col-xs-12">
         <ul class="menu-items">
            <li class="active">Detalle del producto</li>
         </ul>
         <div class="descripcion-producto">
            <p>
               <small>
               {{$product->description}}
               </small>
            </p>
         </div>
      </div>
   </div>
</div>
@endsection
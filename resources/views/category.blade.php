@extends("masterPage")
@section("principal")
<div class="categoryContainer">
  @if(isset($category->id))
  <h1>
     {{$category->name}}
     @if(session('usuario') && session('usuario')->type==2)
     <a href="/borrarCategoria/{{$category->id}}">
     <button type="button" name="button" class="btn btn-danger btn-xs">Eliminar categoria</button>
     </a>
     @endif
  </h1>
  @foreach($category->productos->chunk(4) as $chunk)
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
                            <form class="" action="/agregarCarrito" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button class="btn btn-default btn-xs" type="submit"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                            </form>
                          @endif
                       @endif
    

                       <a href="/producto/{{$product->id}}" class="btn btn-info" role="button">Comprar</a></p>
                 @if(session('usuario') && session('usuario')->type==2)
                 <a href="/borrarProducto/{{$product->id}}"><button type="button" name="button" class="btn btn-danger btn-xs">Elminar producto</button></a>
                 <a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning btn-xs">Editar producto</button></a>        
                 @endif
              </div>
           </div>
        </div>
     @endforeach
  </div>
  @endforeach
        <div style="text-align: center">
          {{$category->products->links()}}
        </div>
  @else
  <h1 class="nombre-categoria">No existe la categoría</h1>
  @endif 

</div>  
@endsection
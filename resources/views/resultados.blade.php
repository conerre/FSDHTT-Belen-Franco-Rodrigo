@extends("masterPage")
@section("principal")
@foreach($products->chunk(4) as $chunk)
<div class="row">
   @foreach($chunk as $product)
   <div class="col-sm-6 col-md-3 img-prod">
      <div class="thumbnail">
         <a href="/producto/{{$product->id}}"><img src="{{$product->rutaThumbnail()}}" alt="imagen de producto"></a>
         <div class="caption">
            <h4>{{$product->name}}</h4>
            <h5>$ {{$product->price}}</h5>
            <p>@if($enCarritoP)
                       <form class="" action="/quitarCarrito" method="POST">
                           {{csrf_field()}}
                           <input type="hidden" name="id" value="{{$product->id}}">
                           <button class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Quitar del carro</button>
                       </form>
                   @else
                       <form class="" action="/agregarCarrito" method="POST">
                           {{csrf_field()}}
                           <input type="hidden" name="id" value="{{$product->id}}">
                           <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                        </form>
            @endif     
            <a href="/producto/{{$product->id}}" class="btn btn-default" role="button">Comprar</a></p>
            @if(session('usuario') && session('usuario')->type==2)
            <a href="/borrarProducto/{{$product->id}}"><button type="button" name="button" class="btn btn-danger">Elminar producto</button></a>
            <a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning">Editar producto</button></a>        
            @endif
         </div>
      </div>
   </div>
   @endforeach
</div>
@endforeach
@foreach($categories as $category)
	@foreach($category->productos->chunk(4) as $chunk)
	<div class="row">
	   @foreach($chunk as $product)
	   <div class="col-sm-6 col-md-3 img-prod">
	      <div class="thumbnail">
	         <a href="/producto/{{$product->id}}"><img src="{{$product->rutaThumbnail()}}" alt="imagen de producto"></a>
	         <div class="caption">
	            <h4>{{$product->name}}</h4>
	            <h5>$ {{$product->price}}</h5>
	            <p>@if($enCarritoC)
	                       <form class="" action="/quitarCarrito" method="POST">
	                           {{csrf_field()}}
	                           <input type="hidden" name="id" value="{{$product->id}}">
	                           <button class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Quitar del carro</button>
	                       </form>
	                   @else
	                       <form class="" action="/agregarCarrito" method="POST">
	                           {{csrf_field()}}
	                           <input type="hidden" name="id" value="{{$product->id}}">
	                           <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
	                        </form>
	            @endif     
	            <a href="/producto/{{$product->id}}" class="btn btn-default" role="button">Comprar</a></p>
	            @if(session('usuario') && session('usuario')->type==2)
	            <a href="/borrarProducto/{{$product->id}}"><button type="button" name="button" class="btn btn-danger">Elminar producto</button></a>
	            <a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning">Editar producto</button></a>        
	            @endif
	         </div>
	      </div>
	   </div>
	   @endforeach
	</div>
	@endforeach  
@endforeach	
@endsection
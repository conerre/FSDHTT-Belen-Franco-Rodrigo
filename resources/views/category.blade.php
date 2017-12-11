@extends("masterPage")
@section("principal")
@if(isset($category->id))
<h1>
   {{$category->name}}
   @if(session('usuario') && session('usuario')->type==2)
   <a href="/borrarCategoria/{{$category->id}}">
   <button type="button" name="button" class="btn btn-danger">Eliminar categoria</button>
   </a>
   @endif
</h1>
@foreach($category->products->chunk(4) as $chunk)
<div class="row">
   @foreach($chunk as $product)
   <div class="col-sm-6 col-md-3 img-prod">
      <div class="thumbnail">
         <a href="/producto/{{$product->id}}"><img src="{{$product->rutaThumbnail()}}" alt="imagen de producto"></a>
         <div class="caption">
            <h4>{{$product->name}}</h4>
            <h5>$ {{$product->price}}</h5>
            <p><a href="#" class="btn btn-info" role="button">Agregar a carrito</a> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
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
{{$category->products->links()}}
@else
<h1 class="nombre-categoria">No existe la categoría</h1>
@endif 
@endsection
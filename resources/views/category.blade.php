@extends("masterPage")

@section("principal")
	@if(isset($category->id))
       </h2>{{$category->name}}</h2>
       @if(session('usuario') && session('usuario')->type==2)
       		<a href="/borrarCategoria/{{$category->id}}">
            	<button type="button" name="button" class="btn btn-danger">Eliminar categoria</button>
            </a>
       @endif
		<ul>
			@foreach($category->products as $product)
          <li>
              <a href="/producto/{{$product->id}}"><img class="thumbnail-producto" src="{{$product->rutaThumbnail()}}"></a>
              <a href="/producto/{{$product->id}}">{{$product->name}}</a>
              @if(session('usuario') && session('usuario')->type==2)
              <a href="/borrarProducto/{{$product->id}}"><button type="button" name="button" class="btn btn-danger">Elminar producto</button></a>
              <a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning">Editar producto</button></a>        
        @endif
          </li>
			@endforeach
		</ul>
    @else
    	</h2>No existe la categoría</h2>  
   	@endif 
@endsection
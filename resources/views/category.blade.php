@extends("masterPage")

@section("principal")
	@if(isset($category->id))
       </h2>{{$category->name}}</h2>
       @if(session('usuario')->type==2)
       		<a href="/borrarCategoria/{{$category->id}}">
            	<button type="button" name="button" class="btn btn-danger">Borrar categoria</button>
            </a>
       @endif
		<ul>
			@foreach($category->products as $product)
			<li><a href="/producto/{{$product->id}}">{{$product->name}}</a></li>
			@endforeach
		</ul>
    @else
    	</h2>No existe la categoría</h2>  
   	@endif 
@endsection
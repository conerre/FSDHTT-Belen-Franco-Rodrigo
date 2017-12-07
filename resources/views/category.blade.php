@extends("masterPage")

@section("principal")
	@if(isset($category->id))
       </h2>{{$category->name}}</h2>
		<ul>
			@foreach($category->products as $product)
			<li><a href="/producto/{{$product->id}}">{{$product->name}}</a></li>
			@endforeach
		</ul>
    @else
    	</h2>No existe la categoría</h2>  
   	@endif 
@endsection
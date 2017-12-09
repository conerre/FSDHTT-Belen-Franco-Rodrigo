@extends("masterPage")
@section("principal")

<ul>
	@foreach($products as $product)
		<li>
			<a href="/producto/{{$product->id}}">{{$product->name}}</a>
			@if(session('usuario')->type===2)
				<a href="/borrarProducto/{{$product->id}}"><button type="button" class="btn btn-danger">Eliminar producto</button></a>
				<a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning">Editar producto</button></a>
			@endif
		</li>
	@endforeach 
<ul>
@endsection
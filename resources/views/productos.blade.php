@extends("masterPage")
@section("principal")


<div class="table-responsive">
<table class="table table-hover">
	 <thead>
	 	<tr>
        <th>img</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>codigo</th>
    	</tr>
      </thead>

<tbody>
		@foreach($products as $product)
	<tr>
		
			<td>
			<a href="/producto/{{$product->id}}"><img class="fotoeditar" src="{{$product->rutaThumbnail()}}"> </a>
			</td>

			<td><a href="/producto/{{$product->id}}">{{$product->name}}</a></td>
			<td><a href="/producto/{{$product->id}}">{{$product->price}}</a></td>
			<td><a href="/producto/{{$product->id}}">{{$product->stock}}</a></td>
			<td><a href="/producto/{{$product->id}}">{{$product->article_code}}</a></td>
	
			@if(session('usuario')->type===2)
				<td>
				<a href="/borrarProducto/{{$product->id}}"><button type="button" class="btn btn-danger">Eliminar</button></a>
				<a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-warning">Editar</button></a>
			</td>
			
			@endif
			
		</tr>
	@endforeach
	</tbody>
</table>
</div>
@endsection
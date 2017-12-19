
@extends("masterPage")
@section("principal")

<div class="row ">
@if(session('usuario') && session('usuario')->type==2)
	<div class="jumbotron admin-row-prod">
		<div class="col-xs-12 col-md-4 text-center">
			<a href="/agregarProducto"><button type="button" class="btn btn-info">Agregar producto</button></a><br>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<a href="/productos"><button type="button" class="btn btn-info">Editar producto</button></a><br>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<a href="/agregarCategoria"><button type="button" class="btn btn-info">Agregar categoría</button></a>
		</div>
	</div>
@endif
	<div class="col-xs-12 col-md-12 text-center">
	<h3 id="subtitulo-prod" >Listado</h3>
	</div>
</div>	
<div class="table-responsive text-right">
<table class="table table-hover text-right">
	 <thead>
	 	<tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Código</th>
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
	
			@if(session('usuario') && session('usuario')->type===2)
				<td><a href="/editarProducto/{{$product->id}}"><button type="button" class="btn btn-info">Editar</button></a></td>
				<td><a href="/borrarProducto/{{$product->id}}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
			@endif
		</tr>
	@endforeach
	</tbody>
</table>
	<div style="text-align: center">
	{{$products->links()}}
	</div>
</div>
@endsection
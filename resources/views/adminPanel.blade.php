@extends("masterPage")
@section("principal")
<div class="row admin-row">
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
@endsection




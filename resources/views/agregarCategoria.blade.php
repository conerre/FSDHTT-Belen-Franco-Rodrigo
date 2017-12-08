@extends("masterPage")

@section("principal")
  <h1>Agregar Categoría</h1>
  @if (count($errors) > 0)
    		<div class="alert alert-danger">
        		<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
    		   </ul>
	    </div>
	@endif
<br>	
  <form class="" action="/agregarCategoria" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <h3>Nombre:</h3> <input class="form-control addCategoryControl" type="text" name="name" value="{{old("name")}}">
    </div>
   	<div class="form-group">
      <input type="submit" class="btn btn-primary" value="Agregar Categoría">
  	</div>
  </form>
@endsection

@extends("masterPage")

@section("principal")
  <h1>Agregar Producto</h1>
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
  <form class="" action="/agregarPelicula" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <h3>Nombre:</h3> <input class="form-control addPControl" type="text" name="name" value="{{old("name")}}">
    </div>
    <div class="form-group">
    <h3>Código de artículo:</h3> <input class="form-control addPControl" type="text" name="articleName" value="{{old("articleName")}}">
    </div>
    <div class="form-group">
    <h3>Precio:</h3> <input class="form-control addPControl" type="number" name="price" value="{{old("price")}}">
    </div>
    <div class="form-group">
    <h3>Stock:</h3> <input class="form-control addPControl" type="text" name="stock" value="{{old("stock")}}">
    </div>
    <div class="form-group">
    <h3>Descripción:</h3> <input class="form-control addPControl" type="text" name="description" value="{{old("description")}}">
    </div>
    <h3>Categoría:</h3>
    <select class="form-control" name="genero">
        @foreach($categories as $category)
          @if ($category->id == old("category"))
            <option value="{{$category->id}}" selected>
              {{$category->name}}
            </option>
          @else
            <option value="{{$category->id}}">
              {{$category->name}}
            </option>
          @endif
        @endforeach
      </select>
	
  </form>
@endsection

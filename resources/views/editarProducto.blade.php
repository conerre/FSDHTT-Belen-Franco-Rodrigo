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
  <form class="" action="/editarProducto" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <h3>Nombre:</h3> <input class="form-control addProductControl" type="text" name="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
    <h3>Código de artículo:</h3> <input class="form-control addProductControl" type="text" name="article_code" value="{{$product->article_code}}">
    </div>
    <div class="form-group">
    <h3>Precio:</h3> <input class="form-control addProductControl" type="number" name="price" value="{{$product->price}}">
    </div>
    <div class="form-group">
    <h3>Stock:</h3> <input class="form-control addProductControl" type="text" name="stock" value="{{$product->stock}}">
    </div>
    <div class="form-group">
    <h3>Descripción:</h3> <textarea id="descripcionProducto" class="form-control addProductControl" type="text-area" name="description" value="{{$product->description}}"></textarea>
    </div>
    <h3>Categoría:</h3>
    <select class="form-control addProductControl" name="category">
        @foreach($categories as $category)
          @if ($category->id == $product->category_id)
            <option value="{{$category->id}}" selected>
              {{$category->name}}
            </option>
          @else
            <option value="{{$category->id}}">
              {{$category->name}}
            </option>
          @endif
        @endforeach
      </select> <br>
	 <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Editar Producto">
  </div>
  </form>

@endsection
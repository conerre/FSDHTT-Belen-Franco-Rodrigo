@extends("masterPage")

@section("principal")
<div class="row">
<div class="col col-md-8 offset-md-2">
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
  <form class="" action="/agregarProducto" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    <h4>Nombre:</h4> <input class="form-control addProductControl" type="text" name="name" value="{{old("name")}}">
    </div>
    <div class="form-group">
    <h4>Código de artículo:</h4> <input class="form-control addProductControl" type="text" name="article_code" value="{{old("article_code")}}">
    </div>
    <div class="form-group">
    <h4>Precio:</h4> <input class="form-control addProductControl" type="number" name="price" value="{{old("price")}}">
    </div>
    <div class="form-group">
    <h4>Stock:</h4> <input class="form-control addProductControl" type="text" name="stock" value="{{old("stock")}}">
    </div>
    <div class="form-group">
    <h4>Descripción:</h4> <textarea id="descripcionProducto" class="form-control addProductControl" type="text-area" name="description" value="{{old("description")}}"></textarea>
    </div>
    <div class="form-group">
    <h4>Imagen:</h4> <input type="file" name="thumbnail" id="fileToUpload"> 
    </div>
    <h4>Categoría:</h4>
    <select class="form-control addProductControl" name="category">
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
      </select> <br>
	 <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Agregar Producto">
  </div>
  </form>
</div>
  </div>
@endsection

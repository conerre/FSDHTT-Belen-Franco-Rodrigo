@extends("masterPage")

@section("principal")
	@if($category->id)
       </h2>{{$category->name}}</h2>
    @else
    	</h2>No existe la categoría</h2>  
   	@endif 
@endsection
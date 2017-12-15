@extends("masterPage")
@section("principal")
<ul>
   @foreach($products as $product)
   <li>
      <div class="thumbnail">
         <a href="/producto/{{$product->id}}"><img src="{{$product->rutaThumbnail()}}" alt="imagen de producto"></a>
         <div class="caption">
            <h4>{{$product->name}}</h4>
            <h5>$ {{$product->price}}</h5>
         </div>
      </div>
    </li>  
   @endforeach
<ul>   
{{$products->links()}}
@endsection
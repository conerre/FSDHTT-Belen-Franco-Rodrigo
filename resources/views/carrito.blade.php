@extends("masterPage")
@section("principal")

<div class="container">
  
 
  <div class="col-md-6 col-md-offset-3 carrito">
    <h2>Mi Carrito de compras</h2>
    <table class="table table-hover">
      <thead>
        <th>ID</th>
        <th>Nombre del producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
      </thead>
      <tbody id="ok">
       @if(session('usuario'))
          @forelse($carrito as $item)
          <tr ng-repeat="myItem in myItems | reverse">
            <td> {{$item->id}}</td>
            <td> {{$item->name}}</td>
            <td>$ {{$item->price}}</td>
            <td> 1</td>
          </tr>
          @empty
            <p>No hay nada en tu carrito</p>
          @endforelse
        @endif
      </tbody>
    </table>
    <span class="text-center" ng-show="myItems.length == 0">
    </span>
    <div class="clearfix"></div>
    <span class="pull-right alert alert-file precioTotal">Total: ${{$precioTotal}} </span>
    <form action="/vaciarCarrito" method="POST">
      {{ csrf_field() }}
      @foreach($carrito as $product)
        <input type="hidden" name="id" value="{{ $product->id }}">
      @endforeach
    <button type="submit" ng-click="removeBasket()" ng-show="myItems.length > 0" class="pull-left alert alert-danger">Vaciá tu carrito</button>
    <form>
  </div>
  
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script><script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js'></script>

@endsection
@extends("masterPage")
@section("principal")

<div class="container">
        	<div class="row col-md-10 col-md-offset-1 col-xs-12">
               <div class="col-md-6 col-sm-6 col-xs-12 item-photo">
                    <img class="imagen-producto" src="/images/producto1.jpg" />
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 productoContainer">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$product->name}}</h3>    
                    <h5>Línea <a href="#">BELÉM.</a></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>PRECIO OFERTA</small></h6>
                    <h3>$ {{$product->price}}</h3>
        
                    <!-- Detalles especificos del producto -->
                   
                    <div class="section">
                        <h6 class="title-attr"><small>MEDIDAS</small></h6>                    
                        <div>
                            <div for=" " class="labelproducto">1 mts
                            <input type="radio" name="gender" id="male" value="male"></div>
                            <div for=" " class="labelproducto">2 mts
                            <input type="radio" name="gender" id="female" value="female"></div>
                        </div>
                    </div>   
                    <div class="section">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
                        <div>
                            <div class="btn-minus agregar"><span class="glyphicon glyphicon-minus"></span></div>
                            <input class="cantidadProducto" value="1" />
                            <div class="btn-plus agregar"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <div class="section">
                        <button class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty"></span> Agregar a lista de deseos</a></h6>
                    </div> 
                    @if(session('usuario') and session('usuario')->type==2)
                    <a href="/borrarProducto/{{$product->id}}">
                        <button type="button" name="button" class="btn btn-danger">Borrar producto</button>
                    </a>
                    @endif
                </div>                              
        
                <div class="col-xs-12">
                    <ul class="menu-items">
                        <li class="active">Detalle del producto</li>
                    </ul>
                    <div class="descripcion-producto">
                        <p>
                            <small>
                                {{$product->description}}
                            </small>
                        </p>
                    </div>
                </div>		
            </div>
        </div>        

@endsection
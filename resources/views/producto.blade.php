@extends("masterPage")
@section("principal")

<div class="container">
        	<div class="row">
               <div class="col-xs-6 item-photo">
                    <img style="max-width:100%;" src="images/producto1.jpg" />
                </div>
                <div class="col-xs-5 productoContainer" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>Banco Hudson Urban</h3>    
                    <h5 style="color:#337ab7">Línea <a href="#">BELÉM.</a></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>PRECIO OFERTA</small></h6>
                    <h3 style="margin-top:0px;">$ 3999</h3>
        
                    <!-- Detalles especificos del producto -->
                   
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>MEDIDAS</small></h6>                    
                        <div>
                            <div class="attr2">1 mts</div>
                            <div class="attr2">2 mts</div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                    </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Detalle del producto</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                            Banco de madera maciza de grapia de alta densidad. Acabado Ecoblindaje, resistencia a la intemperie. Base de acero al carbono para fijarlo al piso. Ideal halls de entrada. Peso: 84 kgs. 
                            Unidades de venta: 1
                            </small>
                        </p>
                    </div>
                </div>		
            </div>
        </div>        

@endsection
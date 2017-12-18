@extends("masterPage")
@section("principal")
<div class="container preguntasFrecuentesContainer">
  <h2>Preguntas frecuentes</h2>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1- ¿Necesito tarjeta de crédito para realizar la compra?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Podes realizar tu compra con tarjeta de credito como asi tambien con transferencia bancaria y pago contra entrega.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2- ¿Puedo realizar una compra desde el interior?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Despachamos tu compra a todo el pais por expreso.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">3- ¿Me pueden enviar el artículo a domicilio?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Realizamos entregas en Capital Federal y GBA con costo adicional segun el volumen y la distancia.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">4- ¿A dónde llamo si todavía no me ha llegado el artículo que compré?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Podes comunicarte al 0810-45454545 las 24hs.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">5- ¿Puedo ver los muebles personalmente?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Tenemos un Showrrom en Capital federal para poder ver los muebles personalmente.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">6- ¿Cómo pagar tu compra?</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
        <h4>Paga con Mercado Pago y tu compra estará 100% protegida, te devolveremos el dinero si el producto no es lo que esperabas.<br>

Elige entre cualquiera de estos medios de pago:</h4>

<ul>
  <li>Visa Mastercard American Express Mercado Pago + Banco Patagonia Naranja Argencard Cabal Cencosud Nativa Tarjeta</li>
  <li>Shopping Cordobesa CMR Cordial</li>
<li>Rapipago Pago Fácil Carga Virtual
En efectivo con Rapipago, Pago Fácil y Carga Virtual: te daremos un número para pagar.</li>

<li>Red Link
Transferencia bancaria con Red Link: paga desde tu homebanking o cajero automático.</li>

<li>BaproPagos
En efectivo con Provincia NET: imprime tu factura y acércate a pagar.</li>

<li>Dinero en cuenta MercadoPago
Dinero en tu cuenta: tu dinero disponible en Mercado Pago se transfiere al instante a la cuenta del receptor.</li>


* No disponible para reventa de entradas.
</ul>
</div>
      </div>
    </div>
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">7- ¿Cómo puedo recibir el producto en mi casa?</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
Si el vendedor ofrece Mercado Envíos, recibes el producto por correo en todo el país. En Capital Federal y algunas localidad de GBA tienes opciones más rápidas.

Calculas el costo de envío desde la publicación y pagas todo junto por MercadoPago. En adelante, puedes hacer el seguimiento del envío desde tu compras.

Si la publicación no tiene Mercado Envíos, puedes acordar el envío directamente con el vendedor.</div>
      </div>
    </div>



  </div> 
</div>
@endsection
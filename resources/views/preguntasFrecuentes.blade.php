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
  </div> 
</div>
@endsection
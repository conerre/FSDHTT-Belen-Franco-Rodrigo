@extends("masterPage")
@section("principal")
<div id="contact" class="container-fluid contactoContainer">
  <h2 class="us">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Envianos un mensaje y nos pondremos en contacto.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bs As, Arg.</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@asienta.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Mensaje" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-info pull-right" type="submit">Enviar</button>
        </div>
      </div> 
      </div>
  </div>
        <div>
         <iframe class="col-md-12"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.191590175103!2d-58.44594718487283!3d-34.54870416209608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital+House!5e0!3m2!1ses-419!2sar!4v1513617078373" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
        </div>
   
</div>

@endsection
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
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
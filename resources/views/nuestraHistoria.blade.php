@extends("masterPage")
@section("principal")
<div id="about" class="container-fluid historia">
  <div class="row">
    <div class="col-sm-8 col-md-10">
      <h2>Sobre ASIENTA</h2><br>
      <h4>Somos una empresa jóven emprendedora que está adquiriendo reconociemiento en el mercado nacional. Nuestro objetivo principal es brindar un servicio y producto de alta calidad y felidelidad con nuestros clientes.</h4><br>
      <p><strong>Misión:</strong> Garantizar un adecuado tratamiento de los productos que comercializamos en todas las fases del circuito de distribución. Responder satisfactoriamente a todas las necesidades de nuestros clientes y proveedores, permitiendo a ellos como a nuestra empresa, un crecimiento sostenido en el tiempo.</p>
      <a href="#contactModal" role="button" data-toggle="modal" class="btn btn-default btn-lg"><i class="fa fa-contact "></i> <span class="network-name">Contactanos</span></a>
  <!-- Modal -->
        <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close btn-info" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title text-center">Contacto</h3>
                    </div>
                    <div class="modal-body">
                        <div class="containter">
                            <div class="row">


                                <form class="form-horizontal" name="commentform" method="post" action=" ">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                          <div class="col-lg-10 col-md-offset-1 col-md-10">
                                                <input type="text" class="form-control" name="name" placeholder="Nombre" id="first_name"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="col-lg-10 col-md-offset-1 col-md-10">
                                                <input type="email" class="form-control" placeholder="Email" id="email" name="email"  required  >
                                            </div>
                                        </div>
                                        <div class="form-group">
 
                                            <div class="col-lg-10 col-md-offset-1 col-md-10">
                                                <textarea name="comments" id="comments" placeholder="Mensaje" class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right btn-modal-contact">
                                    </div>
                                </form>
                                <hr class="featurette-divider hidden-lg">
                                <div class="col-sm-5">
      <p>Envianos un mensaje y nos pondremos en contacto.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bs As, Arg.</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@asienta.com</p>
    </div>

                            </div>
                        </div>
                    </div>                
                 </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
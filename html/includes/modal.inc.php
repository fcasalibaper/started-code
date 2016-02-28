<!-- modal contacto -->
<div class="modal modal_news fade bs-example-modal-md" id="modalNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="lnr lnr-cross"></span></button>
        <h2 class="modal-title">
          ¿Muchas ideas?<br>
          <small>
            Recibe nuestras ideas para<br/>
            comunicarlas.
          </small>          
        </h2>
        <div class="linea linea-blanco"></div>
      </div>
      <div class="modal-body">

        <form class="formLand">
          <div class="form-group">            
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
            <!-- <span class="valido"></span> -->
          </div>
          <div class="form-group">           
            <input type="email" class="form-control" id="email" placeholder="Email" required>
            <span class="invalido"></span>
          </div>                   
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <div class="clearfix"></div>

      </div>     
    </div>
  </div>
</div>
<!-- /#modalNews -->

<!-- modal imagen o video YT -->
<div class="modal modal_media fade" id="modalMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="lnr lnr-cross"></span></button>       
      </div>
      <div class="modal-body">

        <div class="playerYTCont embed-responsive embed-responsive-16by9">
          <div id="playerYT" class="embed-responsive-item"></div>
        </div>

        <div class="playerVimeoCont embed-responsive embed-responsive-16by9">
          <iframe id="playerVimeo" src="" class="embed-responsive-item"></iframe>
        </div>
        <!-- video -->

        <img src="" class="col-xs-12 imgModalCont p-0" />
        <!-- imagen -->

        <div class="clearfix"></div>

      </div>     
    </div>
  </div>
</div>
<!-- /#modalMedia -->
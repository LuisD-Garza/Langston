<!-- Modal -->
<div class="modal fade" id="modalMail" tabindex="-1" role="dialog" aria-labelledby="modalMailLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMailLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p class="m-0  d-none  usuarioActivo" >Desa Enviar un correo al usuario </p>
        <p class="m-0 noUsuario" >Primero seleccione un usuario</p>
      </div>
      <div class="modal-footer mftt d-none">
        <button type="button" class="btn btn-danger "  onclick="mail()" data-dismiss="modal">Correo</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function verificar2(){
  id = $('#msg-idusuario').val();
  console.log(id);
  if (id == false) {

    

  }else{
    $('.noUsuario').addClass('d-none');
    $('.mftt').removeClass('d-none');
    $('.usuarioActivo').removeClass('d-none');
  }
}

function mail(){
  id = $('#msg-idusuario').val();
  $.post("pruebachat/obtenerMail.php", {id: id}, function(m){
    console.log(m);
    location.href='mailto:'+m+'';
  });

}


</script>
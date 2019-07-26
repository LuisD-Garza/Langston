<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <p class="m-0  d-none  usuarioActivo" >Desa borrar los mensaje del usuario o sus mensajes con el usuario ?</p>
        <p class="m-0 noUsuario" >Primero seleccione un usuario</p>
      </div>
      <div class="modal-footer mft d-none">
        <button type="button" class="btn btn-danger  userTrash"  onclick="borrarUsu()" data-dismiss="modal">Usuario</button>
        <button type="button" class="btn btn-danger  msgTrash"  onclick="borrarMsg()" data-dismiss="modal">Mensajes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function verificar(){
  id = $('#msg-idusuario').val();
  console.log(id);
  if (id == false) {

    

  }else{
    $('.noUsuario').addClass('d-none');
    $('.mft').removeClass('d-none');
    $('.usuarioActivo').removeClass('d-none');
  }
}

function borrarMsg(){
  id = $('#msg-idusuario').val();
  $.post("pruebachat/borrarMsg.php", {id: id}, function(m){
    saludar(id);
  });
}

function borrarUsu(){
  borrarMsg();
  $.post("pruebachat/borrarUsu.php", {id: id}, function(m){
    location.reload()
  });
}

</script>
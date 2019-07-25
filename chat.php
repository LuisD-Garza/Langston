    <div class="espacioChat">
        <div class="chat" style="display: none; border-radius: 15px;">
        <div class="row m-0 d-flex justify-content-end"><i class="fas fa-minus" id="minimzar"></i></div>
        <div class="titulo"><b>Chat</b></div>
        <div class="contenido">

            <form  action="" method="POST" class="registro d-flex justify-content-center align-items-center flex-column bg-light" >
                <label class="text-center"  >Antes de iniciar el chat, por favor rellena el formulario a continuación.</label>
                <div class="form-group">
                    <label for="nombreInput">Nombre</label>
                    <input id="nombreInput" name="nombreInput" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <input id="emailInput" name="emailInput" class="form-control" type="email">
                </div>
                <button class="btn btn-primary" id="registroEnviar"  >Enviar</button>
            </form>

        </div>
        <form class="fchat d-flex justify-content-center" action="" method="POST" style="padding: 0 10px;">
            <div class="form-group mb-0 col-11 pr-0 pl-0">
                <input class="d-none" id="idCliente" type="text" value=''>
                <input id="msgCliente" name="msgCliente" placeholder="Ingre un mensaje.." class="form-control" type="text">
            </div>
            <button class="btn" ><i class="fas fa-paper-plane"></i></button>
        </form>
        </div>
        <div class="chat2">
             <img class="mensajeChat" src="assets/img/mensaje.png" />
        </div>
       
    </div>

         <script type="text/javascript">

   



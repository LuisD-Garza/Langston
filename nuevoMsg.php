<?php 
require_once('admin/dbcon.php');
$id2 =  $_POST['lastIdMsg'];
$idUsuario = $_POST['idUsuario'];
$selectcii = mysqli_query($mysqli,"SELECT * FROM `mensajes` ORDER BY id DESC LIMIT 1"); 
    while($rown = mysqli_fetch_array($selectcii)){
        $id = $rown['id'];
        if ($id == $id2) {
            
        }else{  ?>

<script type="text/javascript">
    var id3 = <?php echo $rown['id'] ?>;
    localStorage.setItem('id',id3);
</script>

<?php if($rown['tipoUsuario'] == 1) { ?>
<div class="div" style="    
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px solid;
    padding: 10px;
    border-radius: 20px 20px 0px 20px;">
<b style="letter-spacing: 1px;width: 100%; text-align: right;">Tu:</b>
<div class="d-flex justify-content-end align-items-center pr-3" style="width: 100%">
<?php echo $rown['mensajeUsuario']; ?>
</div>
</div><br>

<?php } ?>


<?php if($rown['tipoUsuario'] == 0) { ?>
<div class=""  style="    
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px solid;
    padding: 10px;
    border-radius: 20px 20px 20px 0px;">
<b style="letter-spacing: 1px; width: 100%; text-align: initial;" >Langston:</b>
<div class="d-flex justify-content-start align-items-center pl-3" style="width: 100%;">
    <?php echo $rown['mensajeUsuario']; ?>
</div><br>


<script type="text/javascript">
$( document ).ready(function() {
  var snd = new Audio("correct-ding.mp3");
  snd.play();
});
</script>
<?php } ?>

<?php 
        }

    }

?>
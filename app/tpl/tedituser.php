<?php 
	include 'head_common.php';
  use X\Sys\Session;
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

		<h1>Todos los usuarios</h1>
			<table class="table table-hover">
			<thead><th>Id</th><th>Rol</th><th>Email</th><th>Password</th><th>Username</th></thead>
              
              <form action="edituser/editar" method="POST">
              <?php for($i=0;$i<count($this->dataTable);$i++){ ?>
                
                <tr>
                <?php $cont=0; $cont2=0; $ids=['iduser', 'rol', 'email', 'password', 'username'];?>
                <?php foreach($this->dataTable[$i] as $key=>$value) :?>
                  	<?php if($cont==0){$id=$value;$cont++;} ?>
                  	
                        <td><input type="text" id="<?=$ids[$cont2];?>" name="<?=$ids[$cont2];?>" value="<?= $value; ?>"></input></td>
                  	<?php $cont2++ ?>
                  <?php endforeach; ?>
                  
                  <td>
                  <button type="button" class="btn edi-user btn-success" value="editar" id="<?= $id; ?>" name="editar" ><span class="glyphicon glyphicon-edit" id="gly" style="color: white"></button>
                  </td>
                  </form>
                  <form action="edituser/eliminar" method="POST">
                  <td>
                  	<button type="submit" class="btn btn-danger elm-user" value="<?= $id; ?>" id="<?= $id; ?>" name="eliminar"><span class="glyphicon glyphicon-remove" id="gly" style="color: white"></button>
                  </td>
                  </form>
                  </tr>
                <?php } ?>
            </table>

            <span class="msg"></span>
        </section>


<?php 
	include 'footer_common.php';
?>
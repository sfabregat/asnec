<?php 
	include 'head_common.php';
?>

            <div style="width: 30%; margin-left: 42%; ">
            <h1><U>Iniciar Sesión</U></h1><br>
            </div>
        <div style="width: 30%; margin-left: 35%; ">
        <form method="POST" class="formulario-login" action="login/log">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="passwd">Contraseña:</label>
              <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-default">Iniciar Sesión</button>
            <div class="msg"></div>
        </form> <br><br>
	 </div>
<?php 
	include 'footer_common.php';
        
?>

<?php 
	include 'head_common.php';
?>

            <div style="width: 30%; margin-left: 42%; ">
            <h1><U>Adidas Superstar</U></h1><br>
            <div class="cuadro_producto_foto"><img src="<?= APP_W.'/pub/images/productos/2.jpg'; ?>" style="width:248px;height:248px;"></div><br>
            <h4>Total a pagar: 25,00€</h4>
            </div><br><br>
        <div style="width: 30%; margin-left: 35%; ">
        <form method="POST" class="formulario-login" action="pago">
            <div class="form-group">
              <label for="tarjeta">Visa/Mastercard:</label>
              <input type="tarjeta" class="form-control" id="tarjeta" name="tarjeta" placeholder="Escriba el numero de la tarjeta">
            </div>
            <div class="form-group">
              <label for="codigo">Codigo de seguridad:</label>
              <input type="codigo" class="form-control" id="codigo" name="codigo" placeholder="Escriba el codigo de seguridad">
            </div>
            <div class="form-group">
              <label for="titular">Nombre del titular:</label>
              <input type="titular" class="form-control" id="titular" name="titular" placeholder="Escriba el nombre del titular">
            </div>
            <div class="form-group">
              <label for="envio">Dirección de envio:</label>
              <input type="envio" class="form-control" id="envio" name="envio" placeholder="Escriba la dirección de envio">
            </div>
            <button type="submit" class="btn btn-default">Pagar</button>
        </form> <br><br>
	 </div>
<?php 
	include 'footer_common.php';
        
?>
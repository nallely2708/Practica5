

<!DOCTYPE HTML>
<html>
    <head>
 <div>
<body>

<?php
session_start();
if(!isset($_SESSION['contacto'])){
	header('location: usuario.php');
}
?>


<?php
echo "".$_SESSION['contacto']."<br/>";
?>
	 <form action="ver.php" method="POST">   
         <legend><h1>Nuevo contacto</h1></legend>
     

      <label for="txtNombre*">Nombre</label><br/>
        <input type="text" size="30" maxlength="255"  name="Nombre" /><br/>
     
      <label for="txttel&eacute;fono">Tel&eacute;fono</label><br/>
        <input type="text" size="30" maxlength="255" id="txttel&eacute;fono" name="telefono" /><br/>
 
      <label for="txtCelular">Celular</label><br/>
        <input type="text" size="30" maxlength="255" id="txtCelular" name="Celular" /><br/>

      <label for="txtDomicilio">Domicilio</label><br/>
        <input type="text" size="30" maxlength="255" id="txtDomicilio" name="Domicilio" /><br/>
       <input type="submit" value="Guardar"/><br/>
      
       
 

      </div>   
    </body>
</html>

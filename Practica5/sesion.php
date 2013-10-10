
<html>
  <head>
  </head>
  <body>
    <h2>SESION</h2>

   <?php
       session_start();
       if(isset($_SESSION['contacto'])){
	header('location: sesion.php');
       }

    if( ($_POST['usuario'] == 100 && $_POST['pass'] == "udg") ||
	($_POST['usuario'] == 110 AND $_POST['pass'] == "cutonala") ||
	($_POST['usuario'] == 1 AND $_POST['pass'] == "root")){
	$_SESSION['contacto']=$_POST['usuario'];
	header('location: nuevo_usuario.php');

    }else{

	header('location: usuario.php');
    }
    
   ?>


   
  </body>
</html>
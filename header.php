<?php 
include 'constantes.php'; 

require_once 'auth/usuario.php';
require_once 'auth/sessao.php';
require_once 'auth/autenticador.php';

$aut = Autenticador::instanciar();

$usuario = null;
if ($aut->esta_logado()) {
    $usuario = $aut->pegar_usuario();
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo URL ?>/favicon.ico">
    <title>RecBooks</title>
    
    <script type="text/javascript" src="<?php echo ASSETS ?>/js/jquery.min.js"></script>
    <link href="<?php echo ASSETS ?>/css/bootstrap.min.css" rel="stylesheet">
    
    <style type="text/css">
    </style>
    
  </head>
  <body>
    
    
    
    Ol&aacute;, 
    <?php 
        if($usuario != null) {
            echo($usuario->getNome());
        } else {
            echo('Convidado');
        }
        if($usuario != null) {
    ?>
            <span class="goLoginBtn">(<a href="<?php echo URL ?>/auth/logout.php">sair</a>)</span>
    <?php } else { ?>
            <span class="goLoginBtn">(<a href="<?php echo URL ?>/auth/login.php">logar</a>)</span>
    <?php } ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
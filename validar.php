<?php 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "jvitorpzl@gmail.com" && $senha == "5554"){
    header("location: painel.php");
}else{
    header("location: usuario-invalido.php");
}

?>
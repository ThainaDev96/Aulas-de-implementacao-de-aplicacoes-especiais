<?php
    session_start(); 
    echo session_id();
    echo"Seu nome na sessão é".$_SESSION["usuario"] ;
    //$_SESSION["valida"];
    if($_SESSION["valida"]==1){//verificação
        print ("Liberado");
         echo"Seu nome na sessão é".$_SESSION["usuario"];
 } else{
    print("bloqueado");
        //header("Location: https://wwww.viajuntos.com.br/wordpress")
        header("Location: bloqueado.php");
        exit();//or die();
        
    //$_SESSION["valida"]==0
        //print ("Acesso negado");
 }
?>
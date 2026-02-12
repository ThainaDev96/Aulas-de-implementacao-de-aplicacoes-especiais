<?php
//include("util.php");//chama a biblioteca 
//require("util.php");
require("biblioteca\util.php");


setcookie("meucookie","Lianderson");

print_r($_COOKIE);

echo "<br>";
echo "Meu cookie armazenado" .$_COOKIE["meucookie"];


echo"Ola amiguinhos estou no servidor";
echo "<br>";
echo "O valor do campo 1 = ".$_GET["campo1"];
echo "<br>";
echo "O valor do campo 2 = ".$_GET["campo2"];//cada um tem um get , nome próprio
echo "<br>";
echo "O valor do campo 3 = ".$_GET["nome"];
echo "<br>";
echo "O campo escondido é  = ".$_GET["escondido"];

$valida_usuario = $_GET["escondido"];
echo "<br>";
echo"O campo textArea = " .$_GET["mensagem"];
echo "<br>";

if($valida_usuario == 1)
{
    echo"Voce está autenticado";
}


//estrutura é :tipo do campo--nome do campo

$idade = $_GET["campo1"];
    if($idade==48)
    {
        echo "<br>";
        echo "Parabéns";
    }else{
        echo "<br>";
        echo"Não tem ".$idade." idade";
    }

   $valorA = $_GET["campo1"];
   $valorB = $_GET["campo2"];
   $soma=$valorA + $valorB;
   echo "<br>";
   echo"A soma eh " . $soma;
//função
   function Calculadora($A, $B) {
            $soma = $A+$B;
            return $soma;
}
 
$valorA = $_GET["campo1"];
$valorB = $_GET["campo2"];
$soma = $valorA + $valorB;
 
$calculo = Calculadora($valorA, $valorB);
echo "<br>";
print("soma dos valores é ".$calculo);
echo "<br>";

/*$valorA = $_GET["campo1"];
$valorB = $_GET["campo2"];
$valorC = $_GET["nome"];
 
function Calculadora ($valorA, $valorB, $valorC){
      $soma = $valorA + $valorB + $valorC;
 
      return $soma;
    }
 
    echo "<br>";
 
    echo "A soma entre A, B e C é: " .Calculadora($valorA,$valorB,$valorC);*/ 

    //campos hidden:campo escondido


$sistema = $_GET["sistema"];
echo "<br>";
echo"O sistema selecinado foi ........." .$sistema;

//Faça uma seleção com 3 radio button: verde , amarelo,vermelho. se verde sinal"verde , se amarelo sinal"amarelo etc
$cor = $_GET["cor"];

if($cor=="verde"){
     echo"A cor escolhida foi  "  .$cor;
} else if($cor=="amarelo"){
         echo"A cor escolhida foi  "  .$cor;
}else if($cor=="vermelho"){
          echo"A cor escolhida foi  "  .$cor;
}
//echo "<br>";
//echo"A cor escolhida foi  "  .$cor;
//faz loop pelo array dos números
$numeros = $_GET["numeros"];
foreach($numeros as $numeros)
{
    echo"- " .$numeros. "<br>";
}

$escolhas = $_GET["processador"];
print("Seu processador é = ".$escolhas);

$tirulipa = valida_usuario("Lianderson");//nome do usuário
print("<br>");
print($tirulipa);

?>

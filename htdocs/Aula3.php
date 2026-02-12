<html>
    <head><!--Cabeçalho Comentário-->
        <title>Titulo</title>
    </head>
    <body>
<?php echo "Hello world"; 
                  print("<br>");//quebra de pagina
                  print("Hello world");
                  print("<br>");
                  $variavel = 'lianderson';
                  
                  $variavel = "L";
                //$Variavel = "L";php é case sensitive
                  print($variavel);
                  /* 
                  comentario em bloco
                  */
                  //comentário em linha
                  #comentário em linha

                  //phpinfo();
                  //phpcredits();
                  //phpversion();

                  $nome = "lianderson";
                  print("Meu nome é ".$nome);
                  print("<br>");
                  define("NOME","LIANDERSON");
                  print("<br>");
                  print(NOME);

                  print("<br>");
                  $valor1 = 1;
                  $valor2 = 2;

                  print("Valor total = ".($valor1+$valor2));
                  print("Valor total = ".($valor1-$valor2));
                  print("Valor total = ".($valor1/$valor2));
                  print("Valor total = ".($valor1*$valor2));
                  print("Valor total = ".($valor1%$valor2));

                  print("<br>");
                   if((1 == 1) && (2==1)){
                    print("igual");
                  }
                  if(1 == 1){
                    print("igual");
                  }
                   if(1 && 1){
                    print("igual");
                  }
                   if(1 and 1){
                    print("igual");
                  }
                  if(1 || 2){
                    print("ou");
                  }
                  if((1 || 2) or (1 || 2)){
                    print("ou");
                  }

//operadores ternários
                  print("<br>");
                  $idade=75;
                  $idade = ($idade==75)?"Idade = 75" : "idade diferente";
                  print($idade);
                  echo ($idade==75)?"Idade = 75" : "idade diferente";

                  function Calculadora($valor){
                    $soma = $valor + 10;
                        return $soma;
                  }
                  print("<br>");
                  $somando = Calculadora(10);
                    if($somando==20){
                    print("<br>");
                    echo "Acertou 20";
                  }
                  print("<br>");
                  print("O valor do cálculo é ".Calculadora(10));

                  
                  /*function Calculadora($valor1 ,$valor2){
                    $soma = $valor1 + $valor2;
                        return $soma;
                  }
                  print("<br>");
                  $somando = Calculadora(10,20);
                    if($somando==20){
                    print("<br>");
                    echo "Acertou 20";
                  }
                  print("<br>");
                  print("O valor do cálculo é ".Calculadora(10,50));*/
print("<br>");
$a = 1;
$b = 2;
/*$a = "1";
  $b = "2"; Funciona igual, php converte para inteiro */

if($a==$b)
{
    print("Valor igual");
}else{
    print("Valor não é igual");
}
$variable=$a;
print("<br>");
switch ($variable){
    case'1':
        echo"Siga a direção do seu coração";
        break;

    case'2':
        echo"Siga a direção do seu coração mais alegria";
        break;

    default:
        echo"Qualquer caminho serve quando estamos perdidos";
        break;
    }
$x = 0;
while($x<=10)
{
    print("<br>");
    echo "O valor de x no while é ".$x;
    $x = $x+1;
    //$x++;
}
do {
    print("<br>");
    print("Escreva no do while".$x);
    $x++;
}while($x<100);


print("<br>");

for($i=0; $i <15; $i++){
    
    print("<br>");
    print("O valor de for em I".$i);
}
  /* faça a tabuada do 2 com o for*/
print("<br>");
//for($i=1; $i <=10; $i++){
for($i=0; $i <11; $i++){
    
    print("<br>");
    print("Tabuada 2x".$i);
    //print($i."X="($i*2));

}

//Vetor 
$vetor[0] = "Lianderson Franco Brum";
$vetor[10] = "Vetor maluco";
print("<br>");
print("Mostra o que está dentro do vetor".$vetor[0]);
print("<br>");
print("Mostra o que está dentro do vetor na ".$vetor[10]);

//Função retorna um valor
function criarBR($numerorepeticao){
    for ($i=0; $i < $numerorepeticao; $i++){
        print("<br>");
    }
}
criarBR(1);
//Matriz vetor modo duplo
$matriz[0][0] = "Matriz na posição 0 0";
$matriz[0][1] = 2;
$matriz[1][0] = 3;
$matriz[1][1] = 4;

for ($i=0; $i < 2 ; $i++){
    for ($x=0; $x < 2 ; $x++){
        criarBR(1);
        print("O valor da matriz = ".$matriz[$i][$x]);
    }
}

    ?>
 </body>
</html>
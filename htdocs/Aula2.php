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
//Exercícios:
    /*1)Mostrar na tela todas as informações do servidor mais a versão do php
    2)Criar um programa definido 3 constantes : Posição , Constelação, e distância. Distância default = 800000*/
    define(constant_name: "POSICAO", value :20);
    define(constant_name: "CONSTELACAO", value :"ORION");
    define(constant_name: "DISTANCIA", value :800000);
    print("posicao:".POSICAO."<br>Constelacao:".CONSTELACAO);

/*3)Calcular quantos pares e ímpares existem entre 0 e 1000
4)Atribua um valor qualquer a uma variável ,caso valor informado esteja de 1 a 10, o programa deve mostrar 
mensagem para cada um 
5)Implementar uma função que calcule o valor unitário caso o kg esteja 3,93 e mostrar na tela o valor 
unitário mais o valor do kg */
 $valorkg= 3.93;
 $valorunidade;
 function calcularValorUnitario($valorunidade, $valorKg) {
    return $valorunidade / $valorKg;
}

print(calcularValorUnitario(10, 3.93));


    ?>
 </body>
</html>
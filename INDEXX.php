!DOCTYPE html>
<html lang="en">
<head>
    
   <title>TO COM FOME</title>
</head>
<body>

<h1 style="background-color:Violet;">REVISION DE PHP</h1>

    <?php
echo "Hello FEOS!";
?> 

<p style="color: red;">FUNCOES PODEM SER COM LETRAS MAIUSCULAS E  MINUSCULAS</p>

<?php
ECHO "Hello Brbie!<br>";
echo "Hello Barbie!<br>";
EcHo "Hello Barbie!<br>";
?> 

<p style="color:red;">VARIAVES SAO SENSIVEIS</p>

<?php
$color = "red";
echo "Meu carro é " . $color . "<br>";
echo "miha casa é" . $COLOR . "<br>";
echo "Meu barco é " . $coLOR . "<br>";
?> 

<p style="color:red;">SINTAXE LINHA UNICA</P>
<?php
// This is a single-line comment

# This is also a single-line comment
?>

<p style="color:red;">MULTI_LINHA</P>
<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>

<p style="color:red;">COMENTARIOS PARA DEIXAR FORA PARTES DO CODIGO </P>

<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

<p style="color:red;">CRIAR VARIAVEIS DIFERENTES </P>
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<p style="color:red;">VARIAVEIS FORA DA FUNCAO</P>
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<p style="color:red;">VARIAVEIS DENTRO DA FUNCAO</P>
<?php
function Test() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<p style="color:red;">PALAVRA CHAVE PARA ACESSAR DENTRO DA FUNCAO</P>
<?php
$x = 5;
$y = 10;

function myTest1() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

<p style="color:red;">USE O ARRAY PARA ACESSAR DENTRO DA FUNCAO</P>
<?php
$x = 5;
$y = 10;

function myTest2() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;
?>

<p style="color:red;">USE A PALAVRA STATIC PARA PERMITIR QUE UMA VARIAVEL NAO SEJA EXCLUIDA</P>
<?php
function myTest3() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

<p style="color:red;">STRINGS COM COMANDO ECHO</P>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 

<p style="color:red;">STRINGS E VARIAVEIS COM O COMANDO ECHO</P>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>

<p style="color:red;">STRINGS COM O COMANDO PRINT</P>
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 



<p style="color:red;">STRINGS E VARIAVEIS COM O COMANDO PRINT</P>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>
<p style="color:red;">SEQUENCIA DE CARACTERES PHP</P>
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>


<p style="color:red;">PHP INTEIRO</P>
<?php  
$x = 5985;
var_dump($x);
?>  

<p style="color:red;">PHP FLUTUADOR</P>
<?php  
$x = 10.365;
var_dump($x);
?>  

<p style="color:red;"> MATRIZ PHP </P>
<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

<p style="color:red;"> OBJETO PHP </P>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<p style="color:red;">VALOR NULO DO PHP </P>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<p style="color:red;">OBTER O COMPRIMENTO DE UM STRIG </P>
<?php
echo strlen("Hello world!");
?> 
<p style="color:red;">CONTE O NUMERO DE PALAVRAS EM UM STRING </P>
<?php
echo str_word_count("Hello world!");
?> 
<p style="color:red;">INVERTER UMA  STRING </P>
<?php
$x = "Hello World!";
echo strrev($x);
?> 
<p style="color:red;">PESQUISAR UM TEXTO DENTRO DE UMA STRING </P>
<?php
echo strpos("Hello world!", "world");
?> 
<p style="color:red;">SUBSTITUIR UM TEXTO DENTRO DE UMA STRING </P>
<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 

<p style="color:red;">VERIFICA O TIPO DE UMA VARIAVEL É INTEIRO </P>
<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?> 

<p style="color:red;">VERIFICA O TIPO DE UMA VARIAVEL É FLOAT </P>
<?php
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
?>  

<p style="color:red;">VERIFICA SE UM VAOR NUMERICO É FINITO OU INFINTO </P>
<?php
// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);
?> 

<p style="color:red;">CALCULO INVALIDO RETORNARA UM VALOR NaN </P>
<?php
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);
?> 

<p style="color:red;">VERIFICA SE UMA VARIAVEL É NUMERICA</P>
<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>

<p style="color:red;">CONVERTE FLOAT E STRING PARA INTEIRO</P>
<?php
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

<p style="color:red;">ENCONTRE O VALOR DE PI</P>

<?php
echo(pi());
?>

<p style="color:red;">ENCONTRE O MAIOR E O MENOR VALOR DE UMA LISTA DE ARGUMENTOS</P>
<?php
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
?>

<p style="color:red;">ENCONTRE A RAIZ QUADRADA DE UM NUMERO</P>
<?php
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
?>

<p style="color:red;">GERAR UM NUMERO ALEATORIO</P>

<?php
echo(rand( ));
?>

<p style="color:red;">GERAR UM NUMERO DE 0 A 100</P>
<?php
echo(rand(0, 100));
?>

<p style="color:red;">DISTINCAO ENTRE MAIUSCULA E MINUSCULA </P>
<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 
<p style="color:red;">NAO DIFERENCIE  ENTRE MAIUSCULA E MINUSCULA </P>
<?php
// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?> 

<p style="color:red;">CRIE UMA CONSTANTE ARRAY COM DEFINE</P>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>

<p style="color:red;">USE UMA CONSTANTE DENTRO DE UMA FUNCAO</P>
<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest4() {
  echo GREETING;
}
 
myTest();
?> 



 <p style="color:red;">introducao if</P>
 <?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>

<p style="color:red;">o se ...intrtucao else</P>
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
<p>style="color:red;">O SE...ELESEIF</P>
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>



</body>
</html>
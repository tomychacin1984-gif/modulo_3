
tarea de clase php

<?php 

$nombre = "jinmy"
$edad =30
$descrip = "un estudiante que quiere a prender mucho de las cosas"

echo "ifomacion;\n"; 
var_dump($nombre);          
var_dump($edad);            
var_dump($descrip)
echo "\n----------------------------------------\n\n";

ejecicios 2 

1️⃣ Contador de Pares e Impares
🔢 Escribe un script que cuente y muestre la cantidad de números pares e impares que hay en el rango del 1 al 50.

------------------------------------------------------------

<?php
$numeros_pares= [];
$numeros_impares= [];
for ($i= 1; $i <= 50; $i++){
    if  ($i  % 2 == 0){
        $numeros_pares[]= $i;
    } else {
        $numeros_impares[] = $i;
    }
}
echo "Numeros pares del 1 al 50:\n"; 
foreach ($numeros_pares as $par) {
    echo $par . " ";
}
echo "\n\nCantidad de numeros pares¨: " .count($numeros_pares)."\n";
echo "\nNumeros impares del 1 al 50\n";
 foreach ($numeros_impares as $impar){
     echo $impar. " ";
 }
?>
    

2️⃣ Tabla de Multiplicar del 8
✖️ Crea un script que genere y muestre en la terminal la tabla de multiplicar completa del número 8, desde el 8×1 hasta el 8×10.


    <?php 

echo "## 1. Ejemplo de bucle for (Tabla del 5) ##\n";

// Este bucle se ejecutará 10 veces.
// 1. Inicialización: $i = 1 (el contador empieza en 1)
// 2. Condición: $i <= 10 (el bucle continúa mientras $i sea menor o igual a 10)
// 3. Incremento: $i++ (en cada vuelta, se suma 1 a $i)
for ($i = 1; $i <= 10; $i++) {
    echo "9 x " . $i . " = " . (9 * $i) . "\n";
}
echo "\n";
?>


    Juego: Adivina el Número
🎯 Desarrolla un programa que simule un juego de "adivina el número". Define una variable con un número secreto y utiliza un bucle while para intentar adivinarlo, incrementando un contador hasta encontrarlo. Muestra cada intento.


<?php 

$nombre = readline("cual es tu nombre");
echo "hello, $nombre\n";
$numero_secreto=40;
$numero_ingresado = (int)readline("ingrese el numero quieren ue adinine");
echo "empezando a buscarlo\n";


$contado = 0;

while ($numero_secreto != 40){ 
    echo "intento". $contado.":pobrando con OTRO\n";
    $contado++;
}
echo "\n numero encotrado $nombre era $numero_secreto.\n";
echo "total de intentos. $contado\n";
?>

4️⃣ Suma de Impares del 1 al 100
➕ Escribe un script que calcule la suma de todos los números impares desde el 1 hasta el 100.
  

<?php 
$suma = 0;

for ($i= 1; $i  <100; $i +=2) {
    $suma += $i;
}
echo "suma de numeros impares del 1 aal 100 es:$suma\n";
?>

5: Verificación para Licencia de Conducir
🚗 Crea un programa que verifique si una persona puede obtener una licencia de conducir. La condición es que debe tener al menos 18 años y no más de 65 años. Define una variable para la edad y muestra si cumple los requisitos o no.

<?php 
$edad = (int)readline("ingresee tu edaa: ");
if ($edad>=22 && $edad <65) {
    echo "puede otiner tu linencia\n";
} elseif ($edad <22) 
    echo "perdon no puede conseguir una licencia\n";
 else {
echo "perdon no puede conseguir una licencia\n";
}
?>

6: Dibujo de un Cuadrado con #
🧱 Utilizando bucles anidados, crea un script que dibuje un cuadrado de 5×5 en la terminal utilizando el carácter #.
 




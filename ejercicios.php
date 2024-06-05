<?php
// Escribe un programa que solicite al usuario su nombre y luego imprima un saludo personalizado.
function saludo(){
    echo "ingrese su nombre: ";
    $nombre = trim(fgets(STDIN));

    echo "bienvenido ".$nombre;
}
// Escribe un programa que calcule la suma de todos los números pares desde 1 hasta un número N dado. 
function numerosPares(){
    $suma =0;
    for ($int = 1; $int <=10; $int++ ){
        if ($int % 2 == 0){
            $suma += $int;
        }
        
    }
    echo $suma;
}
// Escribe un programa que sume dos números enteros ingresados por el usuario y muestre el resultado.
function suma(){
    echo "ingrese el primer numero: ";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese el segundo numero: ";
    $num2 = trim(fgets(STDIN));
    echo "el resultado de la suma es: ".$num1+$num2;

}
// Escribe un programa que determine si un número ingresado por el usuario es par o impar.
function parImpar(){
    echo "ingrese un numero: ";
    $num = trim(fgets(STDIN));
    if($num %2 == 0 && $num != 0){
        echo "El numero es par";
    }elseif ($num % 2 == 1){
        echo "El numero es impar";
    }else echo "El numero es 0";
}
// Escribe un programa cargue un array de notas de 120 alumnos (1 a 10) y se obtenga como resultado el promedio.
function promedio(){

    $arrayAlumnos = [];
    //cargar array
    for ($x = 0; $x <120; $x++){
        $nota = rand(1,10);
        array_push($arrayAlumnos, $nota);
    }
    //promediar array
    $suma = 0;
    foreach ($arrayAlumnos as $array){
        $suma += $array; 
    }
    $promedio = $suma/120;
    echo round($promedio,2);
}
// Generar un array de 1000 elementos (enteros) y cargarlo con valores aleatorios entre 1 y 100.
function generarArray(){
    $array=[];
    for ($x = 0; $x <1000; $x++){
        $value = rand(1,100);
        array_push($array, $value);
    }
    return $array;
}

// Del array anterior obtener el promedio de todos los valores, el máximo y el mínimo (Sin utilizar los métodos).
function operarValores(){
    $suma = 0;
    $contador=0;
    $max = 0;
    $array_n = generarArray();
    foreach($array_n as $array){
        $suma += $array; 
        $contador ++;
        if($array > $max){
            $max = $array;
        }
        $min = $array_n[0];
        if ($array < $min ){
            $min = $array;
        }
    }
    $promedio = $suma/$contador;
    echo "El promedio es: ".round($promedio,2)."\n";
    echo "El maximo es: ".$max."\n";
    echo "El minimo es: ".$min;

}


//saludo();
//numerosPares();
//suma();
//parImpar();
//promedio();
//generarArray();
operarValores();

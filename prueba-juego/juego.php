<?php

function sumaDigitos($numero)
{ //funcion para calcular la suma de los digitos de un numero
    $suma = 0;
    // Recorremos el numero y sumamos cada digito
    while ($numero != 0) {
        $digito = $numero % 10; // Obtenemos el último digito del número
        $suma += $digito; // Sumamos el digito a la suma total
        $numero = (int)($numero / 10); // Eliminamos el último dígito del número
    }
    return $suma; // Devolvemos la suma total de los dígitos
}

// Función para encontrar esos "numeros peculariares"
function encuentraNumeroParecido()
{
    $numerosParecidos = []; // Array para guardar los numeros que sean así
    // Iteramos sobre los números del 1 al 1000
    for ($num = 1; $num <= 1000; $num++) { // Yo he puesto mil si quieres más date el gusto  XD
        $numInvertido = (int)strrev((string)$num); // Invertimos el número para multiplicarlo
        $resultado = $num * $numInvertido; // Obtenemos el resultado de la multiplicación
        $sumaResultado = sumaDigitos($resultado); // Calculamos la suma de los dígitos del resultado
        // Comprobamos si la suma es igual al número original
        if ($sumaResultado == $num) {
            $numerosParecidos[] = $num; // Añadimos el número al array si se cumple si no pues nada "mala suerte"
        }
    }
    return $numerosParecidos; // Devolvemos el array con los números que cumplen la peculiaridad
}

// Ejecutamos la función para encontrar los números que cumplen con la peculiaridad
$resultado = encuentraNumeroParecido();
// Mostramos los números encontrados como resultado
echo "Los numeros mas chingones son: " . implode(", ", $resultado);

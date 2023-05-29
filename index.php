<?php /** Esta etiqueta es para indicar que es de php, asi como en javascript es script y asi como en css es link */
    echo 'Texto a Imprimir'; /** la etiqueta echo es para imprimir en php*/

    $texto = "Mundo"; /** Esta es la forma de crear una variable en PHP */
    printf("Hola %s",$texto);   /** El printf Esta función es similar a echo, pero solo puede imprimir una cadena de texto a la vez */
    $Mensaje = sprintf("Hola %s",$texto); /** El sprintf es lo mismo que un printf, pero esta etiqueta n lugar de imprimir la cadena formateada en la salida estándar, devuelve la cadena formateada como resultado */
    echo $Mensaje;
?>
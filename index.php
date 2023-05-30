<?php /** Esta etiqueta es para indicar que es de php, asi como en javascript es script y asi como en css es link */
    echo 'Texto a Imprimir'; /** la etiqueta echo es para imprimir en php*/

    $texto = "Mundo"; /** Esta es la forma de crear una variable en PHP */
    printf("Hola %s",$texto);   /** El printf Esta función es similar a echo, pero solo puede imprimir una cadena de texto a la vez */
    $Mensaje = sprintf("Hola %s",$texto); /** El sprintf es lo mismo que un printf, pero esta etiqueta n lugar de imprimir la cadena formateada en la salida estándar, devuelve la cadena formateada como resultado */
    echo $Mensaje;


    $edad = 17; /** Variable numerica */
    $nombre = "Adrian"; /** Variable de texto */
    $es_valido = true; /** Variable booleana */
    echo var_dump($nombre);

    define("PI", 3.1416); /** Constante numerica */
    edfine("SALUDO", "Hola Mundo!"); /** Constante de texto */
    define("ES_VALIDO", true); /** constante boolean */

    $logueado = true; /** Boolean */
    $numero = 200; /** Enteros */
    $float = 200.5; /** Floats */
    $nombre = "Adrian"; /** Strings */
    $array = []; /** Arrays */

    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";
     /** el var_dump es para imprimir algo con sus caracteristicas, ej: si es string y cuando caracteres tiene, su es int, etc... */
    var_dump($numero1 > $numero2);/** en este caso estamos comparando si el numero 1 es mayor que el 2 */
    echo "<br/>";

    var_dump($numero1 < $numero2);/** aqui es inverso, estamos comparando si el numero 2 es mayor al 1 */
    echo "<br/>";

    var_dump($numero1 >= $numero2); /** en este caso estamos diciendo si el numero 1 es mayor o igual que el 2 */
    echo "<br/>";

    var_dump($numero1 <= $numero2); /** aqui es al contrario, estamos diciendo si el numero 2 es mayor o igual al numero 1 */
    echo "<br/>";

    var_dump($numero2 == $numero3); /** en este caso esta diciendo si el numero 2 y el 3 son iguales en valores */
    echo "<br/>";

    var_dump($numero2 == $numero4);
    echo "<br/>";

    var_dump($numero2 === $numero4); /** aqui estamos comparando si el numero 2 es igual en valor y en su caracteristica(string, int o float) */
    echo "<br/>";

    var_dump($numero1 <=> $numero2);
    echo "<br/>";

    var_dump($numero2 <=> $numero3);
    echo "<br/>";

    var_dump($numero2 <=> $numero1);
    echo "<br/>";

?>
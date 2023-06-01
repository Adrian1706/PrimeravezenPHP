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

    /**
     * @param numero1 *Variable numerica
     * @param numero2 *Variable numerica
     * @param numero3 *Variable numerica
     * @param numero4 *Variable string y de valor 30
     */
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

    /** 10. Arrays */

    /** array_flip(): Intercambia las claves con sus valores correspondientes en un array. */ 
    $flip = array("Juan", "Adrian", "Diego");
    $new = array_flip($flip);

    print_r($new);

    /** array_fill(): Rellena un array con un valor especificado. */
    $fill = array_fill(5, 6, 'hola');
    $fill2 = array_fill(-2, 4, 'adios');
    print_r($fill);
    print_r($fill2);

    /** array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada. */
        function impar($var)
    {
        return $var & 1;
    }

    function par($var)
    {
        return !($var & 1);
    }

    $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $array2 = [6, 7, 8, 9, 10, 11, 12];

    echo "Impar :\n";
    print_r(array_filter($array1, "impar"));
    echo "Par:\n";
    print_r(array_filter($array2, "par"));

    /** array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados. */
    function cube($n)
    {
        return($n * $n * $n);
    }

    $a = array(1, 2, 3, 4, 5);
    $b = array_map("cube", $a);
    print_r($b);

    /** array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada. */
    function suma($carry, $item)
    {
        $carry += $item;
        return $carry;
    }

    function producto($carry, $item)
    {
        $carry *= $item;
        return $carry;
    }

    $a = array(1, 2, 3, 4, 5);
    $x = array();

    var_dump(array_reduce($a, "suma")); 
    var_dump(array_reduce($a, "producto", 10)); 
    var_dump(array_reduce($x, "suma", "No hay datos a reducir")); 

    /** array_key_exists(): Comprueba si una clave existe en un array. */
    $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) {
        echo "The 'first' element is in the array";
    }

    /** in_array(): Comprueba si un valor existe en un array. */
    $os = array("Mac", "NT", "Irix", "Linux");
    if (in_array("Irix", $os)) {
    echo "Existe Irix";
    }
    if (in_array("mac", $os)) {
        echo "Existe mac";
    }

    /** array_rand(): Devuelve una o varias claves aleatorias de un array. */
    $entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    $claves_aleatorias = array_rand($entrada, 2);
    echo $entrada[$claves_aleatorias[0]] . "\n";
    echo $entrada[$claves_aleatorias[1]] . "\n";

    /** array_unique(): Elimina los valores duplicados de un array. */
    $entrada = array("a" => "verde", "rojo", "b" => "verde", "azul", "rojo");
    $resultado = array_unique($entrada);
    print_r($resultado);

    /** array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados. */
    $array1 = array("a" => "green", "red", "blue");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_intersect($array1, $array2);
    print_r($result);

    /** array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales. */
    $array1    = array("a" => "green", "red", "blue", "red");
    $array2    = array("b" => "green", "yellow", "red");
    $resultado = array_diff($array1, $array2);

    print_r($resultado);

    /** array_push(): Agrega uno o más elementos al final de un array. */
    $pila = array("naranja", "plátano");
    array_push($pila, "manzana", "arándano");
    print_r($pila);

    /** array_pop(): Extrae y elimina el último elemento de un array. */
    $stack = array("naranja", "plátano", "manzana", "frambuesa");
    $fruit = array_pop($stack);
    print_r($stack);

    /** array_reverse(): Revierte el orden de los elementos en un array. */
    $input  = array("php", 4.0, array("verde", "rojo"));
    $reversed = array_reverse($input);
    $preserved = array_reverse($input, true);

    print_r($input);
    print_r($reversed);
    print_r($preserved);

    /** array_sum(): Devuelve la suma de todos los valores de un array numérico. */
    $a = array(2, 4, 6, 8);
    echo "sum(a) = " . array_sum($a) . "\n";

    $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
    echo "sum(b) = " . array_sum($b) . "\n";
?>
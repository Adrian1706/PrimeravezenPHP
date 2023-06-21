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

    /** array_product(): Devuelve el producto de todos los valores de un array numérico. */
    $a = array(2, 4, 6, 8);
    echo "product(a) = " . array_product($a) . "\n";
    echo "product(array()) = " . array_product(array()) . "\n";

    /** array_chunk(): Divide un array en fragmentos más pequeños. */
    $input_array = array('a', 'b', 'c', 'd', 'e');
    print_r(array_chunk($input_array, 2));
    print_r(array_chunk($input_array, 2, true));

    /** array_keys(): Devuelve todas las claves de un array. */
    $array = array(0 => 100, "color" => "red");
    print_r(array_keys($array));

    $array = array("blue", "red", "green", "blue", "blue");
    print_r(array_keys($array, "blue"));

    $array = array("color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large"));
    print_r(array_keys($array));

    /** array_values(): Devuelve todos los valores de un array. */
    $array = array("size" => "XL", "color" => "gold");
    print_r(array_values($array));

    /** array_walk(): Aplica una función de devolución de llamada a cada elemento de un array. */
    $fruits = array("d" => "limon", "a" => "naranja", "b" => "banano", "c" => "manzana");

    function test_alter(&$item1, $key, $prefix)
    {
        $item1 = "$prefix: $item1";
    }
    array_walk($fruits, 'test_print');

    /** El isset verifica si una variable tiene un valor, si tiene valor devuelve un true si no devuelve false y si no esta definida devuelve null */

    $name="Adrian";
    if(isset($nombre)){
        print_r($nombre);
    }else{
        echo "No existe"
    }

    /** el empty verifica si una variable no esta vacia, a diferencia entre el isset y este es que el empty verifica si una variable esta vacia o si su valor es un false y el isset es para saber si esta definida y no es null */

    $name="Adrian";
    if(empty($nombre)){
        print_r(true);
    }else{
        print_r(false);
    }

    /** Estructuras de control */
    $numero=5
    if($numero<6){ /** If quiere decir en español si lo cual en este caso estamos poniendo una condicion, la cual dice en este caso que si el numero es menor a 6 va a dar como resultado el echo que sale debajo */
        echo "es menor"
    }
    else if($numero=5){ /** else if quiere decir en español si no y ponemos la condicion que si el numero entonces es igual a 5 va a dar el echo que sale debajo */
        echo "es igual"
    }
    else{ /** else quiere decir que si no se cumple nada de lo anterior entonces de como resultado el echo que sale debajo */
        echo "es mayor"
    }
    
    /**----------------------------------------------------------- */
    $opcion = 2;

    switch ($opcion) { /** El switch se utiliza para realizar selecciones multiples basadas en el valor de una expresion o variable */
    case 1: /** si la opcion es 1 imprime lo que dice el echo de debajo */
        echo "Has seleccionado la opción 1";
        break;
    case 2: /** si la opcion es 2 imprime lo que dice el echo de debajo */
        echo "Has seleccionado la opción 2";
        break;
    case 3: /** si la opcion es 3 imprime lo que dice el echo de debajo */
        echo "Has seleccionado la opción 3";
        break;
    default: /** si no es ninguna imprime el echo de debajo */
        echo "Opción inválida";
        break;
    }

    /** Estructuras repetitivas */

    $contador = 1;

    while ($contador <= 5) { /** esto quiere decir que cuando el contador sea menor a 5 el ciclo se estara recorriendo */
        echo "El contador es: " . $contador . "<br>";
        $contador++;
    }

    /**---------------------------------------------------------- */

    $contador = 1;

    do { /** el do da una orden inmediata para hacer cumpliendose lo que dice el while de debajo */
        echo "El contador es: " . $contador . "\n";
        $contador++; 
    } while ($contador <= 5); /** esto quiere decir que cuando el contador sea menor a 5 el ciclo se estara recorriendo */

    /**---------------------------------------------------------- */

    $colores = array("rojo", "azul", "verde");

    foreach ($colores as $color) { /** el foreach es una clase de bucle en la cual empieza a recorrer todos los elementos dentro de un array y en este caso los imprime */
        echo $color . "<br>";
    }

    /** Funciones */

    
?>
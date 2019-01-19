<?php 
//ARRAYS 
// Array de 7 elementos con el nombre de un día de la semana en cada uno de ellos:
$aDias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

// Array de 4 elementos con un número contenido en cada posición:
$aNumeros = array(33, 12, 83, 55);

// Mostrar datos de un array:
echo "El primer día es el: ".$aDias[0]."<br/>";
echo "El segundo número es el: ".$aNumeros[1]."<br/>";

//ARRAYS ASOCIATIVOS

$aColores = array( "color1" => "rojo", "color2" => "verde", "color3" => "azul" );

$aCosas = array( "color1" => "rojo", "importe" => 300, "activo" => true, 3 => 55 );

echo "Color 3: ".$aColores["color3"]."<br/>";
echo "Activo: ".$aCosas["activo"]."<br/>";
echo "3: ".$aCosas[3]."<br/>";




$colores = array( 
   'frutas' => array('manzana' => 'roja', 'ciruela' => 'púrpura'), 
   'flores' => array('rosa' => 'rosada', 'violeta' => 'azul')
 ); 

echo "Una ciruela es".$colores['frutas']['ciruela'].", 
y una violeta es" .$colores['flores']['violeta']; 


?>
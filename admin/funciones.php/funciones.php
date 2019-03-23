function getMenuPadre($posicion)
{
include 'conexion/conexion.php';
$sql1 = "SELECT * FROM links WHERE id_padre = 0 AND posicion = " . $posicion;

$query = connection->prepare($sql);
$query ->execute();

if ($query->rowCount() > 0) {
	return $query->fetchALL();
}

return false;

}

fun
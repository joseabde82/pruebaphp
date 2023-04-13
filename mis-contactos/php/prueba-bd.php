<?php
//Pasos para conectarme a una BD MySQL con PHP
//1) Conectarme al BD, mysql_coneect necesita 3 datos:
    //1.1) Servidor de BD
    //2.1) Usuario e la BD
    //3.1) Password del usuario de la BD
$conexion = mysqli_connect("localhost", "root", "") or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL <br />";

//2) Seleccionar la BD con la que vamos a trabajar
mysqli_select_db($conexion, "mis_contactos") or die ("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD seleccionada: mis_contactos<br />";

//3) Crear una consulta SQL

$consulta= "SELECT * FROM pais";

//4) Ejecutar la consulta SQL
//mysql_query ecesita 2 parámetros:
    //4.1) La consulta
    //4.2) Conexion a la base de datos
$ejecutar_consulta = mysqli_query($conexion, $consulta) or die ("No se pudo ejecutar la consulta en la BD"); 
echo "Se ejecu&oacute; la cunsulta SQL<br />";
//5) Mostar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la funcion mysql fetch array.
while($registro=mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["id_pais"]." - ".$registro["pais"]."<br />";
}
//6) cerrar la conexion de la BD

mysqli_close($conexion) or die ("Ocurrió un error al cerrar la conexion a la BD");
echo "Conexión Cerrada";

?>

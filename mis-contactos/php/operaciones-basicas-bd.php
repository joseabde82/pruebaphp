<?php
$conexion = mysqli_connect("localhost","root","") or die ("no se pudo conectar con el servidor de BD");
echo "Conectado al servidor de BD MySQL<br />";
mysqli_select_db($conexion,"mis_contactos") or die ("No se pudo seleccionar la BD<br />");
echo "BD seleccionada: <b>mis_contactos</b><br />";
echo "<h1> Las 4 operaciones b&aacute;sicas a una BD</h1>";
echo "<h2>1) INSERCI&Oacute;N DE DATOS</h2>";
//INSERT INTO nombre_table(campos_table) VALUES(valores_campos)
$consulta="INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('jose.abde@gmail.com','jose carlos','M','1982-05-23','+51987102249','Perú','jose.png'),
('joseabde@gmail.com','jose carlos','M','1982-05-23','+51987102249','Perú','jose.png')";

$ejecutar_consulta = mysqli_query($conexion, $consulta);

if (!$ejecutar_consulta) {
    // Si la consulta falla, se ejecuta este bloque de código
    $mensaje_error = "Ha ocurrido un error al ejecutar la consulta: " . mysqli_error($conexion);
    echo $mensaje_error;
} else {
    // Si la consulta se ejecuta correctamente, se ejecuta este bloque de código
    echo "Se han insertado los datos =) <br />";
}

echo "<h2>2) ELIMINACI&Oacute;N DE DATOS</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos where email = 'jose.abde@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion, $consulta);
echo "Datos eliminados";


?>
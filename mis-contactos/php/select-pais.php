<?php
if(!$registro_contacto["pais"]){
    include("conexion.php");
}
$consulta="SELECT * FROM pais ORDER BY pais";
$ejecutar_consulta=$conexion->query($consulta);
while($registro=$ejecutar_consulta->fetch_assoc())
{
    //Imprime correctamente pero no tiene fallas con las tildes y eñes
    echo "<option value='".$registro["pais"]."'";
    if($registro["pais"]==$registro_contacto["pais"]){
        echo " selected";
    }
    echo ">".$registro["pais"]."</option>";
    
    //metodo para corregir las tildes y las eñes solo usar cuando se presenta problemas
    //$nombre_pais=utf8_encode($registro["pais"]);
    //echo "<option value='$nombre_pais'>$nombre_pais</option>";
}
?>
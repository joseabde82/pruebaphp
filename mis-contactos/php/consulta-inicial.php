<br><br>
<?php
$letra = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z');
//con un form se muestra en pantalla todo el abcdario
//Se construye un enlace dinámico por cada letra del abcdario
for($i=0; $i<count($letra);$i++){
    if($letra[$i]=="Z"){
        echo "<a class='cambio' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>";
    }
    else{
        echo "<a class='cambio' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>\n-\n";
    }
}
if($_GET["letra"]!=null)
{
    $inicial = $_GET["letra"];
    $consulta = "SELECT * FROM contactos WHERE nombre LIKE '$inicial%'";
    include("tabla-resultados.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Env&iacute;o de datos por GET y POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <hgroup><h1>Formulario enviado por el m&eacute;todo GET</h1></hgroup>
    <form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
        <input type="text" name="nombre_txt" />
        <br /><br />
        <label>Ingresa tu Password:</label>
        <input type="password" name="password_txt" />
        <br /><br />
        <input type="submit" name="enviar_btn" value="Envia-GET" />
    </form>

    <hgroup><h1>Formulario enviado por el m&eacute;todo POST</h1></hgroup>
    <form name="envia-post_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu Nombre:</label>
        <input type="text" name="nombre_txt" />
        <br /><br />
        <label>Ingresa tu Password:</label>
        <input type="password" name="password_txt" />
        <br /><br />
        <input type="submit" name="enviar_btn" value="Envia-POST" />
    </form>
</body>
</html>
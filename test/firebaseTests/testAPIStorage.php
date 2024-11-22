<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test API FireBase Storage</title>
    <link rel="stylesheet" href="../../public/assets/css/tests.css">
</head>

<body>

    <!-- Contenedor del Formulario -->
    <form id="formTestApi">
        <h1>Test de FireBase Storage API</h1>
        <input id="testText" type="text">
        <input id="testFile" type="file" name="file">
        <input id="testSubmit" type="submit" value="Guardar">
    </form>

    <!-- Boton para Cargar las Imagenes de FireBase Storage -->
    <button id="bntCargar">Cargar Imagenes</button>

    <!-- Contenedor para las Imagnes Cargadas -->
    <div id="containerShow">
    </div>

    <!-- Modulo para el Script de FireBase -->
    <script type="module" src="./fireBaseStorage.js"></script>
</body>

</html>
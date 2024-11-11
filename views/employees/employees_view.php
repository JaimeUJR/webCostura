<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees</title>
    <link rel="stylesheet" href="../../public/assets/css/lists.css">
    <link rel="stylesheet" href="../../public/assets/css/reset.css">
</head>
<body>
    <?php include_once "../sections/header.php"; ?> <!-- Include the header navBar -->

    <div class="divTo2Colums"> 
        
        <aside class="navBarAside">
            <h2 class="navBarAside__h2"> Acciones </h2>
            <menu class="navBarAside__menu">
                    <li class="navBarAside__menu_li">
                        <a href="?control=1" class="navBarAside__menu_li_a">Visualizar Empleados</a>
                    </li>
                    <li class="navBarAside__menu_li">
                        <a href="?control=2" class="navBarAside__menu_li_a">Crear un Empleado</a>
                    </li>
            </menu>
        </aside>

        <main class="main">
            <?php 
                if (isset($_GET['control'])) { # This is a control to what show
                    $control = $_GET['control'];

                    if ($control == 1) {
                        include_once "./employees_list.php"; 
                    } elseif ($control == 2) {
                        include_once "./form_create_employee.php";
                    } else { ?>
                    <div class="divTo2Colums">
                            <center><img class="msjIllustrator msjIllustratorBG" src="../assets/img/userView.svg" alt="analysis"></center>

                            <div>
                                <p> ¡Bienvenido! En esta sección, podrás visualizar toda la información de las personas y Empleados registrados. Desde aquí, puedes:
                                </p>

                                <li>Consultar la lista completa de Empleados y clientes.</li>
                                <li> Actualizar los datos de cualquier Empleado.</li>
                                <li>Eliminar Empleados si es necesario.</li>
                                <li>Agregar nuevos Empleados con facilidad.</li>
                                <p>  
                                Nos esforzamos por ofrecerte una experiencia sencilla y eficiente. Si necesitas ayuda, no dudes en contactarnos. ¡Gracias por ser parte de J&K Studios!</p>
                            </div>
                        </div>
                <?php }}
            ?>
        </main>
    </div>
</body>
</html>
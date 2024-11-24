<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="../../public/assets/css/moreInfo.css">
    <link rel="stylesheet" href="../../public/assets/css/lists.css">
</head>

<body>
    <?php
    include_once "../sections/header.php";
    include_once "../../controllers/employee_controller.php";
    $controller = new Employee_controller();

    if (isset($_GET['employee']) && is_numeric($_GET['employee'])) {
        $data = $controller->employee_details((int)$_GET['employee']);
        echo '<div class="divTo2Colums">';
        echo '<div>' . $data['personal'] . '</div>';
        echo '<div>' . $data['profesional'];
        $table = $controller->services_by_employee((int)$_GET['employee']);
        if ($table) {
    ?>
            <table class="tableQuerys center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Costo:</th>
                        <th>Costo Extra</th>
                        <th>Recibido el:</th>
                        <th>Entregado el:</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    echo $table;
                    ?>
                </tbody>
            </table>
    <?php
        } else {
            echo "No se encontro ningun historial de servicios relacionado";
        }
        echo "</div>";
    } else {
        echo "<p>No se proporcionó un empleado válido.</p>";
    }
    ?>

</body>

</html>
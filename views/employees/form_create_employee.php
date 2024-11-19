<form class="form" id="formCreateEmployee" action="" method="POST">

    <span id="spanForm">
        <!-- Warnings by JS -->
    </span>

    <h1 class="form__h1">Crear un Empleado</h1>

    <div class="form__container">
        <div> <!-- First Name -->
            <input class="form__container_inputs" type="text" name="name" autocomplete="off" id="name" required>
            <label class="form__container--labels" for="Name">Nombre(s)</label>
        </div>

        <div> <!-- Last Name Paternal -->
            <input class="form__container_inputs" type="text" name="lastName1" autocomplete="off" id="lastName1"
                required>
            <label for="LastName1">Apellido Paterno</label>
        </div>

        <div> <!-- LastName Maternal -->
            <input class="form__container_inputs" type="text" name="lastName2" autocomplete="off" id="lastName2"
                required>
            <label for="LastName2">Apellido Materno</label>
        </div>

        <div> <!-- Phone Number -->
            <input class="form__container_inputs" type="text" name="no_Phone" autocomplete="off" id="no_Phone"
                parent="[0-9]" required>
            <label for="No.Phone">Número Telefonico</label>
        </div>

        <div> <!-- Born Day -->
            <input class="form__container_inputs" type="date" name="dateBorn" autocomplete="off" id="dateBorn" required>
            <label id="inputDateBorn" for="DateBorn">Fecha de Nacimiento</label>
        </div>

        <div> <!-- Email -->
            <input class="form__container_inputs" type="email" name="email" autocomplete="off" id="email" required>
            <label for="Email">Correo</label>
        </div>

        <div class="form__container--optionsContainer"> <!-- State -->
            <label for="state">Estado</label>

            <select class="form__container_selects" name="state" id="state" required>
                <?php
                echo $controller->list_states(); // Generate the options with the states in the database
                ?>
            </select>
        </div>

        <div class="form__container--optionsContainer"> <!-- Municipal -->
            <label for="municipaly">Municipio</label>

            <select class="form__container_selects" name="municipaly" id="municipaly" required>
                <!-- The options are generated whit JavaScript -->
            </select>
        </div>

        <div class="form__container">
            <div class="form__container--optionsContainer"> <!-- Jobs -->
                <label for="job">Puestos / Cargos</label>

                <select class="form__container_selects" name="job" id="job" required>
                    <?php
                    echo $controller->list_jobs();
                    ?>
                </select>
            </div>
        </div>

        <div class="form__container"> <!-- Address -->
            <input class="form__container_inputs" type="text" name="cologne" autocomplete="off" id="cologne" required>
            <label for="cologne">Colonia</label>
        </div>

        <!-- Button's Container -->
        <div class="form__containerButtons">
            <div class="form__containerSubmit">
                <input class="btnSubmit" type="submit" value="Crear Empleado">
            </div>
        </div>
    </div>

</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include_once "../../controllers/employee_controller.php";

        $controller = new Employee_controller();

        $name = $_POST['name'];
        $lastName1 = $_POST['lastName1'];
        $lastName2 = $_POST['lastName2'];
        $no_Phone = $_POST['no_Phone'];
        $dateBorn = $_POST['dateBorn'];
        $email = $_POST['email'];

        // Converted Int
        $state = (int)$_POST['state'];
        $municipaly = (int)$_POST['municipaly'];
        $job = (int)$_POST['job'];

        $cologne = $_POST['cologne'];

        // It will be removed
        if (!is_string($name) || empty($name)) {
            echo("El nombre no es válido.");
        }
        if (!is_string($lastName1) || empty($lastName1)) {
            echo("El primer apellido no es válido.");
        }
        if (!is_string($lastName2) || empty($lastName2)) {
            echo("El segundo apellido no es válido.");
        }
        if (!is_string($no_Phone) || !preg_match('/^\d+$/', $no_Phone)) {
            echo("El número de teléfono no es válido.");
        }
        if (!is_string($dateBorn) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateBorn)) {
            echo("La fecha de nacimiento no es válida.");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("El correo electrónico no es válido.");
        }
        if (!is_int($state) || $state <= 0) {
            echo("El estado no es válido.");
        }
        if (!is_int($municipaly) || $municipaly <= 0) {
            echo("El municipio no es válido.");
        }
        if (!is_int($job) || $job <= 0) {
            echo("El trabajo no es válido.");
        }
        if (!is_string($cologne) || empty($cologne)) {
            echo("La colonia no es válida.");
        }

        $result = $controller->create_employee($state , $municipaly, $name, $cologne, $lastName1, $lastName2, $no_Phone, $dateBorn, $email, $job);

    }
?>
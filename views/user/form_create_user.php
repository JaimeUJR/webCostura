<link rel="stylesheet" href="../../public/assets/css/forms.css">

<form class="form" id="formCreateUser" action="" method="POST">

    <span id="spanForm">
        <?php
        if (isset($_GET['msj'])) {
            echo $_GET['msj'];
        }

        include_once "../../controllers/user_controller.php";
        $controller = new User_controller();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $userName = (string)$_POST['userName'];
            $userPassword = (string)$_POST['password'];
            $idEmployee = (int)$_POST['employeesList'];
            $userType = (int)$_POST['userType'];

            $action = $controller->create_user_controller($userName, $userPassword, $idEmployee, $userType);
             if ($action) {
                echo "Creado con éxtio";
             } else echo "Algo Falló";

        }
        ?>
    </span>

    <h1 class="form__h1">Crear un Usuario</h1>

    <div class="form__container">
        <div>
            <label class="form__container_labels--modifier" for="userName">Nombre de Usuario</label>
            <input class="form__container_inputs" type="text" name="userName" autocomplete="off" id="userName" required>
        </div>

        <div>
            <label class="form__container_labels--modifier" for="password">Contraseña</label>
            <input class="form__container_inputs" type="password" name="password" autocomplete="off" id="password" required minlength="8">
        </div>

        <div>
            <label class="form__container_labels--modifier" for="passwordConfirm">Confirme la Contraseña</label>
            <input class="form__container_inputs" type="password" name="passwordConfirm" autocomplete="off" id="passwordConfirm" required minlength="8">
        </div>

        <div class="form__container_optionsContainer">
            <label for="userType">Seleccione el Tipo de Usuario</label>
            <select class="form__container_selects" id="userType" name="userType" required>
                <option value=0>Seleccionar</option>
                <option value=1>Administrador</option>
                <option value=2>Empleado</option>
            </select>
        </div>

        <div class="form__container_optionsContainer">
            <label for="employeesList">Seleccione el Empleado</label>
            <select class="form__container_selects" id="employeesList" name="employeesList" required>
                <?php
                echo $controller->list_employee();
                ?>
            </select>
        </div>

        <div class="form__containerButtons">
            <div class="form__containerSubmit">
                <button type="submit">Crea Usuario</button>
            </div>
        </div>
    </div>
    <span id="spanValidate"></span>
</form>

<script type="module" src="../../public/assets/js/validations.js"></script>
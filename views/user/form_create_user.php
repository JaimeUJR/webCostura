<link rel="stylesheet" href="../../public/assets/css/forms.css">

<form class="form" id="formCreateUser" action="../../controllers/user_controller.php" method="POST">

    <span id="spanForm"> 
        <?php
            if (isset($_GET['msj'])) {
                echo $_GET['msj'];
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
            <label class="form__container_labels--modifier"  for="password">Contraseña</label>
            <input class="form__container_inputs" type="password" name="password" autocomplete="off" id="password" required minlength="8">
        </div>

        <div>
            <label class="form__container_labels--modifier"  for="passwordConfirm">Confirme la Contraseña</label>
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

        <div> <input type="hidden" name="createUser" value="createUser"> </div>
        <div class="form__containerButtons">
            <div class="form__containerSubmit">
                <button type="button" onclick="validate_form_user()">Crea Usuario</button>
            </div>
        </div>
    </div>
    <span id="spanValidate"></span>
</form>

<script src="../../public/assets/js/validations.js"></script>
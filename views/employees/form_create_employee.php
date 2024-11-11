<link rel="stylesheet" href="../../public/assets/css/forms.css">

<form class="form" id="formCreateEmployee" action="../../controllers/employee_controller.php" method="POST">

    <span id="spanForm"> 
        <?php
            if (isset($_GET['msj'])) {
                echo $_GET['msj'];
            }
        ?>
    </span>

    <h1 class="form__h1">Crear un Empleado</h1>

    <div class="form__container">

        <div>
            <input class="form__container_inputs" type="text" name="Name" autocomplete="off" id="Name" required>
            <label class="form__container--labels" for="Name">Nombre(s)</label>
        </div>

        <div>
            <input class="form__container_inputs" type="text" name="LastName1" autocomplete="off" id="LastName1" required>
            <label for="LastName1">Apellido Paterno</label>
        </div>

        <div>
            <input class="form__container_inputs" type="text" name="LastName2" autocomplete="off" id="LastName2" required>
            <label for="LastName2">Apellido Materno</label>
        </div>

    </div>

    <div class="form__container">
        <div>
            <input class="form__container_inputs" type="text" name="No_Phone" autocomplete="off" id="No_Phone" parent="[0-9]" required>
            <label for="No.Phone">Número Telefonico</label>
        </div>

        <div>
            <input class="form__container_inputs" type="date" name="DateBorn" autocomplete="off" id="DateBorn" required>
            <label id="inputDateBorn" for="DateBorn">Fecha de Nacimiento</label>
        </div>

        <div>
            <input class="form__container_inputs" type="email" name="Email" autocomplete="off" id="Email" required>
            <label for="Email">Correo</label>
        </div>

    </div>

    <div class="form__container">

        <div class="form__container--optionsContainer">
            <label for="state">Estado</label>

            <select class="form__container_selects" name="state" id="state" required>
                <option value="">Seleccionar Estado</option>
                <?php include_once "../src/model/getStates.php"; ?>
            </select>
        </div>

        <div class="form__container--optionsContainer">
            <label for="municipaly">Municipio</label>

            <select class="form__container_selects" name="municipaly" id="municipaly" required>
                <div id="divMunicipaly">
                    <option class="form__container_selects" value="">Seleccione un Estado</option>
                </div>
            </select>
        </div>

        <div class="form__container">
            <input class="form__container_inputs" type="text" name="cologne" autocomplete="off" id="cologne" required>
            <label for="cologne">Colonia</label>
        </div>

        <div class="form__container">
            <input  class="form__container_inputs" type="text" name="job" autocomplete="off" id="job" required>
            <label for="job">Puesto</label>
        </div>

        <div class="form__container">
            <input  class="form__container_inputs" type="number" name="pay" autocomplete="off" id="pay" required>
            <label for="pay">Sueldo</label>
        </div>

        <div class="form__containerButtons">

            <div class="form__containerSubmit">
                <button onclick="validate_form_employee()" type="button">Usuario</button>
            </div>
        </div>
        
        <div class="form__container--optionsContainer">
            <input class="form__container--selects" type="hidden" name="userType" id="userType" value=2>
        </div>
        
    </div>
</form>

<script src="../../public/assets/js/validations.js"></script>
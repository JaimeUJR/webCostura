<?php

class User_controller {
    private $model;

    public function __construct()
    {
        include_once "../../models/user_model.php";
        $this->model = new User();
    }

    public function list_employee () {
        $list = $this->model->get_list_employees();

        $string = "<option value = 0>Selecciona un Empleado</option>";

        while ($employee = $list->fetch_assoc()) {
            $string .= "<option value = ".$employee['id_employee']." data-email= '".$employee['email']."'>".$employee['name']."</option>";
        }

        return $string;
    }

    public function create_user_controller ($userName, $userPassword, $idEmployee, $userType) {
        $this->model->create_user($userName, $userPassword, $idEmployee, $userType);
    }
}


function get_list_user()
{

    $userModel = new User();

    if ($userModel) {
        $action = $userModel->get_list_users();

        if ($action) {
            return $action;
        } else {
            $msj = "Error de Conexión";
            header("Location: ../views/user/users_view.php?control=2&msj=" . $msj);
        }
    } else {
        $msj = "Error de comunicacón";
        header("Location: ../views/user/users_view.php?control=2&msj=" . $msj);
    }
}

if (isset($_GET['get_list_user'])) {
    return get_list_user();
}

/*
$json = json_encode(get_list_user());
echo "Codificacion de lo que devuelve el modelo: " . var_dump($json);
echo "<br><br>";
echo "Codificacion en JSON" . var_dump(json_decode($json));
echo "<br><br>";
echo "JSON Decodificado" . var_dump($json);
echo "<br><br>";
*/
?>
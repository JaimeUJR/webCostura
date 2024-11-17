<?php
include_once "../models/user_model.php";

function create_user_controller()
{
    $userName = $_POST['userName'];
    $userPassword = $_POST['password'];
    $userType = $_POST['userType'];

    $userModel = new User();

    if ($userModel) {
        $action = $userModel->create_user($userName, $userPassword, 1, $userType);

        if ($action) {
            $msj = "Creación Exitosa";
            header("Location: ../views/user/users_view.php?control=2&msj=" . $msj);
        } else {
            $msj = "Error de Conexión";
            header("Location: ../views/user/users_view.php?control=2&msj=" . $msj);
        }
    } else {
        $msj = "Error de comunicacón";
        header("Location: ../views/user/users_view.php?control=2&msj=" . $msj);
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

if (isset($_POST['createUser'])) {
    create_user_controller();
}/*
$json = json_encode(get_list_user());
echo "Codificacion de lo que devuelve el modelo: " . var_dump($json);
echo "<br><br>";
echo "Codificacion en JSON" . var_dump(json_decode($json));
echo "<br><br>";
echo "JSON Decodificado" . var_dump($json);
echo "<br><br>";
*/
?>
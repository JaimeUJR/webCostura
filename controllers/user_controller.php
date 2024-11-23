<?php
class User_controller
{
    private $model;

    public function __construct()
    {
        include_once "../../models/user_model.php";
        $this->model = new User();
    }

    public function create_user_controller($userName, $userPassword, $idEmployee, $userType)
    {
        $this->model->create_user($userName, $userPassword, $idEmployee, $userType);
    }

    public function users_list()
    {
        $string = "";

        $res = $this->model->get_list_users(); # Request the data

        $i = 1;
        $rowControl = 1;
        while ($fila = $res->fetch_assoc()) { # Show the data
            if ($i == $rowControl) {
                $string .=  '<tr>';
                $string .=  '<td>' . $i . '</td>';
                $string .=  '<td>' . $fila['id_user'] . '</td>';
                $string .=  '<td>' . $fila['username'] . '</td>';
                $string .=  '<td>' . $fila['user_created'];
                $string .=  '<td>' . $fila['name_job'] . '</td>';
                $string .=  '<td>' . $fila['first_name'] . " " . $fila['last_name_paternal'] . " " . $fila['last_name_maternal'] . '</td>';
                $string .=  '<td>' . $fila['email'] . '</td>';
                $string .=  '<td>' . $fila['phone_number'] . '</td>';
                $string .=  '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve=' . $fila['id_user'] . '"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                $string .=  '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve=' . $fila['id_user'] . '"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                $string .=  '</tr>';
                $i++;
            } else {
                $string .=  '<tr class="rowTable">';
                $string .=  '<td>' . $i . '</td>';
                $string .=  '<td>' . $fila['id_user'] . '</td>';
                $string .=  '<td>' . $fila['username'] . '</td>';
                $string .=  '<td>' . $fila['user_created'];
                $string .=  '<td>' . $fila['name_job'] . '</td>';
                $string .=  '<td>' . $fila['first_name'] . " " . $fila['last_name_paternal'] . " " . $fila['last_name_maternal'] . '</td>';
                $string .=  '<td>' . $fila['email'] . '</td>';
                $string .=  '<td>' . $fila['phone_number'] . '</td>';
                $string .=  '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve=' . $fila['id_user'] . '"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                $string .=  '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve=' . $fila['id_user'] . '"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                $string .=  '</tr>';
                $i++;
                $rowControl += 2;
            }
        }
        return $string;
    }

    public function list_employee()
    {
        $list = $this->model->get_list_employees();

        $string = "<option value = 0>Selecciona un Empleado</option>";

        while ($employee = $list->fetch_assoc()) {
            $string .= "<option value = " . $employee['id_employee'] . " data-email= '" . $employee['email'] . "'>" . $employee['name'] . "</option>";
        }

        return $string;
    }
}

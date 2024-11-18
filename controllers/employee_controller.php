<?php
include_once "../../models/employee_model.php";

class Employee_controller
{
    private $model;
    private $today;

    public function __construct()
    {
        $this->model = new Employee();
        $this->today = date('Y-mm-dd');
    }

    // Finished
    public function create_employee($state , $municipaly, $name, $cologne, $lastName1, $lastName2, $no_Phone, $dateBorn, $email, $job)
    {
        return $this->model->create_employee($state , $municipaly, $name, $cologne, $lastName1, $lastName2, $no_Phone, $dateBorn, $email, $job); #Return [true or false, true or false]
    }

    // Finished
    public function list_employee()
    {
        $list = $this->model->get_list_employee();
        $res = $list->get_result();
        $rowControl = 1;
        $i = 1;
        $stringList = '';
        while ($employee = $res->fetch_assoc()) {
            if ($i == $rowControl) {
                $stringList  .= '<tr>';
                $stringList  .= '<td>' . $i . '</td>';
                $stringList  .= '<td>' . $employee['first_name'] . " " . $employee['last_name_paternal'] . $employee['last_name_maternal'] . '</td>';
                $stringList  .= '<td>' . $employee['hiring_at'] . '</td>';
                $stringList  .= '<td>' . $employee['name_job'];
                $stringList  .= '<td>$' . $employee['salary'] . '</td>';
                $stringList  .= '<td>' . $employee['status_job'] . '</td>';
                $stringList  .= '<td>' . $employee['phone_number'] . '</td>';
                $stringList  .= '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve=' . $employee['id_user'] . '"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                $stringList  .= '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve=' . $employee['id_user'] . '"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                $stringList  .= '</tr>';
                $i++;
            } else {
                $stringList  .= '<tr class="rowTable">';
                $stringList  .= '<td>' . $i . '</td>';
                $stringList  .= '<td>' . $employee['username'] . '</td>';
                $stringList  .= '<td>' . $employee['user_created'];
                $stringList  .= '<td>' . $employee['name_job'] . '</td>';
                $stringList  .= '<td>' . $employee['first_name'] . " " . $employee['last_name_paternal'] . $employee['last_name_maternal'] . '</td>';
                $stringList  .= '<td>' . $employee['email'] . '</td>';
                $stringList  .= '<td>' . $employee['phone_number'] . '</td>';
                $stringList  .= '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve=' . $employee['id_user'] . '"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                $stringList  .= '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve=' . $employee['id_user'] . '"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                $stringList  .= '</tr>';
                $i++;
                $rowControl  .= 2;
            }

            return $stringList;
        }
    }

    // Finished
    public function list_jobs()
    {
        $list = $this->model->get_list_jobs()->get_result();

        $stringList = '<option value = 0> Seleccione un Cargo/Puesto</option>';
        while ($job = $list->fetch_assoc()) {
            $stringList .= "<option value = ".$job['id_job'].">".$job['name']."</option>";
        }

        return $stringList;
    }

    // Finished
    public function list_states ()
    {
        $res = $this->model->get_list_states()->get_result();

        $stringList = '<option value = 0> Seleccione un Estado</option>';
        while ($state = $res->fetch_assoc()) {
            $stringList .= '<option value ='.$state['id_state'].'>'.$state['name'].'</option>';
        }

        return $stringList;
    }
}

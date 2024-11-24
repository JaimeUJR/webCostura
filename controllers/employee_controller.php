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

    // This is ok and is finished
    public function create_employee($state, $municipaly, $name, $cologne, $lastName1, $lastName2, $no_Phone, $dateBorn, $email, $job)
    {
        return $this->model->create_employee($state, $municipaly, $name, $cologne, $lastName1, $lastName2, $no_Phone, $dateBorn, $email, $job); #Return [true or false, true or false]
    }

    public function list_employee() // This is ok and is finished
    {
        $list = $this->model->get_list_employee();
        $rowControl = 1;
        $i = 1;
        $stringList = '';
        while ($employee = $list->fetch_assoc()) {
            if ($i == $rowControl) {
                $stringList  .= '<tr>';
                $stringList  .= '<td>' . $i . '</td>';
                $stringList  .= '<td>' . $employee['first_name'] . " " . $employee['last_name_paternal'] . " " . $employee['last_name_maternal'] . '</td>';
                $stringList  .= '<td>' . $employee['hiring_at'] . '</td>';
                $stringList  .= '<td>' . $employee['job_name'];
                $stringList  .= '<td>' . $employee['status_job'] . '</td>';
                $stringList  .= '<td>' . $employee['phone_number'] . '</td>';
                $stringList  .= '<td>
                                    <a href="./moreInfo.php?employee=' . $employee['id_employee'] . '">
                                        <img class="moreInfoIcon icon" src="../../public/assets/icons/more_info.svg" alt="icon">
                                    </a>
                                </td>';
                $stringList  .= '</tr>';
                $i++;
            } else {
                $stringList  .= '<tr class="rowTable">';
                $stringList  .= '<td>' . $i . '</td>';
                $stringList  .= '<td>' . $employee['first_name'] . " " . $employee['last_name_paternal'] . " " . $employee['last_name_maternal'] . '</td>';
                $stringList  .= '<td>' . $employee['hiring_at'] . '</td>';
                $stringList  .= '<td>' . $employee['job_name'];
                $stringList  .= '<td>' . $employee['status_job'] . '</td>';
                $stringList  .= '<td>' . $employee['phone_number'] . '</td>';
                $stringList  .= '<td>
                                    <a href="./moreInfo.php?employee=' . $employee['id_employee'] . '">
                                        <img class="moreInfoIcon icon" src="../../public/assets/icons/more_info.svg" alt="icon">
                                    </a>
                                </td>';
                $stringList  .= '</tr>';
                $i++;
                $rowControl  += 2;
            }
        }
        return $stringList;
    }

    public function list_jobs() // This is ok and is finished
    {
        $list = $this->model->get_list_jobs()->get_result();

        $stringList = '<option value = 0> Seleccione un Cargo/Puesto</option>';
        while ($job = $list->fetch_assoc()) {
            $stringList .= "<option value = " . $job['id_job'] . ">" . $job['name'] . "</option>";
        }

        return $stringList;
    }

    public function list_states() // This is ok and is finished
    {
        $res = $this->model->get_list_states()->get_result();

        $stringList = '<option value = 0> Seleccione un Estado</option>';
        while ($state = $res->fetch_assoc()) {
            $stringList .= '<option value =' . $state['id_state'] . '>' . $state['name'] . '</option>';
        }

        return $stringList;
    }

    public function employee_details($id)
    {
        $employee = $this->model->get_employee_details($id);

        $card_personal_data = '';
        $card_profesional_data = '';

        while ($data = $employee->fetch_assoc()) {
            $card_personal_data .= '
            <div class="containerPersonalData">
                <a id="btnBack" href="./employees_view.php?control=1">
                    <img src="../../public/assets/icons/back_Icon.svg" alt="back"> Volver
                </a>
                <div class="measurements">
                    <h2>Datos del Empleado ' . $id . '</h2>
                    <div>
                        <span class="label">Nombre:</span>
                        <span class="value">' . $data['first_name'] . ' ' . $data['last_name_paternal'] . ' ' . $data['last_name_maternal'] . '</span>
                    </div>
                    <div>
                        <span class="label">Correo:</span>
                        <span class="value">' . $data['email'] . '</span>
                    </div>
                    <div>
                        <span class="label">Teléfono:</span>
                        <span class="value">' . $data['phone_number'] . '</span>
                    </div>
                </div>
                <div class="measurements">
                    <h2>Detalles</h2>
                    <div>
                        <span class="label">Estado:</span>
                        <span class="value">' . $data['state_name'] . '</span>
                    </div>
                    <div>
                        <span class="label">Municipio:</span>
                        <span class="value">' . $data['municipal_name'] . '</span>
                    </div>
                    <div>
                        <span class="label">Fecha de Nacimiento:</span>
                        <span class="value">' . $data['date_born'] . '</span>
                    </div>
                </div>
            </div>
        ';

            $card_profesional_data .= '
            <div class="containerProfesionalData">
                <div class="measurements">
                    <div>
                        <span class="label">Cargo/Puesto:</span>
                        <span class="value">' . $data['job_name'] . '</span>
                    </div>
                    <div>
                        <span class="label">Estatus:</span>
                        <span class="value">' . $data['status_job'] . '</span>
                    </div>
                    <div>
                        <span class="label">Contratado en:</span>
                        <span class="value">' . $data['hiring_at'] . '</span>
                    </div>
                    <div>
                        <span class="label">Despedido en:</span>
                        <span class="value">' . $data['dismissed_at'] . '</span>
                    </div>
                    <div>
                        <span class="label">Horario laboral:</span>
                        <span class="value">' . $data['working_hours'] . ' hrs</span>
                    </div>
                    <div>
                        <span class="label">Salario Quincenal:</span>
                        <span class="value">$' . $data['salary'] . '</span>
                    </div>
                </div>
            </div>
        ';
        }

        return [
            "personal" => $card_personal_data,
            "profesional" => $card_profesional_data,
        ];
    }

    public function services_by_employee($id)
    {
        $array = $this->model->services_by_employee($id);

        $string = "";
        $rowControl = 1;
        $i = 1;
        while ($service = $array->fetch_assoc()) {
            if ( $rowControl== $rowControl) {
                $string .= '<tr>';
                $string .= '<td>' . $i . '</td>';
                $string .= '<td>' . $service['id_service'] . '</td>';
                $string .= '<td>' . $service['cost'] . '</td>';
                $string .= '<td>' . $service['extra_cost'] . '</td>';
                $string .= '<td>' . $service['received_at'];
                $string .= '<td>' . $service['delivery_at'];
                $string .= '<td>' . $service['observations'] . '</td>';
                $string .= '</tr>';
                $i++;
            } else {
                $string .= '<tr class="rowTable">';
                $string .= '<td>' . $i . '</td>';
                $string .= '<td>' . $service['id_service'] . '</td>';
                $string .= '<td>' . $service['cost'] . '</td>';
                $string .= '<td>' . $service['extra_cost'] . '</td>';
                $string .= '<td>' . $service['received_at'];
                $string .= '<td>' . $service['delivery_at'];
                $string .= '<td>' . $service['observations'] . '</td>';$string .= '</tr>';
                $i++;
                $rowControl += 2;
            }
        }

        return $string;
    }
}

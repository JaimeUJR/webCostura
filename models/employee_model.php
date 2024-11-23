<?php
include_once "../../config/database.php";
/*  Function bind_param('', $data_1, ..., $data_n);
Character	Description
i	        When the variable is integer
d	        When the variable is double
s	        When the variable is string
b	        When the variable is blob and is send in a package
*/
class Employee
{

    private $db;
    private $today;

    public function __construct()
    {
        $this->db = new DataBase();
        $this->today = date("Y-m-d");
    }

    // This is ok and is finished
    public function create_employee($state, $municipaly, $name, $cologne, $lastName1, $lastName2, $no_Phone, $dateBorn, $email, $job)
    {
        $db = $this->db->set_connection();

        $db->begin_transaction();
        try {
            $queryPeople =
                "INSERT INTO people (id_state, id_municipal, first_name, address, last_name_paternal, last_name_maternal, phone_number, date_born, email, created_at) " .
                "VALUES ($state, $municipaly, '$name', '$cologne', '$lastName1', '$lastName2', '$no_Phone', '$dateBorn', '$email', '$this->today')";
            $db->query($queryPeople);

            $id_people = $db->insert_id;

            $jobCheck = $db->query("SELECT COUNT(*) AS count FROM jobs WHERE id_job = $job");
            if ($jobCheck->fetch_assoc()['count'] == 0) {
                throw new Exception("Error: El id_job no existe en la tabla jobs ($job).");
            }

            if (!$id_people || $id_people <= 0) {
                throw new Exception("Error: id_people no es válido. ($id_people)");
            }

            $queryEmployee =
                "INSERT INTO employees (id_status_job, id_job, hiring_at, id_person) " .
                "VALUES (1, 1, '$this->today', $id_people)";
            $db->query($queryEmployee);

            $db->commit();
            return ["success" => true, "id_people" => $id_people];
        } catch (Exception $e) {
            $db->rollback();
            return ["error" => $e->getMessage()];
        }
    }

    public function get_list_employee() // This is ok and is finished
    {
        $query = "SELECT * FROM employee_all_details";

        $statement = $this->db->set_connection()->prepare($query);
        $statement->execute();
        $res = $statement->get_result();
        return $res;
    }

    public function get_list_jobs() // This is ok and is finished
    {
        $query = "SELECT * from jobs";
        $statement = $this->db->set_connection()->prepare($query);
        $statement->execute();
        return $statement;
    }

    public function get_list_states() // This is ok and is finished
    {
        $query = "SELECT * FROM state ORDER BY name";

        $statement = $this->db->set_connection()->prepare($query);
        $statement->execute();

        return $statement;
    }
}
?>
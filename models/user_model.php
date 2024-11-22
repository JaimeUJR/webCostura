<?php
/*  Function bind_param('', $data_1, ..., $data_n);
Character	Description
i	        When the variable is integer
d	        When the variable is double
s	        When the variable is string
b	        When the variable is blob and is send in a package
*/
class User
{

    private $db;
    private $date;

    public function __construct()
    { # Constructor of the class "User"
        include_once '../../config/database.php';
        $this->date = date("Y-m-d");
        $this->db = new DataBase();
    }

    public function create_user($userName, $userPassword, $idEmployee, $userType)
    {
        $query = "INSERT INTO users (username, password, id_employee, created_at, id_type) VALUES (?, ?, ?, ?, ?)";

        $passEncrypted = password_hash($userPassword, PASSWORD_BCRYPT); # This encrypts the password

        $statement = $this->db->set_connection()->prepare($query); # Prepare the query
        $statement->bind_param('ssisi', $userName, $passEncrypted, $idEmployee, $this->date, $userType); # Set the data
        $result_query = $statement->execute();

        return $result_query; # This returns true or false
    }

    public function get_list_users()
    {

        include_once '../../config/database.php';
        $this->db = new DataBase();

        $query = "SELECT * from user_all_details"; #  New query

        $statement = $this->db->set_connection()->prepare($query); # Prepare the query
        $statement->execute();
        $data = $statement->get_result(); # Get data as a list

        return $data; # This returns an array with the user's data
    }/*
            $query = "SELECT userName, password, cve_employee, created_at FROM users WHERE id = ?";

            $statement = $this->db->get_connection()->prepare($query); # Prepare the query
            $statement->bind_param('i', $cveUser); # Set the data
            $statement->execute();
            $data = $statement->get_result(); # Get data as a list
            */

    public function update_user($cveUser, $userName, $userPassword)
    {
        $query = "UPDATE users SET userName = ?, password = ? WHERE cve_employee = ?";
        $passEncrypted = password_hash($userPassword, PASSWORD_BCRYPT); # This encrypts the password

        $statement = $this->db->set_connection()->prepare($query); # Prepare the query
        $statement->bind_param('ssi', $userName, $passEncrypted, $cveUser); # Set the data
        $result_query = $statement->execute();

        return $result_query; # This returns true or false
    }

    public function drop_user($cveUser)
    {
        $query = "DELETE FROM users WHERE id = ?";

        $statement = $this->db->set_connection()->prepare($query);
        $statement->bind_param('i', $cveUser);
        $result_query = $statement->execute();

        return $result_query; # This returns true or false
    }

    public function get_list_employees()
    {
        $query = "SELECT id_employee, CONCAT(first_name, ' ', last_name_paternal, ' ', last_name_maternal) AS name, email FROM employee_all_details";

        $statement = $this->db->set_connection()->prepare($query);
        $statement->execute();
        $res = $statement->get_result();

        return $res;
    }
}

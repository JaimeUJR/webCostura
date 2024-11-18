<?php
     header('Content-Type: application/json');
     include_once "../config/database.php";

     $data = [];

    if (isset($_GET['idState'])) {

        $db = new DataBase();

        $query = "SELECT * FROM municipal WHERE id_state = ".$_GET['idState']." ORDER BY name";

        $statement = $db->set_connection()->prepare($query);
        $statement->execute();
        $municipales = $statement->get_result();

        $i = 0;
        while ($municipal = $municipales->fetch_assoc()) {
            $data[$i] = ["id" => $municipal['id_municipal'], "name" => $municipal['name'], "zip_code" => $municipal['zip_code']];
            $i++;
        }
    }

    echo json_encode($data);
?>
<!--  Function bind_param('', $data_1, ..., $data_n);
Character	Description
i	        When the variable is integer
d	        When the variable is double
s	        When the variable is string
b	        When the variable is blob and is send in a package
-->

<?php
    include_once "../config/database.php";

    class Employee {

        private $db;
        private $date;

        public function __construct () {
            $this->db = new DataBase();
            $this->date = date("Y-m-d");
        }

        public function create_employee () {
            
        }

        public function get_list_employee () {
            
        }
    }
?>
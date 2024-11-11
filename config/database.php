<?php
    # Declare the constants
    define("SERVER", "127.0.0.1");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "bd_taller");

    class DataBase {

        public $connection;
        
        public function __construct () { # This is the contructor of the clas
        }

        public function set_connection () {
            $this->connection = new mysqli(SERVER, USER, PASSWORD, DATABASE); // This create the connection

            if ($this->connection->connect_error) { # Check the conecction
                echo "Conexión Fallida <br>";
                die("Mensaje:  " . $this->connection->connect_error . "<br>"); # Show the message of the error
                die("Código:  " . $this->connection->connect_errno . "<br>"); # Show the code of the error
            } else $this->connection->set_charset("utf8"); # Set the characters set
            return $this->connection;
        }


        public function get_connection () { # Return the connection when the controller use the this class
            return $this->connection;
        }

        public function close_connection () {
            if ($this->connection) { # Check if the connection exists
                $this->connection->close(); # Close the connection
            }
        }
    }
?>
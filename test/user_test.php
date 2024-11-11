<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Test</title>
</head>
<body>
    <div>
        <h2>Prueba de la función "password_verify()"</h2>
        <h4>Compara un string con una cadena hasheada, devuelve true si son iguales y false si no lo son</h4>
        <p>Duelve lo siguiente: 
            <?php
                $pass_encrypt = password_hash("jaime1928Ulises", PASSWORD_BCRYPT);
                $pass_char = "jaime1928Ulises";

                $res = password_verify($pass_char, $pass_encrypt);

                echo "<br>password_hash() =".var_dump($pass_encrypt)."<br>";
                echo var_dump($res);
            ?>
        </p>
        <hr>
    </div>

    <div>
        <h2>Prueba de la función "get_data_user($cveUser)"</h2> 
        <h4>Devuelve un array con los datos del usuario con el cve que le pasemos como argumento</h4>
        <p>Duelve lo siguiente: 
            <?php
                include_once "../config/database.php";
                $dataBase = new DataBase();

                # We getting an object for the connection because it was not declared before
                function get_data_user ($cveUser, $db) {
                    $query = "SELECT userName, password, cve_employee, created_at FROM users WHERE id = ?";
        
                    $statement = $db->get_connection()->prepare($query); # Prepare the query
                    $statement->bind_param('i', $cveUser); # Set the data
                    $statement->execute();
                    $data = $statement->get_result(); # Get data as a list
        
                    return $data->fetch_assoc();
                }

                echo var_dump(get_data_user(1, $dataBase));
            ?>
        </p>
        <hr>
    </div>

    <div>
        <h2></h2>
        <h4></h4>
        <p> 
            <?php
            
            ?>
        </p>
        <h4></h4>
        <hr>
    </div>

    <div>
        <h2></h2>
        <h4></h4>
        <p> 
            <?php
            
            ?>
        </p>
        <h4></h4>
        <hr>
    </div>
    
    
        <div>
            <h2></h2>
            <h4></h4>
            <p> 
                <?php
                
                ?>
            </p>
            <h4></h4>
            <hr>
        </div>
</body>
</html>

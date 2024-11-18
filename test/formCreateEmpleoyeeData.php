<?php
    $name = $_POST['name'];
    $lastName1 = $_POST['lastName1'];
    $lastName2 = $_POST['lastName2'];
    $no_Phone = $_POST['no_Phone'];
    $dateBorn = $_POST['dateBorn'];
    $email = $_POST['email'];

    // Converted Int
    $state = (int)$_POST['state'];
    $municipaly = (int)$_POST['municipaly'];
    $job = (int)$_POST['job'];

    $cologne = $_POST['cologne'];

    // Converted Float
    $pay = (float)$_POST['pay'];

    // Today
    $today = date('Y-m-d');

echo "Nombre: ". var_dump($name)."<br>";
echo "Primer Apellido: ". var_dump( $lastName1)."<br>";
echo "Segundo Apellido: ". var_dump( $lastName2)."<br>";
echo "Teléfono: ". var_dump( $no_Phone)."<br>";
echo "Fecha de Nacimiento: ". var_dump( $dateBorn)."<br>";
echo "Correo Electrónico: ". var_dump( $email)."<br>";
echo "Estado: ". var_dump( $state)."<br>";
echo "Municipio: ". var_dump( $municipaly)."<br>";
echo "Trabajo: ". var_dump( $job)."<br>";
echo "Colonia: ". var_dump( $cologne)."<br>";
echo "Salario:". var_dump( $pay)."<br>";
echo "Hoy:". var_dump( $today)."<br>";

$query = "INSERT INTO people (id_state, id_municipal, first_name, address, last_name_paternal, last_name_maternal, phone_number, date_born, email, created_at
) VALUES (".$state.",".$municipaly.",".$name.",".$cologne.",".$lastName1.",".$lastName2.",".$no_Phone.",".$dateBorn.",".$email.",".$today.")";

echo "<br>".$query."<br>";

?>
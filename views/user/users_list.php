<table  class="tableQuerys">
    <thead>
        <tr>
            <th>#</th>
            <th># ID</th>
            <th>Nobre de Usuario</th>
            <th>Fecha de Creación</th>
            <th>Tipo de Usuario</th>
            <th>Nombre del empleado</th>
            <th>Correo</th>
            <th># Telefono</th>
            <th>Borrar</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody id="tbody">
        <!-- The list generate with get_list_users.js -->
        <?php
            include_once "../../models/user_model.php";

            $userModel = new User();

            $res = $userModel->get_list_users(); # Request the data

            $i = 1;
            $rowControl = 1;
            while ($fila = $res->fetch_assoc()) { # Show the data
                if ($i == $rowControl) {
                   echo '<tr>';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$fila['id_user'].'</td>';
                        echo '<td>'.$fila['username'].'</td>';
                        echo '<td>'.$fila['user_created'];
                        echo '<td>'.$fila['name_job'].'</td>';
                        echo '<td>'.$fila['first_name']." ".$fila['last_name_paternal']. " " .$fila['last_name_maternal'].'</td>';
                        echo '<td>'.$fila['email'].'</td>';
                        echo '<td>'.$fila['phone_number'].'</td>';
                        echo '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve='.$fila['id_user'].'"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                        echo '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve='.$fila['id_user'].'"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                    echo '</tr>';
                    $i++;
                } else {
                    echo '<tr class="rowTable">';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$fila['id_user'].'</td>';
                        echo '<td>'.$fila['username'].'</td>';
                        echo '<td>'.$fila['user_created'];
                        echo '<td>'.$fila['name_job'].'</td>';
                        echo '<td>'.$fila['first_name']." ".$fila['last_name_paternal']. " " .$fila['last_name_maternal'].'</td>';
                        echo '<td>'.$fila['email'].'</td>';
                        echo '<td>'.$fila['phone_number'].'</td>';
                        echo '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve='.$fila['id_user'].'"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                        echo '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve='.$fila['id_user'].'"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                    echo '</tr>';
                    $i++;
                    $rowControl += 2;
                }
            }
         ?>
</table>
<!--<script src="../../public/assets/js/get_list_users.js"></script> -->
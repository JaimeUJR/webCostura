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
                        echo '<td>'.$fila['id'].'</td>';
                        echo '<td>'.$fila['username'].'</td>';
                        echo '<td>'.$fila['create_at'];
                        echo '<td>'.$fila['user_type'].'</td>';
                        echo '<td>'.$fila['name_employee'].'</td>';
                        echo '<td>'.$fila['correo'].'</td>';
                        echo '<td>'.$fila['no_tel'].'</td>';
                        echo '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve='.$fila['id'].'"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                        echo '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve='.$fila['id'].'"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                    echo '</tr>';
                    $i++;
                } else {
                    echo '<tr class="rowTable">';
                        echo '<td>'.$i.'</td>';
                        echo '<td>'.$fila['id'].'</td>';
                        echo '<td>'.$fila['username'].'</td>';
                        echo '<td>'.$fila['create_at'];
                        echo '<td>'.$fila['user_type'].'</td>';
                        echo '<td>'.$fila['name_employee'].'</td>';
                        echo '<td>'.$fila['correo'].'</td>';
                        echo '<td>'.$fila['no_tel'].'</td>';
                        echo '<td class="deleteIcon"> <a href="../src/model/dropUser.php?cve='.$fila['id'].'"> <img src="../../public/assets/icons/delete.svg" alt="deleteIcon"> </a> </td>';
                        echo '<td class="uploadIcon"> <a href="./users.php?msj&control=3&cve='.$fila['id'].'"> <img src="../../public/assets/icons/upload.svg" alt="uploadIcon"> </a> </td>';
                    echo '</tr>';
                    $i++;
                    $rowControl += 2;
                }
            }
         ?>
</table>
<!-- 
<script src="../../public/assets/js/get_list_users.js"></script> -->
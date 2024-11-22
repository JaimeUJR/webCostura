<link rel="stylesheet" href="../../public/assets/css/nav_bars.css">

<script>
    try {
        const savedUser = JSON.parse(localStorage.getItem("user"))

        if (!savedUser) {
            window.location.href = "../login/login.html"
        } else {
            // console.log("Usuario recuperado del local storage:", savedUser)
            console.log("Sesión activa:", savedUser)
        }

    } catch (error) {
        console.error("Error al configurar la persistencia de la sesión:", error.message);
    }

    function closeSession() {
        localStorage.removeItem("user")
        window.location.reload()
    }
</script>

<header>
    <div class="headerContainers">
        <img id="LogoTaller" src="../../public/assets/img/LogoSinFondo.png" alt="LogoTaller">
    </div>

    <div class="headerContainers">
        <menu id="headerMenu">
            <li>
                <a href="../../index.php" class="menuLinks">Inicio</a>
            </li>
            <li>
                <a href="../customer/customer_view.php" class="menuLinks">Clientes</a>
            </li>
            <li>
                <a href="../employees/employees_view.php" class="menuLinks">Empleados</a>
            </li>
            <li>
                <a href="../supplier/supplier_view.php" class="menuLinks">Proveedores</a>
            </li>
            <li>
                <a href="../stock/stock_view.php" class="menuLinks">Inventario</a>
            </li>
            </li>
            <li>
                <a href="../service/services_view.php" class="menuLinks">Servicios</a>
            </li>
            </li>
            <li>
                <a href="../user/users_view.php" class="menuLinks">Usuarios</a>
            </li>
        </menu>
    </div>
    <div class="headerContainers">
        <img id="user_Icon" src="../../public/assets/icons/user_Icon.svg" alt="user_Icon">
        <button id="bntLoginOut" onclick="closeSession()">Cerrar Sesion</button>
    </div>
</header>
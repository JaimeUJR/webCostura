<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./public/assets/css/nav_bars.css">
    <link rel="stylesheet" href="./public/assets/css/wellcome.css">
    <script>
        try {
            const savedUser = JSON.parse(localStorage.getItem("user"))

            if (!savedUser) {
                window.location.href = "./views/login/login.html"
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <header>
        <div class="headerContainers">
            <img id="LogoTaller" src="./public/assets/img/LogoSinFondo.png" alt="LogoTaller">
        </div>
        <div class="barControl">
            <div class="headerContainers">
                <menu id="headerMenu">
                    <li>
                        <a href="#" class="menuLinks">Inicio</a>
                    </li>
                    <li>
                        <a href="./views/customer/customer_view.php" class="menuLinks">Clientes</a>
                    </li>
                    <li>
                        <a href="./views/employees/employees_view.php" class="menuLinks">Empleados</a>
                    </li>
                    <li>
                        <a href="./views/supplier/supplier_view.php" class="menuLinks">Proveedores</a>
                    </li>
                    <li>
                        <a href="./views/stock/stock_view.php" class="menuLinks">Inventario</a>
                    </li>
                    </li>
                    <li>
                        <a href="./views/service/services_view.php" class="menuLinks">Servicios</a>
                    </li>
                    </li>
                    <li>
                        <a href="./views/user/users_view.php" class="menuLinks">Usuarios</a>
                    </li>
                </menu>
            </div>
        </div>
        <div class="headerContainers">
            <img id="user_Icon" src="./public/assets/icons/user_Icon.svg" alt="user_Icon">
            <button id="bntLoginOut" onclick="closeSession()">Cerrar Sesion</button>
        </div>
    </header>

    <div class="div5050">
        <div class="sticky">
            <h1>Estadiscticas del ultimo mes...</h1>
            <img src="./public/assets/icons/welcome.svg" alt="working" class="msjIllustrator">
            <h1>¡Bienvenido!</h1>
            <p>Donde el arte de la confección se encuentra con la perfección.</p>
        </div>
        <div>
            <canvas id="pieChart"></canvas>
            <canvas id="barChart"></canvas>
            <!-- <canvas id="lineChart"></canvas> -->
        </div>
    </div>

    <script src="./public/assets/js/charts.js"></script>
</body>

</html>
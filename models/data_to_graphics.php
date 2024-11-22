<?php
include_once "../config/database.php";

$db = new DataBase();
$db = $db->set_connection();

// Datos para la gráfica de barras
$queryBarChart = "SELECT id_service, cost, extra_cost, (cost + extra_cost) AS cost_total FROM services LIMIT 10";
$statementBarChart = $db->prepare($queryBarChart);
$statementBarChart->execute();
$dataBarChart = $statementBarChart->get_result()->fetch_all(MYSQLI_ASSOC);

// Datos para la gráfica de pastel
$queryPieChart = "SELECT
    CONCAT(p.first_name, ' ', p.last_name_paternal) AS customer_name,
    COUNT(s.id_service) AS total_services
    FROM
        customers AS c
    INNER JOIN
        people AS p ON c.id_person = p.id_person
    LEFT JOIN
        services AS s ON c.id_customer = s.id_customer
    GROUP BY
        c.id_customer, customer_name
    ORDER BY
        total_services DESC
    LIMIT 10;
";
$statementPieChart = $db->prepare($queryPieChart);
$statementPieChart->execute();
$dataPieChart = $statementPieChart->get_result()->fetch_all(MYSQLI_ASSOC);

// Datos para la gráfica de líneas
$queryLineChart = "
    SELECT
        DATE(received_at) AS day,
        COUNT(CASE WHEN received_at IS NOT NULL THEN 1 END) AS total_received,
        COUNT(CASE WHEN delivery_at IS NOT NULL THEN 1 END) AS total_delivered
    FROM services
    WHERE DATE(received_at) IN ('2024-12-15', '2024-12-20', '2024-12-25', '2024-12-30', '2025-01-01')
    GROUP BY DATE(received_at)
    ORDER BY day ASC
";
$statementLineChart = $db->prepare($queryLineChart);
$statementLineChart->execute();
$dataLineChart = $statementLineChart->get_result()->fetch_all(MYSQLI_ASSOC);

// Combinar todos los datos en una respuesta JSON
$response = [
    "barChart" => $dataBarChart,
    "pieChart" => $dataPieChart,
    "lineChart" => $dataLineChart
];

// Enviar los datos como JSON
header('Content-Type: application/json');
echo json_encode($response);

fetch('./models/data_to_graphics.php')
    .then(response => response.json())
    .then(data => {

        // Gráfico de Pastel: Servicios por Cliente
        const pieData = {
            labels: data.pieChart.map(item => item.customer_name), // id_customer reales
            datasets: [
                {
                    data: data.pieChart.map(item => item.total_services), // Número de servicios por cliente
                    backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40"],
                },
            ],
        };

        const pieConfig = {
            type: "pie",
            data: pieData,
            options: {
                responsive: true,
                plugins: {
                    legend: { position: "top" },
                    title: { display: true, text: "Frecuencia de Servicios por Cliente" },
                },
            },
        };

        new Chart(document.getElementById("pieChart"), pieConfig);


        // Gráfico de Barras: Costos por Servicio
        const barData = {
            labels: data.barChart.map(item => `Servicio ${item.id_service}`), // id_service reales
            datasets: [
                {
                    label: "Costo",
                    data: data.barChart.map(item => item.cost), // Valores de cost
                    backgroundColor: "rgba(54, 162, 235, 0.5)",
                },
                {
                    label: "Costo Extra",
                    data: data.barChart.map(item => item.extra_cost), // Valores de extra_cost
                    backgroundColor: "rgba(255, 99, 132, 0.5)",
                },
                {
                    label: "Costo Total",
                    data: data.barChart.map(item => item.cost_total), // Suma de cost y extra_cost
                    backgroundColor: "rgba(75, 192, 192, 0.5)",
                },
            ],
        };

        const barConfig = {
            type: "bar",
            data: barData,
            options: {
                responsive: true,
                plugins: {
                    legend: { position: "top" },
                    title: { display: true, text: "Costos por Servicio" },
                },
            },
        };

        new Chart(document.getElementById("barChart"), barConfig);

        // Gráfico de Líneas: Servicios Recibidos y Entregados por Día
        const lineData = {
            labels: data.lineChart.map(item => item.day), // Fechas reales
            datasets: [
                {
                    label: "Servicios Recibidos",
                    data: data.lineChart.map(item => item.total_received), // Cantidad de servicios recibidos por día
                    borderColor: "rgba(54, 162, 235, 1)",
                    fill: false,
                },
                {
                    label: "Servicios Entregados",
                    data: data.lineChart.map(item => item.total_delivered), // Cantidad de servicios entregados por día
                    borderColor: "rgba(255, 99, 132, 1)",
                    fill: false,
                },
            ],
        };

        const lineConfig = {
            type: "line",
            data: lineData,
            options: {
                responsive: true,
                plugins: {
                    legend: { position: "top" },
                    title: { display: true, text: "Servicios Recibidos y Entregados por Día" },
                },
                scales: {
                    x: { title: { display: true, text: "Fecha" } },
                    y: { title: { display: true, text: "Cantidad de Servicios" } },
                },
            },
        };

       // new Chart(document.getElementById("lineChart"), lineConfig);


        console.log(data)
    })
    .catch(error => console.error('Error al obtener los datos:', error));

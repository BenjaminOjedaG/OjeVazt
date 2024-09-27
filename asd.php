<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos de Gráficas Chart.js</title>
    <script src="/Proyecto/Librerias/Chart.js/chart.umd.js"></script>
    <script src="/Proyecto/Librerias/jQuery/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div>
        <label for="fechainicio">Fecha de inicio:</label>
        <input type="date" name="fechainicio" id="fechainicio">
        <label for="fechafinal">Fecha final:</label>
        <input type="date" name="fechafinal" id="fechafinal">
        <button id="actualizarGraficas">Actualizar Gráficas</button>
    </div>

    <div style="width: 400px; margin: 20px auto;">
        <canvas id="PieChart"></canvas>
    </div>
    <div style="width: 400px; margin: 20px auto;">
        <canvas id="LineChart"></canvas>
    </div>

    <script>
        let pieChart, lineChart;

        function inicializarGraficas() {
            const ctxPie = document.getElementById('PieChart').getContext('2d');
            const ctxLine = document.getElementById('LineChart').getContext('2d');

            pieChart = new Chart(ctxPie, {
                type: 'pie',
                data: {
                    labels: ['Rojo', 'Azul', 'Amarillo', 'Verde', 'Morado'],
                    datasets: [{
                        data: [12, 19, 3, 5, 2],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Distribución de Colores'
                        }
                    }
                }
            });

            lineChart = new Chart(ctxLine, {
                type: 'line',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
                    datasets: [{
                        label: 'Ventas 2023',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Ventas Mensuales 2023'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function actualizarGraficas() {
            const fechaInicio = $('#fechainicio').val();
            const fechaFinal = $('#fechafinal').val();

            // Aquí normalmente harías una llamada AJAX para obtener nuevos datos
            // Por ahora, simularemos nuevos datos
            const nuevosDatosPie = [Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20];
            const nuevosDatosLinea = [Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100];

            pieChart.data.datasets[0].data = nuevosDatosPie;
            lineChart.data.datasets[0].data = nuevosDatosLinea;

            pieChart.update();
            lineChart.update();

            console.log(`Gráficas actualizadas con datos del ${fechaInicio} al ${fechaFinal}`);
        }

        $(document).ready(function() {
            inicializarGraficas();
            $('#actualizarGraficas').on('click', actualizarGraficas);
        });
    </script>
</body>
</html>
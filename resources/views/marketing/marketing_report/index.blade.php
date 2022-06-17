@extends('layouts.menu.marketing')
@section('content')
    <div class="page page-user">
        <div class="page-content">
            <div class="chart-container">
                <div class="pie-chart-container">
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            //get the pie chart canvas
            var cData = JSON.parse(`<?php echo $chart_data; ?>`);
            var ctx = $("#pie-chart");

            //pie chart data
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Marketing Report",
                    data: cData.data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            //options
            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Last Week Marketing Report Chart",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            //create Pie Chart class object
            var chart1 = new Chart(ctx, {
                type: "bar",
                data: data,
                options: options
            });

        });
    </script>
@endsection

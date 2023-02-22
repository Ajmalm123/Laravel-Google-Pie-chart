
<!doctype html>
<html lang="en">

<head>
    <title>Laravel 9 Google Pie Chart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container p-5">
        <h5>Laravel 9 Google Pie Chart</h5>

        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Month Name', 'Registered User Count'],
 
                @php
            foreach($pieChart as $d) {
                    echo "['".$d -> month_name."', ".$d -> count."],";
            }
            @endphp
        ]);

            var options = {
                title: 'Users Detail',
                is3D: false,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</body>

</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

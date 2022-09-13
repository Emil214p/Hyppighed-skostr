<?php
$con = mysqli_connect('localhost','aemk01_skp-dp_sd','q452zp4z','aemk01_skp_dp_sde_dk');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Skostørrelser</title>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([

                ['Skostørrelse'],
                <?php
                $query = "SELECT * from skostoerrelse";

                $exec = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($exec)){

                    echo "[".$row['Skostoerelse']."],";
                }
                ?>

            ]);

            var options = {
                title: 'Skostørrelser',
                pieHole: 0.5,
                pieSliceTextStyle: {
                    color: 'white',
                },
                legend: 'none'
            };
            var chart = new google.visualization.Histogram(document.getElementById("columnchart12"));
            chart.draw(data,options);
        }

    </script>

</head>
<body>
<div class="container-fluid">
    <div id="columnchart12" style="width: 100%; height: 500px;"></div>
</div>
      <p><a href="index.php">Start</a></p>
      <p><a href="statistik.php">Numre</a></p>
</body>
</html>
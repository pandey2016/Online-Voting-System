<html>
<head>
    <title>Site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<?php
include 'includes/dbconnection.php';
include 'includes/navbar.php';
$state=$_GET['state'];
?>
<div class="container">
    <h1 style="font-variant: all-small-caps;"><?php echo $state; ?></h1>
    <div class="row">
            <div class="col-md-12">
                <div id="piechart" style="height: 500px;"></div>
            </div>
            <div class="col-md-12">
                <div id="histChart" style="height: 500px;"></div>
            </div>
        </div>
</div>
<hr>
<?php include 'includes/footer.php'; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!-- JS for google charts -->
<script src="js/loader.js"></script>
<?php
    $q=mysqli_query($con, "SELECT * FROM `$state`") or die(mysqli_error($con));
    mysqli_num_rows($q);
    $party=array();
    $category=array();
/*
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
*/
    while($data=mysqli_fetch_array($q)) {
        array_push($party,$data['COL 6']);
        array_push($category,$data['COL 3']);
    }
    //var_dump($party);
    $graphCategoryData=array_count_values($category);
    $graphPartyData=array_count_values($party);
    //var_dump($graphCategoryData);
?>
<script type="text/javascript">
    //

    //
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Party', 'Vote Count'],
            <?php
            $other=0;
            foreach($graphPartyData as $partyName => $partyCount) {
                if($partyCount <= 1 ) {
                    $other++;
                }
                else {
                     echo "['$partyName', $partyCount],";
                }
            }
            echo "['Others', $other]";
            ?>
        ]);

        var options = {
            title: '2014 Election Data',
            pieHole: 0.4,
            //is3D: true
        };
        var histOptions = {
            title: '2014 Election Data',
            legend: { position: 'none' },
            colors: ['blue','green'],
            is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        var histChart = new google.visualization.ColumnChart(document.getElementById('histChart'));
        chart.draw(data, options);
        histChart.draw(data, histOptions);
    }
</script>

</body>
</html>

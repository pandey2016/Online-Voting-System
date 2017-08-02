<html>
<head>
    <title>Site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<?php
include 'includes/dbconnection.php';
include 'includes/navbar.php';
?>
<div class="container">
    <div class="row">
        <form method="GET" action="state.php">
            <div class="form-group">
                <label for="sel1">All States:</label>
                <select class="form-control" id="sel1" name="state">
                    <option value="">2014 - All State</option>
                    <option value="andaman nicobar">Andaman Nicobar</option>
                    <option value="andhra pradesh">Andhra Pradesh</option>
                    <option value="arunachal pradesh">Arunachal Pradesh</option>
                    <option value="assam">Assam</option>
                    <option value="bihar">Bihar</option>
                    <option value="chandigarh">Chandigarh</option>
                    <option value="chattisgarh">Chattisgarh</option>
                    <option value="dadar & nagar haveli">Dadar Nagar & Haveli</option>
                    <option value="daman & diu">Daman & Diu</option>
                    <option value="delhi">Delhi</option>
                    <option value="goa">Goa</option>
                    <option value="gujrat">Gujrat</option>
                    <option value="haryana">Haryana</option>
                    <option value="himachal pradesh">Himachal Pradesh</option>
                    <option value="jammu & kashmir">Jammu and Kashmir</option>
                    <option value="jharkand">Jharkhand</option>
                    <option value="karnataka">Karnataka</option>
                    <option value="kerala">Kerla</option>
                    <option value="lakshadeep">Lakshadeep</option>
                    <option value="madhya pradesh">Madhya Pradesh</option>
                    <option value="maharastra">Maharashtra</option>
                    <option value="manipur">Manipur</option>
                    <option value="meghalaya">Meghalaya</option>
                    <option value="mizoram">Mizoram</option>
                    <option value="nagaland">Nagaland</option>
                    <option value="orissa">Orissa</option>
                    <option value="pondicherry">Pondicherry</option>
                    <option value="punjab">Punjab</option>
                    <option value="rajasthan">Rajasthan</option>
                    <option value="sikkim">Sikkim</option>
                    <option value="tamil nadu">Tamil Naidu</option>
                    <option value="telangana">Telangana</option>
                    <option value="tripura">Tripura</option>
                    <option value="uttarakand">Uttarakhand</option>
                    <option value="uttar pradesh">Uttar Pradesh</option>
                    <option value="west bengal">West Bengal</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
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
$q=mysqli_query($con, "SELECT * FROM `2014`") or die(mysqli_error($con));
mysqli_num_rows($q);
$party=array();
$category=array();
/*
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
*/
$dataArray = array();
while($data=mysqli_fetch_array($q)) {
    $dataArray[] = $data;
    array_push($party,$data['COL 6']);
    array_push($category,$data['COL 3']);
}
echo json_encode($dataArray);
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
                if($partyCount <= 5 ) {
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

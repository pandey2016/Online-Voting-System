
<html>
<head>
    <title>Site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script>

<?php
if(isset($_GET['msg'])) {
    $val=$_GET['msg'];
    echo "alert('$val');";
}
?>
</script>
<style>
    .cirTab {
        border: 1px solid #221ac2; border-radius: 50%; height: 250px; width: 250px; padding-top: 55px; font-size: 50px;
    }
	.box {
		border: 1px solid black;
		height: 500px;
		text-align: center;
		padding-top: 100px;
		color: blue;
</style>
<?php include 'includes/navbar.php'; ?>
<div class="container">
    <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 box">
			<h1>Voter Details</h1>
			<h2>Enter Voter Id</h2>
			<form class="form" action="detail.php" method='GET'>
			  <div class="form-group">
				<input type="text" class="form-control" id="voterid" name="id" placeholder="Enter Voter Id" autofocus>
			  </div>
			  <button type="submit" class="btn btn-default">Confirm identity</button>
			</form>
			
		</div>

    </div>

</div>
<hr>
<?php include 'includes/footer.php'; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<html>
<head>
    <title>Site</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    .cirTab {
        border: 1px solid #221ac2; border-radius: 50%; height: 250px; width: 250px; padding-top: 55px; font-size: 50px;
    }
</style>
<?php include 'includes/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slide1.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide2.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

                <div class="item">
                    <img src="images/slide3.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
    </div>
    <div class="row" align="center">
        <div class="col-md-4" >
            <div class="cirTab"> <a href="analysis.php"><span class="glyphicon glyphicon-stats"></span><br>Analysis</a></div>
        </div>
        <div class="col-md-4">
            <div class="cirTab"> <a href="register.php"><span class="glyphicon glyphicon-registration-mark"></span><br>Register</a></div>
        </div>
        <div class="col-md-4">
            <div class="cirTab"> <a href="conduct.php"><span class="glyphicon glyphicon-check"></span><br>Conduct</a></div>
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

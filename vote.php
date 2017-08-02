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
	.box {
		border: 1px solid black;
		min-height: 520px;
		text-align : cente;
		
		padding-top: 1px;
		}
		.button {
    background-color: #4CAF50;
    border-radius: 2px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 1px 1px;
    cursor: pointer;
    }
		
</style>
<?php include 'includes/navbar.php'; ?>
<div class="container">
    <div class="row">
		<div class="col-md-12 box">
			<div class="row" align="center">
			<div class="col-md-12" >
			<h3>E-Voting Machine</h3>
                <form>
                    <TABLE  width="400" border="2" cellspacing="" cellpadding="">
                      <TR>
                        <TD><img src="images/BJP.jpg" style="width:125px;height:125px;" > </TD>
                        <TD><big>BJP</big> </TD>
                        <TD><button class="button">Vote</button>
                    </TD>
                      </TR>
                      <TR>
                        <TD><img src="images/INC.jpg" style="width:170px;height:125px;" > </TD>
                        <TD><big>INC</big> </TD>
                        <TD><button class="button">Vote</button>
                      </TR>
                       <TR>
                        <TD><img src="images/AAP.jpg" style="width:170px;height:125px;" > </TD>
                        <TD><big>AAP</big> </TD>
                        <TD><button class="button">Vote</button>
                      </TR>
                       <TR>
                        <TD><img src="images/NOTA.jpg" style="width:170px;height:125px;" > </TD>
                        <TD><big>NOTA</big> </TD>
                        <TD><button class="button">Vote</button>
                      </TR>

                    </TABLE>
                </form>
</div>
		</div>
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

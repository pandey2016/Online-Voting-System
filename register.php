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
		min-height: 500px;
		text-align: center;
		padding-top: 0px;
		color: blue;
	}
	.wrap {
        color: black;
        text-align: left;
	}
</style>
<?php include 'includes/navbar.php'; ?>
<div class="container">
    <div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 box">
			<h1>Registration Details</h1>
			<form class="form-horizontal wrap" role="form" action="entry.php" method="GET">

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Voter's Name">
                </div>
              </div>

              <div class="form-group">
                <label for="father_name" class="col-sm-2 control-label">Father Name</label>
                <div class="col-sm-10">
                  <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Father's Name">
                </div>
              </div>

              <div class="form-group">
                <label for="mother_name" class="col-sm-2 control-label">Mother Name</label>
                <div class="col-sm-10">
                  <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Mother's Name">
                </div>
              </div>

              <div class="form-group">
                <label for="addr" class="col-sm-2 control-label">Address </label>
                <div class="col-sm-10">
                  <input type="text" name="addr" class="form-control" id="addr" placeholder="Address of Voter">
                </div>
              </div>

              <div class="form-group">
                <label for="addr" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                      <input type="radio" name="gender" id="gender" value="Male">Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="gender" id="gender" value="Female">Female
                    </label>
                </div>
              </div>

              <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age </label>
                <div class="col-sm-10">
                  <input type="number" name="age" class="form-control" id="age" placeholder="Age of Voter">
                </div>
              </div>

              <div class="form-group">
                <label for="dob" class="col-sm-2 control-label">Date Of Birth</label>
                <div class="col-sm-10">
                  <input type="date" name="dob" class="form-control" id="dob" placeholder="Date Of Birth">
                </div>
              </div>

              <div class="form-group">
                <label for="pin" class="col-sm-2 control-label">Pincode</label>
                <div class="col-sm-10">
                  <input type="number" name="pin" class="form-control" id="pin" placeholder="Pincode of area">
                </div>
              </div>

              <div class="form-group">
                <label for="aadhar" class="col-sm-2 control-label">Aadhar No.</label>
                <div class="col-sm-10">
                  <input type="number" name="aadhar" class="form-control" id="aadhar" placeholder="Enter your Aadhar Number">
                </div>
              </div>

              <div class="form-group">
                <label for="district" class="col-sm-2 control-label">District</label>
                <div class="col-sm-10">
                  <input type="text" name="district" class="form-control" id="district" placeholder="District">
                </div>
              </div>

              <div class="form-group">
                <label for="vidhan" class="col-sm-2 control-label">Vidhan Sabha</label>
                <div class="col-sm-10">
                  <input type="text" name="vidhan" class="form-control" id="vidhan" placeholder="Vidhan Sabha Seat">
                </div>
              </div>

              <div class="form-group">
                <label for="lok" class="col-sm-2 control-label">Lok Sabha</label>
                <div class="col-sm-10">
                  <input type="text" name="lok" class="form-control" id="lok" placeholder="Lok Sabha Seat">
                </div>
              </div>

              <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div class="col-sm-10">
                  <select class="form-control" id="state" name="state">
                      <option value="" disabled>States</option>
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
              </div>

              <div class="form-group text-center">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-info">Register</button>
                </div>
              </div>
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

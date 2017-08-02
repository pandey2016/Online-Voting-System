<?php

include 'includes/dbconnection.php';
echo $id=uniqid();
echo $name = $_GET['name'];
echo $father_name = $_GET['father_name'];
echo $mother_name = $_GET['mother_name'];
echo $addr = $_GET['addr'];
echo $gender = $_GET['gender'];
echo $age = $_GET['age'];
echo $dob = $_GET['dob'];
echo $pin = $_GET['pin'];
echo $aadhar = $_GET['aadhar'];
echo $district = $_GET['district'];
echo $vidhan = $_GET['vidhan'];
echo $lok = $_GET['lok'];
echo $state = $_GET['state'];

$q=mysqli_query($con,"INSERT INTO details(id, name, father_name, mother_name, addr, gender, age, dob, pin, aadhar, district, vidhan, lok, state) VALUES ('$id', '$name', '$father_name', '$mother_name', '$addr', '$gender', '$age', '$dob', '$pin', '$aadhar', '$district', '$vidhan', '$lok', '$state')");
header("location:detail.php?id=$id&reg=1");
echo (mysqli_error($con));
?>
<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

$con = mysqli_connect($host,$username,$password,$dbname);

$adharNumber = $_POST['adharNumber'];
$collegeName = $_POST['collegeName'];
$collegeID = $_POST['collegeID'];
$courseName = $_POST['courseName'];
$durationInYears = $_POST['durationInYears'];
$seatType = $_POST['seatType'];
$fees = $_POST['fees'];

$a = "INSERT INTO CollegeEnrollment (AdharNumber, CollegeName, CollegeID, CourseName, DurationInYears, SeatType, Fees)
    VALUES ('$adharNumber', '$collegeName', '$collegeID', '$courseName', '$durationInYears', '$seatType', '$fees')";

$query_1 = mysqli_query($con, $a);

if($query_1) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Data didn't inserted')</script>";
}
?>

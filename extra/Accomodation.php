<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

$con = mysqli_connect($host,$username,$password,$dbname);

$adharNumber = $_POST['adharNumber'];
$accommodationType = $_POST['accommodationType'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$guardianPhone = $_POST['guardianPhone'];

$a = "INSERT INTO StudentAccommodation (AdharNumber, AccommodationType, Address, Pincode, GuardianPhone)
    VALUES ('$adharNumber', '$accommodationType', '$address', '$pincode', '$guardianPhone')";

$query_1 = mysqli_query($con, $a);

if($query_1) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Data didn't inserted')</script>";
}
?>

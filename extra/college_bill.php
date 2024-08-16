<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

$con = mysqli_connect($host,$username,$password,$dbname);

$adharNumber = $_POST['adharNumber'];
$status = $_POST['status'];
$amountPaid = $_POST['amountPaid'];
$pendingAmount = $_POST['pendingAmount'];
$dateOfPayment = $_POST['dateOfPayment'];

$a = "INSERT INTO CollegeBill (AdharNumber, Status, AmountPaid, PendingAmount, DateOfPayment)
    VALUES ('$adharNumber', '$status', '$amountPaid', '$pendingAmount', '$dateOfPayment')";

$query_1 = mysqli_query($con, $a);

if($query_1) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Data didn't inserted')</script>";
}
?>

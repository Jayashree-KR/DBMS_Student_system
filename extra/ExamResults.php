<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

$con = mysqli_connect($host,$username,$password,$dbname);

$adharNumber = $_POST['adharNumber'];
$examType = $_POST['examType'];
$eRank = $_POST['eRank'];

$a = "INSERT INTO ExamResults (AdharNumber, ExamType, ERank)
    VALUES ('$adharNumber', '$examType', '$eRank')";

$query_1 = mysqli_query($con, $a);

if($query_1) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Data didn't inserted')</script>";
}
?>

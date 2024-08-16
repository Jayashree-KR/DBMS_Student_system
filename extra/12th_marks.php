<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

$con = mysqli_connect($host,$username,$password,$dbname);

$adharNumber = $_POST['adharNumber'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$totalMarks = $_POST['totalMarks'];
$maximumMarks = $_POST['maximumMarks'];

$a = "INSERT INTO TwelveMarks (AdharNumber, Subject1, Subject2, Subject3, TotalMarks, MaximumMarks)
    VALUES ('$adharNumber', '$subject1', '$subject2', '$subject3', '$totalMarks', '$maximumMarks')";

$query_1 = mysqli_query($con, $a);

if($query_1) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Data didn't inserted')</script>";
}
?>

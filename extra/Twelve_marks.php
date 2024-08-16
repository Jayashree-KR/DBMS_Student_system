<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

// Establish connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
Insert into TwelveMarks table
$adharNumber = mysqli_insert_id($con); // Get the auto-generated AdharNumber from the last insert operation

$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$totalMarks = $_POST['totalMarks'];
$maximumMarks = $_POST['maximumMarks'];

$sql_twelve_marks = "INSERT INTO TwelveMarks (AdharNumber, Subject1, Subject2, Subject3, TotalMarks, MaximumMarks) 
                    VALUES ('$adharNumber', '$subject1', '$subject2', '$subject3', '$totalMarks', '$maximumMarks')";

if (mysqli_query($con, $sql_twelve_marks)) {
    echo "New record created successfully in TwelveMarks table. ";
} else {
    echo "Error: " . $sql_twelve_marks . "<br>" . mysqli_error($con);
}
// Close connection
mysqli_close($con);
?>

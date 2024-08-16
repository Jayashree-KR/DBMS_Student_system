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

// Insert into Students table
$name = $_POST['name'];
$fathersName = $_POST['fathersName'];
$mothersName = $_POST['mothersName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$religion = $_POST['religion'];
$caste = $_POST['caste'];
$emailID = $_POST['emailID'];
$state = $_POST['state'];
$studyPlace = $_POST['studyPlace'];
$study10Medium = $_POST['study10Medium'];
$adharNumber = $_POST['adharNumber'];
$phoneNumber = $_POST['phoneNumber'];

$sql_students = "INSERT INTO Students (AdharNumber, Name, FathersName, MothersName, DOB, Gender, Category, Religion, Caste, EmailID, State, StudyPlace, Study10Medium, PhoneNumber) 
               VALUES ('$adharNumber', '$name', '$fathersName', '$mothersName', '$dob', '$gender', '$category', '$religion', '$caste', '$emailID', '$state', '$studyPlace', '$study10Medium', '$phoneNumber')";

$query_1 = mysqli_query($con,$sql_students);

if($query_1) {
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.location.href = 'twelve.html';</script>";
} else {
    echo "<script>alert('Data didn't inserted')</script>";
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
?>

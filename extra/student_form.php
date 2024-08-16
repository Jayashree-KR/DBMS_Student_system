<?php 
    $host = 'localhost';
    $dbname = 'studentdb';
    $username = 'root';
    $password = 'sinchu_123';
    

    $name = $_POST['name'];
    $fathersName = $_POST['fathersName'];
    $mothersName = $_POST['mothersName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $emailID = $_POST['em'];
    $state = $_POST['state'];
    $studyPlace = $_POST['studyPlace'];
    $study10Medium = $_POST['study10Medium'];
    $adharNumber = $_POST['adharNumber'];
    $phoneNumber = $_POST['phoneNumber'];

    $con = mysqli_connect($host,$username,$password,$dbname);
    $a = "INSERT INTO students (AdharNumber, Name, FathersName, MothersName, DOB, Gender, Category, Religion, Caste, EmailID, State, StudyPlace, Study10Medium, PhoneNumber)
                        VALUES ('$adharNumber','$name','$fathersName','$mothersName','$dob','$gender','$category','$religion','$caste','$emailID','$state','$studyPlace','$study10Medium','$phoneNumber')";

    $query_1 = mysqli_query($con,$a);

    
    if($query_1) {
        echo "<script>alert('Data inserted successfully')</script>";
        echo "<script>window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Data didn't inserted')</script>";
    }
    
    
?>

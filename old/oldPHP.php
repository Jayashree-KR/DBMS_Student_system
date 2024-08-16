<?php 
    ob_start(); 
    require 'connection.php';

    // Student Details
    $name = $_POST['name'];
    $fathersName = $_POST['fathersName'];
    $mothersName = $_POST['mothersName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $adharNumber = $_POST['adharNumber'];
    $emailID = $_POST['emailID'];
    $state = $_POST['state'];
    $studyPlace = $_POST['studyPlace'];
    $study10Medium = $_POST['study10Medium'];
    $phoneNumber = $_POST['phoneNumber'];

    $query_1 = mysqli_query($con, "INSERT INTO `students` VALUES (
        NULL, 
        '$name',
        '$fathersName',
        '$mothersName',
        '$dob',
        '$gender',
        '$category',
        '$religion',
        '$caste',
        '$adharNumber',
        '$emailID',
        '$state',
        '$studyPlace',
        '$study10Medium',
        '$phoneNumber')"
    );

    

    // Assuming you have the StudentID available after insertion into the Students table
    $studentID = mysqli_insert_id($con);

    // TwelveMarks
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $totalMarks = $_POST['totalMarks'];
    $maximumMarks = $_POST['maximumMarks'];

    $query_2 = mysqli_query($con, "INSERT INTO `TwelveMarks` VALUES (
        '$studentID', 
        '$subject1',
        '$subject2',
        '$subject3',
        '$totalMarks',
        '$maximumMarks')"
    );

    // TenMarks
    // Similar to TwelveMarks insertion, assuming you have the necessary data to insert.

    // CollegeEnrollment
    // Assuming you have the necessary data to insert.

    // StudentAccommodation
    // Assuming you have the necessary data to insert.

    // CollegeBill
    // Assuming you have the necessary data to insert.

    // ExamResults
    // Assuming you have the necessary data to insert.

    echo '<script>alert("Submission Successful"); location.replace(document.referrer);</script>';
    
?>

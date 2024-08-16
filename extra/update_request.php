<?php

    $host = 'localhost';
    $dbname = 'studentdb';
    $username = 'root';
    $password = 'sinchu_123';

    $con = mysqli_connect($host,$username,$password,$dbname);

        $editId = $_POST["editId"];
                    
        $name = $_POST['name'];
        $fathersName = $_POST['fathersName'];
        $mothersName = $_POST['mothersName'];
        $dob = $_POST['dob'];
        //$gender = $_POST['gender'];
        $category = $_POST['category'];
        $religion = $_POST['religion'];
        $caste = $_POST['caste'];
        $emailID = $_POST['emailID'];
        $state = $_POST['state'];
        //$studyPlace = $_POST['studyPlace'];
        $study10Medium = $_POST['study10Medium'];
        $adharNumber = $_POST['adharNumber'];
        $phoneNumber = $_POST['phoneNumber'];
        $urs = "UPDATE students SET Name='$name',FathersName='$fathersName',MothersName='$mothersName', DOB='$dob',Category='$category', Religion='$religion', Caste='$caste', EmailID='$email', State='$state',Study10Medium='$study10Medium',AdharNumber='$adharNumber', PhoneNumber='$phone' WHERE AdharNumber=$editId ";
        $ur = mysqli_query($con,$urs) ;  
        if($ur) {
            echo "<script>alert('Data updated successfully')</script>";
            echo "<script>window.location.href = 'admin_view.php';</script>";
        } else {
            echo "<script>alert('Data didn't inserted')</script>";
        }
        
?>
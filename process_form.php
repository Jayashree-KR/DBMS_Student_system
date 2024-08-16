<?php
// Include the database connection code
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle personal details form
    if (isset($_POST["name"])) {
        // Retrieve data from the form
        $name = $_POST["name"];
        $fathersName = $_POST["fathersName"];
        $mothersName = $_POST["mothersName"];
        $dob = $_POST["dob"];
        // ... (Retrieve other form fields)

        try {
            // Perform database insertion for the "Students" table
            $sql = "INSERT INTO Students (Name, FathersName, MothersName, DOB, Gender, Category, Religion, Caste, AdharNumber, EmailID, State, StudyPlace, Study10Medium, PhoneNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // Prepare and execute the SQL query
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name, $fathersName, $mothersName, $dob, $gender, $category, $religion, $caste, $adharNumber, $email, $state, $studyPlace, $study10Medium, $phoneNumber]);

            // Retrieve the auto-generated ID from the last insertion
            $studentID = $pdo->lastInsertId();

            // Continue inserting data into other related tables (TwelveMarks, TenMarks, CollegeEnrollment, etc.)
            // ... (Insert data into other tables)

            // Redirect to the next page or display a success message
            header("Location: next_page.php");
            exit();
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
    }

    // Handle other form submissions similarly for different form sections (TwelveMarks, TenMarks, etc.)
}
?>

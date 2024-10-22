<?php 
include 'database.php';

if (isset($_POST['add_student'])) {
    $roll = $_POST['roll'];
    $fullName = $_POST['fullName'];
    $shift = $_POST['shift'];
    $s1 = $_POST['1st'];
    $s2 = $_POST['2nd'];
    $s3 = $_POST['3rd'];
    $s4 = $_POST['4th'];
    $s5 = $_POST['5th'];
    $s6 = $_POST['6th'];
    $s7 = $_POST['7th'];
    $s8 = $_POST['8th'];
    $overall = $_POST['Overall CGPA'];

    if (empty($roll)) {
        header('Location: index.php?message=You need to fill Roll');
        exit();
    } else {
        // Prepare the SQL statement
        $query = "INSERT INTO `result_sheet` (`Roll No`, `Full Name`, `Shift`, `1st Semister`, `2nd Semister`, `3rd Semister`, `4th Semister`, `5th Semister`, `6th Semister`, `7th Semister`, `8th Semister`, `Overall CGPA`) 
                  VALUES ('$roll', '$fullName', '$shift', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$overall')";
        
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($connection));
        } else {
            header('Location: index.php?insert_msg=Your data has been added successfully');
            exit();
        }
    }   
}
?>
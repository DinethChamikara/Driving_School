<?php

require_once "../Database/connection.php";

$first_name = $_POST['First_Name'];
$last_name = $_POST['Last_Name'];
$birth_date = $_POST['DOB'];
$nic_number = $_POST['NIC'];
$gender = $_POST['Gender'];
$tel_1 = $_POST['tel'];
$tel_2 = $_POST['tel-2'];
$email = $_POST['email'];
$course = $_POST['package'];
$date = $_GET['date'];

$sql = "INSERT INTO `students-tempory`(`First_Name`,
                                       `Last_Name`,
                                       `Tel_Number`,
                                       `Mobile_Number`,
                                       `D.O.B.`,
                                       `NIC_Number`,
                                       `Email_Address`,
                                       `Course_code`,
                                       `Gender`,
                                       `Requested_Date`,
                                       `status`) VALUES 
                                    ('$first_name',
                                     '$last_name',
                                     '$tel_1',
                                     '$tel_2',
                                     '$birth_date',
                                     '$nic_number',
                                     '$email',
                                     '$course',
                                     '$gender',
                                     '$date',
                                     'Pending')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close MySQL connection
$conn->close();
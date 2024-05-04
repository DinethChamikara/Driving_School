<?php

require_once "../Database/connection.php";

$id = $_GET['id'];
$first_name = $_POST['first'];
$last_name = $_POST['last'];
$birth_date = $_POST['dob'];
$nic_number = $_POST['nic'];
$gender = $_POST['gender'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$course = $_POST['package'];
$batch = $_POST['batch'];
$date = $_GET['date'];


$sql = "INSERT INTO `students`(`First_Name`, 
                                `Last_Name`, 
                                `D.O.B.`, 
                                `Gender`, 
                                `NIC_Number`, 
                                `Contact_Number`, 
                                `Email_Address`, 
                                `Registered_Date`) VALUES 
                            ('$first_name',
                            '$last_name',
                            '$birth_date',
                            '$gender',
                            '$nic_number',
                            '$tel',
                            '$email',
                            '$date');";

$sql .= "INSERT INTO `student_course`(`Student_id`,
                              `Course_code`,
                              `Batch_id`,
                              `Entered_Date`) VALUES
                             ('$id',
                              '$course',
                              '$batch',
                              '$date');";

$sql .= "UPDATE `students-tempory` SET `status` = 'Accepted' WHERE `students-tempory`.`id` = '$id';";                              


if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close MySQL connection
$conn->close();






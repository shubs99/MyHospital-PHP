<?php
// Replace with your database connection details
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'hospital';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$patientName = $_POST['patientName'];
$patientMobile = $_POST['patientMobile'];
$gender = $_POST['gender'];
$age = $_POST['age']; 
$doctor = $_POST['doctor'];
$appointmentDate = $_POST['appointmentDate'];

// Insert data into app_info table
$sql = "INSERT INTO app_info (patient_name, patient_mobile, gender, age, select_doctor, appointment_date)
        VALUES ('$patientName', '$patientMobile', '$gender', '$age', '$doctor', '$appointmentDate')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

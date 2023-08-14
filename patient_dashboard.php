<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Patient Dashboard</title>
</head>
<body>
    <div class="container mt-5">
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

        // Fetch patient data from app_info table
        $patient_name = 'patient_name'; // 
        $patientSql = "SELECT patient_name, age, gender, appointment_date, select_doctor FROM app_info WHERE patient_name = $patient_name";
        $patientResult = $conn->query($patientSql);

        if ($patientResult->num_rows > 0) {
            $patientRow = $patientResult->fetch_assoc();
            echo '<h2>Hello ' . $patientRow['patient_name'] . ' !</h2>';
            echo '<div class="card mb-4">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Patient Information</h5>';
            echo '<p class="card-text">Name: ' . $patientRow['patient_name'] . '</p>';
            echo '<p class="card-text">Age: ' . $patientRow['age'] . '</p>';
            echo '</div>';
            echo '</div>';
        }

        // Display patient information table
        echo '<h3>Patient Information</h3>';
        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Patient Name</th>';
        echo '<th>Gender</th>';
        echo '<th>Appointment Date</th>';
        echo '<th>Doctor Name</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr>';
        echo '<td>' . $patientRow['patient_name'] . '</td>';
        echo '<td>' . $patientRow['gender'] . '</td>';
        echo '<td>' . $patientRow['appointment_date'] . '</td>';
        echo '<td>' . $patientRow['select_doctor'] . '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

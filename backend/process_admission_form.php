<?php
require_once "config.php";

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Retrieve form data from $_POST superglobal and sanitize it
$name = sanitizeInput($_POST['name']);
$fathersName = sanitizeInput($_POST['fathers_name']);
$qualification = sanitizeInput($_POST['qualification']);
$dob = sanitizeInput($_POST['dob']);
$address = sanitizeInput($_POST['adress']);
$mobileNo = sanitizeInput($_POST['mobile_no']);
$parentMobile = sanitizeInput($_POST['parent_mobile']);
$gender = sanitizeInput($_POST['gender']);

// Function to execute prepared statement with retry mechanism
function executePreparedStatement($stmt) {
    $retryLimit = 3; // Set the number of retries
    $retryCount = 0;

    while ($retryCount < $retryLimit) {
        try {
            // Attempt to execute the statement
            if ($stmt->execute()) {
                echo '<div class="alert success">
                        <h2>Admission form submitted successfully</h2>
                    </div>';
                return true; // Successful execution
            } else {
                echo '<div class="alert error">
                        <h2>Error: ' . $stmt->error . '</h2>
                    </div>';
                return false; // Error during execution
            }
        } catch (mysqli_sql_exception $e) {
            // Retry if MySQL server has gone away
            if ($e->getCode() == 2006) { // MySQL server has gone away error code
                $retryCount++;
                echo '<div class="alert error">
                        <h2>Connection lost. Retrying...</h2>
                    </div>';
                continue;
            } else {
                // Other exceptions
                throw $e;
            }
        }
    }

    echo '<div class="alert error">
            <h2>Failed to execute statement after retrying.</h2>
        </div>';
    return false;
}

// Prepare and bind the SQL query using prepared statements
$stmt = $conn->prepare("INSERT INTO course_registrations (name, fathers_name, qualification, dob, address, mobile_no, parent_mobile, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $fathersName, $qualification, $dob, $address, $mobileNo, $parentMobile, $gender);

// Execute the query with retry mechanism
executePreparedStatement($stmt);

// Close the statement and database connection
$stmt->close();
$conn->close();
?>

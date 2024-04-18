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
$email = sanitizeInput($_POST['email']);
$message = sanitizeInput($_POST['message']);

// Prepare and bind the SQL query using prepared statements
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Function to execute prepared statement with retry mechanism
function executePreparedStatement($stmt) {
    $retryLimit = 3; // Set the number of retries
    $retryCount = 0;

    while ($retryCount < $retryLimit) {
        try {
            // Attempt to execute the statement
            if ($stmt->execute()) {
                echo '<div class="alert success">
                        <h2>Message submitted successfully</h2>
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

// Execute the query with retry mechanism
executePreparedStatement($stmt);

// Close the statement and database connection
$stmt->close();
$conn->close();
?>

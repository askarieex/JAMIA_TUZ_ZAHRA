<?php
include 'backend/config.php';
session_start();
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['amount'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $status = "pending";
    
    $sql = "INSERT INTO `payments` (`name`, `email`,`status`, `amount`) VALUES ('$name','$email','$status', '$amount')";
    if ($conn->query($sql) === TRUE) {
        echo "200";
        $_SESSION['amount']=$amount;
    } else {
        echo "800";
    }

    $sql = "SELECT * FROM payments WHERE `name`='$name'";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['OID']=$row["id"];
            }
        } else {
            echo "800";
        }
        $result->close();
    }

    


    
}
if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){

    $payment_id = $_POST['payment_id'];
    $pid= $_SESSION['OID'];


    $sql="UPDATE `payments` SET `payment_id` = '$payment_id',`status`='complete' WHERE `id` = '$pid'";


    

    if ($conn->query($sql) === TRUE) {
        echo "".$payment_id.",200,".$_SESSION['amount']."";
    } else {
        echo "800";
    }
    
}



?>
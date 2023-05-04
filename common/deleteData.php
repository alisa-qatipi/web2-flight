<?php
// require the configuration file
require_once "./config.php";

// start the function according to the variable
if (isset($_POST['reservationID'])) {
    // get the reservationID variable
    $reservationID = $_POST["reservationID"];

    // the sql statement to delete the reservation with that id
    $sql = "DELETE FROM reservations WHERE reservationID = '$reservationID'";

    // what to display if the action was successful or not
    if (mysqli_query($link, $sql)) {
        // echo "$reservationID deleted successfully.";
        header('location: ../bookings.php');
     
    } else {
        echo "Could not be able to execute $sql. " . mysqli_error($link);
    }

} else {
    // show if there is no reservation with that id
    echo "No reservationID received.";
}

if (isset($_POST['userID'])) {
    // get the userID variable
    $userID = $_POST["userID"];

    // the sql statement to delete the reservation with that id
    $sql = "DELETE FROM reservations WHERE userID = '$userID'";

    // what to display if the action was successful or not
    if (mysqli_query($link, $sql)) {
        // echo "$userID deleted successfully.";
        header('location: ../bookings.php');
     
    } else {
        echo "Could not be able to execute $sql. " . mysqli_error($link);
    }

} else {
    // show if there is no reservation with that id
    echo "No userID received.";
}


mysqli_close($link);



?>
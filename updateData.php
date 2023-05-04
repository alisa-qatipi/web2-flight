<html>

<head>
    <title>update</title>
    <link rel="stylesheet" href="./style/update.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/navbar2.css">
    <!-- <script src="../js/reservation.js"></script> -->
</head>

<body onload="loading()">

    <?php include("common/navbar.php"); ?>
    <?php

    // require the configuration file
    require_once "./common/config.php";

    // start the function according to the variable
    if (isset($_POST['reservationID'])) {
        // get the reservationID variable
        $reservationID = $_POST["reservationID"];


        // the sql statement to delete the reservation with that id
        $sql = "SELECT * FROM reservations WHERE reservationID = '$reservationID'";

        // what to display if the action was successful or not
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<h1>The selected reservation:</h1> <br>";
                while ($row = mysqli_fetch_array($result)) {
                    $fare_choices = array('one-way', 'round-trip');
                    $departure_locations = array('Tirana', 'Pristina', 'Rome', 'Berlin', 'Paris', 'Zagreb');
                    $arrival_locations = array('Tirana', 'Pristina', 'Rome', 'Berlin', 'Paris', 'Zagreb');
                    $adults_number = array(1, 2, 3, 4, 5);
                    $children_number = array(1, 2, 3, 4, 5);
                    $infants_number = array(1, 2, 3, 4, 5);
                    echo "
                <div class='booking-form'>
                    <form action='updating.php' method='post'>
                    <input type='hidden' name='reservationID' value='" . $row['reservationID'] . "'</input>
                    <select class='form-control' id='fares' name='fare_choice' required>
                    <option value=''>Fare Choice</option>
                    ";
                    foreach ($fare_choices as $choices) {
                        $selected = $row['fare_choice'] == $choices ? 'selected' : '';
                        echo "<option value='$choices' $selected>$choices</option>";
                    }
                    echo "
                </select>
                    <div class='doubleRow'>
                            <div class='doubleInput'>
                                <select class='form-control' id='departureLocation' name='departure_location' required>
                                    <option value=''>From</option>
                                    ";
                    foreach ($departure_locations as $location) {
                        $selected = $row['departure_location'] == $location ? 'selected' : '';
                        echo "<option value='$location' $selected>$location</option>";
                    }
                    echo "
						        </select>
                            </div>
                            <div class='doubleInput'>
                                <select class='form-control' id='arrivalLocation' name='arrival_location' required>
                                    <option value=''>To</option>
                                    ";
                    foreach ($arrival_locations as $location) {
                        $selected = $row['arrival_location'] == $location ? 'selected' : '';
                        echo "<option value='$location' $selected>$location</option>";
                    }
                    echo "
						        </select>
                            </div>
                        </div>
                        <div class='doubleRow'>
                            <div class='doubleInput'>
                                <input id='departureDate' class='datepicker' name='departure_date' type='date' placeholder='Departure Date' value='" . $row['departure_date'] . "' min='" . $row['departure_date'] . "' required>   
                            </div>
                            <div class='doubleInput'>
                                <input id='returnDate' class='datepicker' name='return_date' type='date' placeholder='Departure Date' value='" . $row['return_date'] . "' min='" . $row['departure_date'] . "'>    
                            </div>
                        </div>
                        <div class='passengerData'>
                            <div class='passenger'>
                                <select class='form-control' id='adults' name='adults'>
                                    <option value=''>Adult(12+ Yrs)</option>
                                    ";
                    foreach ($adults_number as $adultsNo) {
                        $selected = $row['adults'] == $adultsNo ? 'selected' : '';
                        echo "<option value='$adultsNo' $selected>$adultsNo</option>";
                    }
                    echo "
						        </select>
                            </div>
                            <div class='passenger'>
                                <select class='form-control' id='children' name='children'>
                                    <option value=''>Children(2-11 Yrs)</option>
                                    ";
                    foreach ($children_number as $childrenNo) {
                        $selected = $row['children'] == $childrenNo ? 'selected' : '';
                        echo "<option value='$childrenNo' $selected>$childrenNo</option>";
                    }
                    echo "
						        </select>
                            </div>
                            <div class='passenger'>
                                <select class='form-control' id='infants' name='infants'>
                                    <option value=''>Infant(under 2Yrs)</option>
                                    ";
                    foreach ($infants_number as $infantsNo) {
                        $selected = $row['infants'] == $infantsNo ? 'selected' : '';
                        echo "<option value='$infantsNo' $selected>$infantsNo</option>";
                    }
                    echo "
						        </select>
                            </div>
                        </div>
                        <input type='submit' value='Submit' class='activated'>
                    </form> 
                </div>
                ";
                }
            } else {
                echo "You haven't done any reservations yet.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }


    }



    ?>
    <?php include("common/footer.php"); ?>
    <!-- <script src="../js/reservation.js"></script> -->
    <script src="./js/editScript.js"></script>
</body>

</html>
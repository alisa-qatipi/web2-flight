<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/navbar2.css">
    <link rel="stylesheet" href="./style/bookings.css">
    <link rel="stylesheet" href="./style/footer.css">
    <!-- <link rel="stylesheet" href="./style/index2.css"> -->
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>SkyKosovo</title>
</head>

<body>
    <?php include("common/navbar.php"); ?>

    <h1>My bookings</h1>
    <?php
    // Include config file
    require_once "./common/config.php";

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        $userID = $_SESSION["id"];

        if ($userID == '13') {
            // Attempt select query execution
            $sql = "SELECT * FROM reservations";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=2;>";
                    echo "<tr><th>Reservation ID</th> <th>Fare choice</th> <th>Departure location</th> <th>Arrival location</th> <th>Departure date</th> <th>Return date</th> <th>Adults</th> <th>Children</th> <th>Infants</th> <th>actions</th> </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['reservationID'] . "</td>";
                        echo "<td>" . $row['fare_choice'] . "</td>";
                        echo "<td>" . $row['departure_location'] . "</td>";
                        echo "<td>" . $row['arrival_location'] . "</td>";
                        echo "<td>" . $row['departure_date'] . "</td>";
                        echo "<td>" . $row['return_date'] . "</td>";
                        echo "<td>" . $row['adults'] . "</td>";
                        echo "<td>" . $row['children'] . "</td>";
                        echo "<td>" . $row['infants'] . "</td>";
                        echo "<td> <button id='myBtn'>Edit</button> <form action='./common/deleteData.php' method='POST'><input type='hidden' name='reservationID' value='" . $row['reservationID'] . "'</input><button>Delete</button></form>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "You haven't done any reservations yet.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

            

        } else {
            $sql = "SELECT * FROM reservations WHERE userID = '$userID'";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table border=2;>";
                    echo "<tr><th>Reservation ID</th> <th>Fare choice</th> <th>Departure location</th> <th>Arrival location</th> <th>Departure date</th> <th>Return date</th> <th>Adults</th> <th>Children</th> <th>Infants</th> </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['reservationID'] . "</td>";
                        echo "<td>" . $row['fare_choice'] . "</td>";
                        echo "<td>" . $row['departure_location'] . "</td>";
                        echo "<td>" . $row['arrival_location'] . "</td>";
                        echo "<td>" . $row['departure_date'] . "</td>";
                        echo "<td>" . $row['return_date'] . "</td>";
                        echo "<td>" . $row['adults'] . "</td>";
                        echo "<td>" . $row['children'] . "</td>";
                        echo "<td>" . $row['infants'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "You haven't done any reservations yet.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }

    }



    // Close connection
    mysqli_close($link);
    ?>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <!-- <p>Some text in the Modal..</p> -->


            <div class="booking-form">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                    onsubmit="formValidation()">
                    <h2>Book your next flight</h2>
                    <div class="fareChoice">
                        <h6>Select your Fare <span style="color: red;">*</span></h6>
                        <ul>
                            <li>
                                <input type="radio" id="a-option" name="fare_choice" onchange="checkReturn()">
                                <label for="a-option">One Way</label>
                            </li>
                            <li>
                                <input type="radio" id="b-option" name="fare_choice" onchange="checkReturn()">
                                <label for="b-option">Round-Trip</label>

                            </li>
                        </ul>

                    </div>
                    <div class="doubleRow">
                        <div class="doubleInput">
                            <select class="form-control" id="departureLocation" name="departure_location">
                                <option value="">From</option>
                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                <option value="Adipiscing">Adipiscing</option>
                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                <option value="Adipiscing">Adipiscing</option>
                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                <option value="Adipiscing">Adipiscing</option>
                            </select>
                            <p id="departureLocationError">error message</p>
                        </div>
                        <div class="doubleInput">
                            <select class="form-control" id="arrivalLocation" name="arrival_location">
                                <option value="">To</option>
                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                <option value="Adipiscing">Adipiscing</option>
                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                <option value="Adipiscing">Adipiscing</option>
                                <option value="Lorem Ipsum">Lorem Ipsum</option>
                                <option value="Adipiscing">Adipiscing</option>
                            </select>
                            <p>error message</p>

                        </div>
                    </div>

                    <div class="doubleRow">
                        <div class="doubleInput">
                            <input id="departureDate" name="departure_date" type="date" placeholder="Departure Date"
                                min="<?php echo date('Y-m-d'); ?>" class="datepicker">
                            <p>error message</p>

                        </div>
                        <div class="doubleInput">
                            <input type="date" id="returnDate" name="return_date" placeholder="Return Date"
                                min="<?php echo date('Y-m-d'); ?>" class="datepicker">
                            <p>error message</p>

                        </div>
                    </div>

                    <div class="passengerData">
                        <div class="passenger">
                            <select class="form-control" id="adults" name="adults">
                                <option value="">Adult(12+ Yrs)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>
                        <div class="passenger">
                            <select class="form-control" id="children" name="children">
                                <option value="">Children(2-11 Yrs)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>
                        <div class="passenger">
                            <select class="form-control" id="infants" name="infants">
                                <option value="">Infant(under 2Yrs)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>

                    </div>
                    <p>error message</p>
                    <input type="hidden" id="userID" name="userID">

                    <input type="submit" value="Submit"
                        class="<?php echo (isset($_SESSION["loggedin"])) ? "activated" : "disabled" ?>">
                    <p class="notify"
                        style="<?php echo (isset($_SESSION["loggedin"])) ? "opacity: 0" : "opacity: 1" ?>">Please log in
                        to make a reservation</p>

                </form>
            </div>
        </div>
    </div>


    <script src="./js/modal.js"></script>
</body>

</html>
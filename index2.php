<?php

// Include config file
require_once "./common/config.php";

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $userID = $_SESSION["id"];

	// Process form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fare_choice = $_POST["fare_choice"];
        $departure_location = $_POST["departure_location"];
        $arrival_location = $_POST["arrival_location"];
        $departure_date = $_POST["departure_date"];
        $return_date = $_POST["return_date"];
        $adults = $_POST["adults"];
        $children = $_POST["children"];
        $infants = $_POST["infants"];

        // Prepare an insert statement
        $sql = "INSERT INTO flights (userID, fare_choice, departure_location, arrival_location, departure_date, return_date, adults, children, infants) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "isssssiii", $userID, $fare_choice, $departure_location, $arrival_location, $departure_date, $return_date, $adults, $children, $infants);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to success page
                header("location: offers.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
	}
}
// Close connection
mysqli_close($link);

// Initialize variables
// get the userID from the session
// $userID = $_SESSION['userID'];
// $fare_choice = $departure_location = $arrival_location = $departure_date = $return_date = $adults = $children = $infants = "";

// if (isset($_POST["submit"])) {
// 	$userID = $_POST["userID"];
// 	$fare_choice = $_POST["fare_choice"];
// 	$departure_location = $_POST["departure_location"];
// 	$arrival_location = $_POST["arrival_location"];
// 	$departure_date = $_POST["departure_date"];
// 	$return_date = $_POST["return_date"];
// 	$adults = $_POST["adults"];
// 	$children = $_POST["children"];
// 	$infants = $_POST["infants"];

// 	    $insertQuery="INSERT INTO reservations(userID, fare_choice, departure_location, arrival_location, departure_date, return_date, adults, children, infants) VALUES ('$userID', '$fare_choice', '$departure_location', '$arrival_location','$departure_date','$return_date', '$adults', '$children', '$infants')";
//     echo $insertQuery;
//     if(mysqli_query($link,$insertQuery)){
//         // Redirect back to blog page
//         header("location: reservations.php");
//         echo "successful insert";
//     } else{
//         echo $query;
//         echo "Oops! Something went wrong. Please try again later.";
// 		echo "<script>alert('something is wrong')</script>";
// 		echo "Error: " . mysqli_error($link);
//     }

// }
	// // Prepare and execute the SQL query
	// $insertQuery = "INSERT INTO reservations(userID, fare_choice, departure_location, arrival_location, departure_date, return_date, adults, children, infants)
	// 	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	// $stmt = mysqli_prepare($link, $insertQuery);
	// mysqli_stmt_bind_param($stmt, "isssssiii", $userID, $fare_choice, $departure_location, $arrival_location, $departure_date, $return_date, $adults, $children, $infants);
	// if (mysqli_stmt_execute($stmt)) {
	// 	// Redirect back to the reservations page
	// 	header("location: reservations.php");
	// 	exit;
	// } else {
	// 	$error = mysqli_error($link);
	// 	echo "Oops! Something went wrong. Please try again later. Error: " . $error;
	// 	exit;
	// }




// if (isset($_POST["submit"])){
//     $pDate = $_POST["pDate"];
//     $dDate = $_POST["dDate"];    

//     $carID = $_POST["carId"];
//     $userID = $_POST["userID"];
//     $pLocation = $_POST["pLocation"];
//     $dLocation = $_POST["dLocation"];  

//     $insertQuery="INSERT INTO reservation(carID, userID, pickUpLocation, dropOfLocation,pickUpDate,dropOfDate) VALUES ('$userID', '$carID', '$pLocation', '$dLocation','$pDate','$dDate')";
//     echo $insertQuery;
//     if(mysqli_query($link,$insertQuery)){
//         // Redirect back to blog page
//         header("location: reservations.php");
//         echo "successful insert";
//     } else{
//         echo $query;
//         echo "Oops! Something went wrong. Please try again later.";
//     }
// }


// // Close connection
// mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style/navbar2.css">
	<link rel="stylesheet" href="./style/index2.css">
	<link rel="stylesheet" href="./style/footer.css">
	<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="./style/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>SkyKosovo</title>
</head>

<body>
	<?php include("common/navbar.php"); ?>

	<div class="banner">
		<!-- <h1>Fly higher!</h1> -->
		<div class="booking-form">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				<h2>Book your next flight</h2>
				<div class="fareChoice">
					<h6>Select your Fare <span style="color: red;">*</span></h6>
					<ul>
						<li>
							<input type="radio" id="a_option" name="fare_choice"
								value="<?php echo isset($_POST["fare_choice"]) ? $_POST["fare_choice"] : '' ?>"
								>
							<label for="a-option">One Way</label>
						</li>
						<li>
							<input type="radio" id="b_option" name="fare_choice"
								value="<?php echo isset($_POST["fare_choice"]) ? $_POST["fare_choice"] : '' ?>"
								>
							<label for="b-option">Round-Trip</label>

						</li>
					</ul>

				</div>
				<div class="doubleRow">
					<div class="doubleInput">
						<select class="form-control" id="departure_location" name="departure_location"
							value="<?php echo isset($_POST["departure_location"]) ? $_POST["departure_location"] : '' ?>">
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
						<select class="form-control" id="arrival_location" name="arrival_location"
							value="<?php echo isset($_POST["arrival_location"]) ? $_POST["arrival_location"] : '' ?>">
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
						<input id="departure_date" name="departure_date" type="date" placeholder="Departure Date"
							min="<?php echo date('Y-m-d'); ?>" class="datepicker"
							value="<?php echo isset($_POST["departure_date"]) ? $_POST["departure_date"] : '' ?>">
						<p>error message</p>

					</div>
					<div class="doubleInput">
						<input type="date" id="return_date" name="return_date" placeholder="Return Date"
							min="<?php echo date('Y-m-d'); ?>" class="datepicker"
							value="<?php echo isset($_POST["return_date"]) ? $_POST["return_date"] : '' ?>">
						<p>error message</p>

					</div>
				</div>

				<div class="passengerData">
					<div class="passenger">
						<select class="form-control" id="adults" name="adults"
							value="<?php echo isset($_POST["adults"]) ? $_POST["adults"] : '' ?>">
							<option value="">Adult(12+ Yrs)</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5+</option>
						</select>
					</div>
					<div class="passenger">
						<select class="form-control" id="children" name="children"
							value="<?php echo isset($_POST["children"]) ? $_POST["children"] : '' ?>">
							<option value="">Children(2-11 Yrs)</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5+</option>
						</select>
					</div>
					<div class="passenger">
						<select class="form-control" id="infants" name="infants"
							value="<?php echo isset($_POST["infants"]) ? $_POST["infants"] : '' ?>">
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
				<?php
				if (isset($_SESSION["loggedin"])) {
					echo "<input type='submit' value='Submit' class='activated'></input>";
				} else {
					echo "<input type='submit' value='Submit' disabled class='disabled'></input>";

				}
				?>

				<p class="notify" style="<?php echo (isset($_SESSION["loggedin"])) ? "opacity: 0" : "opacity: 1" ?>">
					Please log in
					to make a reservation</p>
				 <input type="hidden" id="userID" name="userID" value="<?php echo $_SESSION["id"]?>">
			</form>
		</div>
	</div>

	<div class="advantages">
		<div class="container">
			<div class="reasons">
				<div class="reason">
					<div class="icon">
						<i class="fa-solid fa-route"></i>
					</div>
					<div class="description">
						<div class="descTitle">Extensive Route Network</div>
						<div class="descParagraph">SkyKosovo offers an extensive route network covering a wide range
							of destinations, both domestic and international, providing travelers with more options
							to choose from and the flexibility to plan their travel as per their convenience.</div>
					</div>
				</div>
				<div class="reason">
					<div class="icon">
						<!-- <i class="fa-solid fa-badge-dollar"></i> -->
						<i class="fa-solid fa-badge-dollar"></i>
					</div>
					<div class="description">
						<div class="descTitle">Competitive Fares</div>
						<div class="descParagraph">SkyKosovo offers competitive fares, ensuring that travelers get
							the best value for their money. With its affordable pricing strategy, it has made air
							travel more accessible to a wider range of travelers, including budget-conscious
							travelers.</div>
					</div>
				</div>
				<div class="reason">
					<div class="icon">
						<!-- <i class="fa-solid fa-head-side-headphones"></i> -->
						<i class="fa-solid fa-head-side-headphones"></i>
					</div>
					<div class="description">
						<div class="descTitle">Top Customer Service</div>
						<div class="descParagraph">SkyKosovo takes pride in its exceptional customer service. Its
							dedicated customer support team is available 24/7 to assist travelers with their queries
							and concerns, ensuring a hassle-free travel experience from start to finish.</div>
					</div>
				</div>
				<div class="reason">
					<div class="icon">
						<!-- <i class="fa-duotone fa-person-seat"></i> -->
						<i class="fa-duotone fa-person-seat"></i>
					</div>
					<div class="description">
						<div class="descTitle">Modern Fleet and Comfort</div>
						<div class="descParagraph">SkyKosovo boasts of a modern fleet of aircraft equipped with the
							latest technology and amenities to provide travelers with a comfortable and safe
							journey. We ensure that every traveler has a memorable flying experience.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("common/footer.php"); ?>

	<script>
		var oneWay = document.getElementById('a-option');
		var roundTrip = document.getElementById('b-option');
		var departureLocation = document.getElementById('departureLocation');
		var arrivalLocation = document.getElementById('arrivalLocation');
		var departureDate = document.getElementById('departureDate');
		var returnDate = document.getElementById('returnDate');
		var adults = document.getElementById('adults');
		var children = document.getElementById('children');
		var infants = document.getElementById('infants');


		const checkReturn = () => {
			if (roundTrip.checked == "") {
				// arrivalLocation.style = "opacity: 0";
				// returnDate.style = "opacity: 0";
				// arrivalLocation.disabled = true;
				returnDate.disabled = true;

			} else {
				// arrivalLocation.disabled = false;
				returnDate.disabled = false;
			}
		}

		const checkPassenger = () => {
			if (adults.value == "" && children.value == "" && infants.value == "") {
				// alert("Please choose number of passengers");
				return false;
			} else {
				// alert(adults.value || children.value || infants.value);
				return true;
			}
		}

		const checkLocation = () => {
			if (roundTrip.checked == "") {
				if (departureLocation.value == "" || departureDate.value == "") {
					alert("Please choose departure location and date");
					return false;
				} else {
					return true;
				}
			} else {
				if (departureLocation.value == "" || departureDate.value == "" || arrivalLocation.value == "" || departureLocation.value == "") {
					alert("Please complete all form");
					return false;
				} else {
					return true;
				}
			}
		}


		const formValidation = () => {
			if (roundTrip.checked == "" && oneWay.checked == "") {
				alert("Please select your fare");
				return false;
			} else {
				console.log("done")
				// e.preventDefault();
				checkPassenger();
				checkLocation();
				alert("done");
			}


		}
	</script>

</body>

</html>
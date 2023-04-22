<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/navbar.css">
    <title>SkyKosovo</title>
</head>
<body>
    <?php include("common/navbar.php"); ?>

    <div class="banner">
      <!-- <h1>Fly higher!</h1> -->
<div class="booking-form">
		<form action="#" method="post">
			<h2>Book your next flight</h2>
      <div class="fareChoice">
				<h6>Select your Fare</h6>
				<ul>
					<li>
						<input type="radio" id="a-option" name="selector1">
						<label for="a-option">One Way</label>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1">
						<label for="b-option">Round-Trip</label>

					</li>
				</ul>
				
			</div>
			<div class="doubleRow">
				<div class="doubleInput">
					<select class="form-control">
										<option>From</option>
										<option value="Lorem Ipsum">Lorem Ipsum</option>
										<option value="Adipiscing">Adipiscing</option>
										<option value="Lorem Ipsum">Lorem Ipsum</option>
										<option value="Adipiscing">Adipiscing</option>
										<option value="Lorem Ipsum">Lorem Ipsum</option>
										<option value="Adipiscing">Adipiscing</option>
									</select>
				</div>
				<div class="doubleInput">
					<select class="form-control">
										<option>To</option>
										<option value="Lorem Ipsum">Lorem Ipsum</option>
										<option value="Adipiscing">Adipiscing</option>
										<option value="Lorem Ipsum">Lorem Ipsum</option>
										<option value="Adipiscing">Adipiscing</option>
										<option value="Lorem Ipsum">Lorem Ipsum</option>
										<option value="Adipiscing">Adipiscing</option>
									</select>
				</div>
			</div>
      
			<div class="doubleRow">
				<div class="doubleInput">
					<input id="departureDate" name="Departure" type="date" placeholder="Departure Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="datepicker">
				</div>
				<div class="doubleInput">
					<input type="date" id="returnDate" name="Return" placeholder="Departure Time" placeholder="Return Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="datepicker">
				</div>
			</div>

			<div class="passengerData">
				<div class="passenger">
					<select class="form-control">
												<option value="">Adult(12+ Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>
											</select>
				</div>
				<div class="passenger">
					<select class="form-control">
												<option value="">Children(2-11 Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>     
											</select>
				</div>
				<div class="passenger">
					<select class="form-control">
												<option value="">Infant(under 2Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>    
											</select>
				</div>
			</div>
		

			
			<input type="submit" value="Submit">
			
		</form>
	</div>
    </div>
</body>
</html>
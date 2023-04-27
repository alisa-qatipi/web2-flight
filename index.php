<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/navbar2.css">
    <link rel="stylesheet" href="./style/index2.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

	<div class="advantages">
		<div class="container">
			<div class="reasons">
				<div class="reason">
					<div class="icon">
					<i class="fa-solid fa-route"></i>
					</div>
					<div class="description">
						<div class="descTitle">Extensive Route Network</div>
						<div class="descParagraph">SkyKosovo offers an extensive route network covering a wide range of destinations, both domestic and international, providing travelers with more options to choose from and the flexibility to plan their travel as per their convenience.</div>
					</div>
				</div>
				<div class="reason">
					<div class="icon">
					<!-- <i class="fa-solid fa-badge-dollar"></i> -->
					<i class="fa-solid fa-badge-dollar"></i>
					</div>
					<div class="description">
						<div class="descTitle">Competitive Fares</div>
						<div class="descParagraph">SkyKosovo offers competitive fares, ensuring that travelers get the best value for their money. With its affordable pricing strategy, it has made air travel more accessible to a wider range of travelers, including budget-conscious travelers.</div>
					</div>
				</div>
				<div class="reason">
					<div class="icon">
					<!-- <i class="fa-solid fa-head-side-headphones"></i> -->
					<i class="fa-solid fa-head-side-headphones"></i>
					</div>
					<div class="description">
						<div class="descTitle">Top Customer Service</div>
						<div class="descParagraph">SkyKosovo takes pride in its exceptional customer service. Its dedicated customer support team is available 24/7 to assist travelers with their queries and concerns, ensuring a hassle-free travel experience from start to finish.</div>
					</div>
				</div>
				<div class="reason">
					<div class="icon">
					<!-- <i class="fa-duotone fa-person-seat"></i> -->
					<i class="fa-duotone fa-person-seat"></i>
					</div>
					<div class="description">
						<div class="descTitle">Modern Fleet</div>
						<div class="descParagraph">SkyKosovo boasts of a modern fleet of aircraft equipped with the latest technology and amenities to provide travelers with a comfortable and safe journey. We ensure that every traveler has a memorable flying experience.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <?php include("common/footer.php"); ?>
</body>
</html>
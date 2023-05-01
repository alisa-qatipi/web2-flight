var oneWay = document.getElementById("a-option");
var roundTrip = document.getElementById("b-option");
var departureLocation = document.getElementById("departureLocation");
var arrivalLocation = document.getElementById("arrivalLocation");
var departureDate = document.getElementById("departureDate");
var returnDate = document.getElementById("returnDate");
var adults = document.getElementById("adults");
var children = document.getElementById("children");
var infants = document.getElementById("infants");

const checkReturn = () => {
  if (roundTrip.checked == "") {
    // arrivalLocation.style = "opacity: 0";
    // returnDate.style = "opacity: 0";
    // arrivalLocation.disabled = true;
    arrivalLocation.setAttribute = ("required", "");
    returnDate.disabled = true;
  } else {
    // arrivalLocation.style = "color: red";
    arrivalLocation.removeAttribute = "required";
    returnDate.disabled = false;
  }
};

const checkDate = () => {
  const depDate = new Date(departureDate.value);
  const retDate = new Date(returnDate.value);

  if (depDate > retDate) {
    alert("Return date cannot be earlier than departure date");
    return false;
  } else {
    return true;
  }
};

const checkPassenger = () => {
  if (adults.value == "" && children.value == "" && infants.value == "") {
    // alert("Please choose number of passengers");
    return false;
  } else if (
    adults.value == "" &&
    (children.value !== "" || infants.value !== "")
  ) {
    alert("Children and infants need to be accompanied by at least one adult");
    return false;
  } else {
    // alert(adults.value || children.value || infants.value);
    return true;
  }
};

const checkLocation = () => {
  if (roundTrip.checked == "") {
    if (departureLocation.value == "" || departureDate.value == "") {
      alert("Please choose departure location and date");
      return false;
    } else {
      return true;
    }
  } else {
    if (
      departureLocation.value == "" ||
      departureDate.value == "" ||
      arrivalLocation.value == "" ||
      returnDate.value == ""
    ) {
      alert("Please complete all form");
      return false;
    } else {
      return true;
    }
  }
};

const formValidation = () => {
  if (roundTrip.checked == "" && oneWay.checked == "") {
    alert("Please select your fare");
    return false;
  } else {
    if (checkPassenger() && checkLocation() && checkDate()) {
		// return true;
      alert("done");
    } else {
		return false;
	}
  }
};

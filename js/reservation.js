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
  if (roundTrip.checked == false) {
    returnDate.disabled = true;
  } else {
    returnDate.disabled = false;
  }
};

departureDate.addEventListener("change", function () {
  returnDate.min = this.value;
  // alert(this.value);
});

departureLocation.addEventListener("change", () => {
  const selectedOption = departureLocation.value;
  const options = arrivalLocation.querySelectorAll("option");

  for (let i = 0; i < options.length; i++) {
    if (options[i].value === selectedOption) {
      options[i].disabled = true;
      options[i].selected = false;
    } else {
      options[i].disabled = false;
    }
  }
});

adults.addEventListener("change", () => {
  const NoAdults = adults.value;

  if (NoAdults == "") {
    children.disabled = true;
    infants.disabled = true;
  } else {
    children.disabled = false;
    infants.disabled = false;
  }
});

const checkPassenger = (event) => {
  if (!adults.value) {
    event.preventDefault();
    const passengerError = document.getElementById('passengerError');
    passengerError.innerHTML = 'Please choose number of passengers!'
    // alert("Please choose number of passengers");
    return false;
  } else {
    // alert(adults.value || children.value || infants.value);
    return true;
  }
};

const formValidation = (event) => {
  if (roundTrip.checked == false && oneWay.checked == false) {
    alert("Please select your fare");
    // event.preventDefault();
    return false;
  } else if (roundTrip.checked == true){
    if(departureLocation.value == "" && arrivalLocation.value == "" && departureDate.value == "" && returnDate.value == ""){
      alert ("Please check that you have completed all the fields");
      // event.preventDefault();
      return false;
    } else if (!checkPassenger()) {
      // event.preventDefault();
      return false;
    } else {
      return true;
    }
  } else if(oneWay.checked == true){
    if(departureLocation.value == "" && arrivalLocation.value == ""  && departureDate.value == ""){
      alert ("Please check that you have completed all the fields");
      // event.preventDefault();
      return false;
    } else if (!checkPassenger()) {
      // event.preventDefault();
      return false;
    } else {
      return true;
    }
  }
};

var fares = document.getElementById('fares');
var departureLocation = document.getElementById('departureLocation');
var arrivalLocation = document.getElementById('arrivalLocation');
var departureDate = document.getElementById('departureDate');
var returnDate = document.getElementById('returnDate');
var adults = document.getElementById('adults');
var children = document.getElementById('children');
var infants = document.getElementById('infants');

fares.addEventListener('change', () => {
    if (fares.value == 'one-way') {
        returnDate.disabled = true;
    } else if (fares.value == 'return-trip') {
        returnDate.disabled = false;
    }
})

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

    arrivalLocation.selectedIndex = -1;
});


departureDate.addEventListener("change", function () {
    returnDate.min = this.value;
});

const formValidation = (event) => {
    if (!fares.value) {
        alert("Please select your fare");
        event.preventDefault();
        return false;
    } else if (fares.value === 'return-trip') {
        if (departureLocation.value === "" || arrivalLocation.value === "" || departureDate.value === "" || returnDate.value === "") {
            alert("Please check that you have completed all the fields");
            event.preventDefault();
            return false;
        } else {
            return true;
        }
    } else if (fares.value === 'one-way') {
        if (departureLocation.value === "" || arrivalLocation.value === "" || departureDate.value === "") {
            alert("Please check that you have completed all the fields");
            event.preventDefault();
            return false;
        }
        else {
            return true;
        }
    }
};

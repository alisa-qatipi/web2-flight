-- DATABASE NAME: airline_db

-- users TABLE

CREATE TABLE users (
  userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  surname VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone_number VARCHAR(20) NOT NULL,
  age INT NOT NULL,
  password VARCHAR(100) NOT NULL
);

CREATE TABLE reservationS (
    reservationID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userID INT(11) NOT NULL,
    fare_choice VARCHAR(20) NOT NULL,
    departure_location VARCHAR(50) NOT NULL,
    arrival_location VARCHAR(50) NOT NULL,
    departure_date DATE NOT NULL,
    return_date DATE,
    adults INT(11),
    children INT(11),
    infants INT(11)
);

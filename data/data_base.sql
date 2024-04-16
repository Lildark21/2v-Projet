CREATE TABLE `User` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `First_name` varchar(255),
  `Name` varchar(255),
  `mail_adress` varchar(255),
  `anniversary_date` date,
  `pasword` varchar(255),
  `gender` varchar(255)
);

CREATE TABLE `PSI` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `Phone_number` varchar(255),
  `mail_adress` varchar(255),
  `postal_code` varchar(255),
  `specialtye` varchar(255),
  `diploma` varchar(255),
  `price` varchar(255)
);

CREATE TABLE `Appointment` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `ID_PSI` integer AUTO_INCREMENT,
  `ID_User` integer AUTO_INCREMENT,
  `Date_appointement` datetime
);

CREATE TABLE `User` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `First_name` varchar(255),
  `Last_name` varchar(255),
  `email` varchar(255),
  `birthdate` date,
  `password_hash` varchar(255),
  `gender` varchar(255),
  `sécurity_number` varchar(255)
);

CREATE TABLE `PSY` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `First_name` varchar(255),
  'birthdate' varchar(255)
  `phone_number` varchar(255),
  `email` varchar(255),
  `password` varchar(255)
  `security_number` varchar(255),
  'gender' varchar(255),
  `address` varchar(255),
  `postal_code` varchar(255),
  `specialty` varchar(255),
  `diploma` varchar(255),
  `price` varchar(255),
  `consultation_type` varchar(255),
  
);

CREATE TABLE `Appointment` (
  `ID` integer PRIMARY KEY AUTO_INCREMENT,
  `PSI_ID` integer,
  `User_ID` integer,
  `Appointment_Date` datetime,
  `Indication` varchar(255)
);


INSERT INTO `User` (`First_name`, `Last_name`, `email`, `birthdate`, `password_hash`, `gender`, `sécurity_number`) VALUES
('John', 'Doe', 'john.doe@example.com', '1990-05-15', 'hashedpassword123', 'Male', '123-45-6789'),
('Alice', 'Smith', 'alice.smith@example.com', '1985-09-20', 'hashedsecurepass', 'Female', '987-65-4321'),
('Michael', 'Johnson', 'michael.johnson@example.com', '1982-03-10', 'hashedpass1234', 'Male', '234-56-7890'),
('Emily', 'Brown', 'emily.brown@example.com', '1995-11-28', 'hashedqwerty', 'Female', '876-54-3210'),
('David', 'Jones', 'david.jones@example.com', '1978-07-03', 'hashedabc123', 'Male', '345-67-8901'),
('Sarah', 'Williams', 'sarah.williams@example.com', '1989-12-17', 'hashedpassword', 'Female', '765-43-2109'),
('Daniel', 'Taylor', 'daniel.taylor@example.com', '1983-08-22', 'hashed123456', 'Male', '456-78-9012'),
('Jessica', 'Martinez', 'jessica.martinez@example.com', '1992-04-09', 'hashedletmein', 'Female', '654-32-1098'),
('Matthew', 'Anderson', 'matthew.anderson@example.com', '1975-06-30', 'hashedhello123', 'Male', '567-89-0123'),
('Jennifer', 'Jackson', 'jennifer.jackson@example.com', '1987-02-14', 'hashedtest123', 'Female', '543-21-0987');


INSERT INTO `psy` (`Last_name`, `First_name`, `birthdate`, `phone_number`, `email`, `password`, `security_number`, `gender`, `address`, `postal_code`, `specialty`, `diploma`, `price`, `consultation_type`) VALUES
('Martin', 'Julie', '1983-05-12', '01 45 00 52 22', 'julie.martin@example.com', 'pwd12345', '1728394040017', 'Femme', '12 Rue des Lilas', '75001', 'Psychologie clinique', 'Doctorat', 70, 'Individuelle'),
('Bernard', 'Lucas', '1976-11-23', '01 48 24 68 00', 'lucas.bernard@example.com', 'pwd23456', '1760543980002', 'Homme', '88 Avenue Victor Hugo', '75015', 'Neuropsychologie', 'Master', 65, 'Familiale'),
('Dubois', 'Emilie', '1990-02-15', '01 55 20 62 09', 'emilie.dubois@example.com', 'pwd34567', '2900214755012', 'Femme', '35 Boulevard des Capucines', '75018', 'Psychothérapie', 'Licence', 50, 'Groupe'),
('Leroy', 'Merlin', '1988-07-19', '01 60 41 58 22', 'mathieu.leroy@example.com', 'pwd45678', '1880739501029', 'Homme', '7 Rue de la République', '75020', 'Psychologie d enfant', 'Doctorat', 80, 'Individuelle'),
('Moreau', 'Chloé', '1974-09-04', '01 47 42 52 14', 'chloe.moreau@example.com', 'pwd56789', '1740913960045', 'Femme', '103 Cours de Vincennes', '75014', 'Thérapie comportementale', 'Master', 75, 'Individuelle'),
('Gautier', 'Sophie', '1981-04-28', '01 43 12 45 67', 'sophie.gautier@example.com', 'pwd67890', '1810498750066', 'Femme', '26 Rue des Fleurs', '75005', 'Psychanalyse', 'Doctorat', 90, 'Individuelle'),
('Vincent', 'Laura', '1979-12-16', '01 39 23 45 54', 'laura.vincent@example.com', 'pwd89012', '1791216040033', 'Femme', '14 Avenue de l Opéra', '75008', 'Psychologie de l adolescent', 'Master', 55, 'Groupe'),
('Simon', 'Éric', '1985-05-20', '01 32 15 22 45', 'eric.simon@example.com', 'pwd90123', '1850524789065', 'Homme', '55 Quai de Grenelle', '75016', 'Thérapie cognitive', 'Doctorat', 60, 'Individuelle'),
('Lefevre', 'Marie', '1962-08-24', '01 45 67 89 00', 'marie.lefevre@example.com', 'pwd01234', '1620824045078', 'Femme', '82 Rue Jeanne d Arc', '75011', 'Psychiatrie', 'Doctorat', 100, 'Familiale');
('Petit', 'Nathalie', '1987-01-14', '01 44 23 56 78', 'nathalie.petit@example.com', 'pwd12347', '1870114950063', 'Femme', '29 Rue de Sévigné', '75004', 'Thérapie de couple', 'Master', 85, 'Individuelle'),
('Robert', 'Pierre', '1966-07-03', '01 58 76 58 76', 'pierre.robert@example.com', 'pwd76543', '1660731850074', 'Homme', '4 Rue des Archives', '75003', 'Psychologie du sport', 'Doctorat', 95, 'Individuelle'),
('Richard', 'Jessica', '1978-05-28', '01 34 89 00 12', 'jessica.richard@example.com', 'pwd98456', '1780528950065', 'Femme', '18 Avenue Parmentier', '75011', 'Psychologie cognitive', 'Doctorat', 90, 'Groupe'),
('Durand', 'Maxime', '1985-10-21', '01 77 45 22 33', 'maxime.durand@example.com', 'pwd12233', '1851021450027', 'Homme', '56 Rue Monge', '75005', 'Psychanalyse', 'Master', 80, 'Familiale'),
('Henry', 'Aline', '1972-12-12', '01 39 65 78 99', 'aline.henry@example.com', 'pwd67891', '1721212450062', 'Femme', '32 Boulevard Saint-Germain', '75006', 'Thérapie comportementale', 'Licence', 70, 'Individuelle');

INSERT INTO `Appointment` (`PSI_ID`, `User_ID`, `Appointment_Date`, `Indication`) VALUES
(1, 1, '2024-03-25 09:00:00', 'Initial Consultation'),
(2, 2, '2024-03-26 10:00:00', 'Follow-up'),
(3, 3, '2024-03-27 11:00:00', 'Therapy Session'),
(4, 4, '2024-03-28 12:00:00', 'Counseling'),
(5, 5, '2024-03-29 13:00:00', 'Assessment'),
(6, 6, '2024-03-30 14:00:00', 'Review Session'),
(7, 7, '2024-03-31 15:00:00', 'Consultation'),
(8, 8, '2024-04-01 16:00:00', 'Therapy Session'),
(9, 9, '2024-04-02 17:00:00', 'Counseling'),
(10, 10, '2024-04-03 18:00:00', 'Initial Consultation');

//1. Insert New Doctor to the database

INSERT INTO `doctors` (`id`, `Fname`, `Lname`, `age`, `salary`, `city`, `address`, `speciailty`, `YearsOfExperience`);
VALUES (NULL, 'amr', 'badr', '21', '2000', 'Damanhour', 'Elrwda', 'A', '4');

//2. Insert new patient to database
INSERT INTO `patients` (`id`, `Fname`, `Lname`, `email`, `password`, `city`, `address`);
VALUES (NULL, 'amr', 'badr', 'ame@yahoo.com', '123123', 'Damanhour', 'Elrwda');

//3. Insert new empolyee
INSERT INTO `employees` (`id`, `Fname`, `Lname`, `age`, `salary`, `city`, `address`, `speciailty`, `YearsOfExperience`);
VALUES (NULL, 'amr', 'badr', '21', '2000', 'Damanhour', 'Elrwda', 'A', '4');

//4. insert  new reservation
INSERT INTO `reservations` (`id`, `day`, `time`, `state`, `patient_id`) VALUES (NULL, '', current_timestamp(), '', '');

//5.insert new clinic
INSERT INTO `clinic` (`id`, `name`, `location`, `phoneNumber`) VALUES (NULL, '', '', '');


1. cerate Doctors table
CREATE TABLE `clinic`.`doctors` ( `id` INT NOT NULL AUTO_INCREMENT , `Fname` VARCHAR(60) NOT NULL , `Lname` VARCHAR(60) NOT NULL , `age` DOUBLE NOT NULL , `salary` DOUBLE NOT NULL , `city` VARCHAR(60) NOT NULL , `address` VARCHAR(60) NOT NULL , `speciailty` VARCHAR(60) NOT NULL , `YearsOfExperience` DOUBLE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

2. create patients table
CREATE TABLE `clinic`.`PATIENTS` ( `id` INT NOT NULL AUTO_INCREMENT , `Fname` VARCHAR(60) NOT NULL , `Lname` VARCHAR(60) NOT NULL , `age` DOUBLE NOT NULL , `email` VARCHAR(60) NOT NULL , `password` VARCHAR(60) NOT NULL , `address` VARCHAR(60) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

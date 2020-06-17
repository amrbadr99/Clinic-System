1.update doctor last name
UPDATE `doctors` SET `Lname` = 'mohamed' WHERE `doctors`.`id` = 1

2.update employee last name
UPDATE `employee` SET `city` = 'Alex' WHERE `employee`.`id` = 1

2.update patient email
UPDATE `patients` SET `email` = 'mohamed@yahoo.com' WHERE `patients`.`id` = 1

/*
our system idea is allowing patients to make remote reservations so employees will accept and refuse them
through change state field value for 1 or 2
1 for accepting
2 for refusing
and by default the state will be 0 that refers to in the waiting
*/

3.accept reservation
UPDATE `reservations` SET `state` = '1' WHERE `reservations`.`id` = 1

4. refuse reservation
UPDATE `reservations` SET `state` = '1' WHERE `reservations`.`id` = 2

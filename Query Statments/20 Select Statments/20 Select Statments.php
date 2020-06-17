I will ask my self to do tasks and implement them with query statements:
----------------------
1. Select all data from a specific table called "doctors"
Solve:
Select * from doctors;

2. Select the first 20 results from table called  "doctors"
Solve:
SELECT TOP 20 * FROM doctors;

3.Select all employees that their salary is more than 2000
Solve:
SELECT TOP 20 * FROM doctors;
where salary > 2000;

4.Select the last record in the doctors' table
Solve:
SELECT TOP 1 * FROM doctors ORDER BY ID DESC

5. Select all doctors that their first name is Ahmed 
Solve:
SELECT * from doctors  
where Fname = 'Ahmed';

6.Select all doctors  that their first name is Ahmed  and their last name is Ali
Solve:
SELECT * from doctors  
where Fname = 'Ahmed' and Lname ='ali';

7.list all patients that their first name contains "A"
Solve:
SELECT *
FROM patients
WHERE Fname LIKE 'A%';

8.view the first name  and the last name of the doctors from Alexandria
Solve:
SELECT Fname, Lname
FROM doctors
WHERE city = 'Alexandria';

9. select the employee that takes the highest salary
Solve:
SELECT MAX(salary) AS LargestSalary
FROM employees;

10. select the employee that takes the lowest salary
Solve:
SELECT Min(salary) AS MinSalary
FROM employees;

11.identify the total salaries for the employees monthly
Solve:
SELECT COUNT(salary)
FROM employees

12.identify the total salaries  for the employees monthly where the employee salary is more than 4000
Solve:
SELECT COUNT(salary)
FROM employees
where salary > 4000

11.identify the average salaries  for the employees monthly
Solve:
SELECT AVG(salary)
FROM employees

12. Select all doctors from Alexandria, Damanhour, and Damanhour
Solve:
SELECT * FROM doctors
WHERE Country IN ('Alexandria ', 'Damanhour', 'Damanhour');

13.Select all doctors that their salary between 2000 and 3000
Solve:
SELECT * FROM doctors
WHERE salary BETWEEN 2000 AND 3000;

14. Select all the different values from Fname form the doctor table 
Solve:
Select distinct Country FROM Customers;

15. return the number of doctors that their first name is equal to Mohamed
Solve:
 select  count (*) from students where firstName ='Mohamed'


16. try to make a query to copy data from one table to another table for the back ups
Solve:
SELECT * INTO backupTable
FROM doctors

17.delete the doctor that its first name is mohamed with id 
Solve:
DELETE FROM doctors WHERE id = (Select id from doctors where Fname = 'mohamed');

18.Update the doctor that its first name is mohamed with id to make his first name amr
Solve:
UPDATE doctors
SET fname = amr
WHERE id =(Select id from doctors where Fname='mohamed');

19.Select all doctors with their first name or their last name
Solve:
Select * from doctors
Where Fname='x' or Lname='x';

20.Select all doctors with their first name and their last name
Solve:
Select * from doctors
Where Fname='x' and Lname='y';









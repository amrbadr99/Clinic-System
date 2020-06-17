// 1. List the number of doctors in each clinic
SELECT COUNT (Id), clinic
  FROM doctors
 GROUP BY clinic

//2. List the number of employees in each clinic that stored from high to low
SELECT COUNT (Id), clinic
  FROM employee
 GROUP BY clinic
 ORDER BY COUNT (Id) DESC

// 3.List the number of reservations for each patient
SELECT SUM (R.TotalPrice), P.FirstName, P.LastName
  FROM [reservations] R JOIN patients P
    ON R.CustomerId = P.Id
 GROUP BY P.FirstName, P.LastName
 ORDER BY SUM (R.TotalPrice) DESC
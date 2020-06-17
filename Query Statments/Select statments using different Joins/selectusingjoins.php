//1. Select the day that our patient make a specifc reservation using "Inner Join"
SELECT
patients.Fname, reservations.day
FROM
patients
INNER JOIN reservations ON patients.id = '';


//2.select doctors in a specific clinic using "Left Join"
SELECT doctors.fname
FROM doctors
LEFT JOIN clinic
ON clinic.name = '';

//3.select doctors in a specific clinic using "Right Join"
SELECT doctors.fname
FROM doctors
RIGHT JOIN clinic
ON clinic.name = ''



//4.select doctors in a specific clinic using "Full Join"
SELECT doctors.fname
FROM doctors
Full JOIN clinic
ON clinic.name = ''


//5.select doctors in a specific clinic using "Self Join"
SELECT doctors.fname
FROM doctors
Self JOIN clinic
ON clinic.name = ''


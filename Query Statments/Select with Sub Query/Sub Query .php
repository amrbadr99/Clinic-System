//1. Select all employees that their first name is similar to the doctor that its id is equal to 3
Solve:
Select * from employees where Fname = "(Select Fname from doctors where id='3')";

//2. Check whether the current patient request has been accepted or refuse through his phone number
Select status from reservations where patient Id =(Select id from patients whose phone number = '123123' )


//3. Select a doctor from a specific clinic called 'a'
Select * form doctors where clinicId = (Selct id from clinics where name ='a');
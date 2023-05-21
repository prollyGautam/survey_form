<?php
   $name = $_POST['name'];
   $state = $_POST['state'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $ans = $_POST['ans'];
   $ans2 = $_POST['ans2'];
   $ans3 = $_POST['ans3'];
   $ans6 = $_POST['ans6'];
   $ans4 = $_POST['ans4'];
   $ans5 = $_POST['ans5'];
   $feedback = $_POST['feedback'];
   $ans7 = $_POST['ans7'];
   $ans8 = $_POST['ans8'];
   $ans9 = $_POST['ans9'];
   $ans10 = $_POST['ans10'];
   $ans11 = $_POST['ans11'];
   $ans12 = $_POST['ans12'];
   $ans13 = $_POST['ans13'];
   $ans14 = $_POST['ans14'];

   //Data connection
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "product survey db";
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
   if ($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
   }else {
       $stmt = $conn->prepare("insert into survey data(Name, State, Age, E-mail, Gender, Q1. Did you find everything that you were looking for?, Q2. Was it clear how you could reach out for help if you needed?, Q3. Did you get stuck at any points during the process?, Q4. Do you use our products very often?, Q5. How easily were you able to navigate the website?, Q6. How easily were you able to add your personal details?, Q7. How easy was the checkout process?, Q8. How likely are you to use other websites?, Q9. How likely are you continue using our website?, Q10. How likely are you to recommend this to someone?, Q11. What was your initial impression of our products?, Q12. How did you find our products quality?, Q13. How did you find our products wide range of selection?, Q14. How would you rate your overall experience?, Is there anything that we could do to make the process easier?)
       values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
       $stmt->bind_param("s s i s s s s s s s s s s s s s s s s s", $name, $state, $age, $email, $gender, $ans, $ans2, $ans3, $ans6, $ans4, $ans5, $feedback, $ans7, $ans8, $ans9, $ans10, $ans11, $ans12, $ans13, $ans14);
       $stmt->execute();
       echo "New record entered successfully";
       $stmt->close();
       $conn->close();
   }
?>
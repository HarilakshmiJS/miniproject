<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
 $username = $_POST["username"];
 $password = $_POST["password"];

 $username_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
 $password_pattern ="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
 

 $errors = [];

 if (!preg_match($username_pattern, $username)) 
 {
 $errors[] = "Invalid email format. ";
 }

 if (!preg_match($password_pattern, $password)) 
 {
 $errors[] = "Invalid password.";
 }
 
    if (empty($errors)) 
    {
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password ."<br>";
    
    } 
    else 
    {
    foreach ($errors as $error) 
    {
    echo $error . "<br>";
    }
    }
   }
?>
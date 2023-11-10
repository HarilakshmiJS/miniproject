<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
 $new_username = $_POST["new-username"];
 $new_password = $_POST["new-password"];
 $confirm_password = $_POST["confirm-password"];

 $username_pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
 $password_pattern ="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
 $confirm_password_pattern ="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

 $errors = [];

 if (!preg_match($username_pattern, $new_username)) 
 {
 $errors[] = "Invalid email format. ";
 }

 if (!preg_match($password_pattern, $new_password)) 
 {
 $errors[] = "Invalid password.";
 }

 if (!preg_match($confirm_password_pattern, $confirm_password)) 
 {
 $errors[] = "Invalid password.";
 }
 
    if (empty($errors)) 
    {
    echo "Username: " . $new_username . "<br>";
    echo "Password: " . $new_password ."<br>";    
    echo "Confirm Password: " . $confirm_password ."<br>";
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
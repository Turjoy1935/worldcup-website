<?php 
session_start();

$error = "";

if (array_key_exists("signUp", $_POST)) {
 
     // Database Link
    include('linkDB.php');  
 
    //Taking HTML Form Data from User
    $name = mysqli_real_escape_string($linkDB, $_POST['name']);
    $email = mysqli_real_escape_string($linkDB, $_POST['email']);
    $phone = mysqli_real_escape_string($linkDB, $_POST['phone']);
    
     
    // PHP form validation PHP code
    if (!$name) {
      $error .= "Name is required <br>";
     }
    if (!$phone) {
        $error .= "phone is required <br>";
    }
    
    if (!$email) {
        $error .= "Email is required <br>";
     }
    
     if ($error) {
        $error = "<b>There were error(s) in your form!</b> <br>".$error;
     }  else {
       
        //Check if email is already exist in the Database
 
        $query = "SELECT id FROM users WHERE email = '$email'";
        $result = mysqli_query($linkDB, $query);
        if (mysqli_num_rows($result) > 0) {
            $error .="<p>Your email has taken already!</p>";
        } else {
 
           
            $query = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
             
            if (!mysqli_query($linkDB, $query)){
                $error ="<p>Could not sign you up - please try again.</p>";
                } else {
 
                    //session variables to keep user logged in
                $_SESSION['id'] = mysqli_insert_id($linkDB);  
                $_SESSION['name'] = $name;
 
                //Setcookie function to keep user logged in for long time
                if ($_POST['stayLoggedIn'] == '1') {
                setcookie('id', mysqli_insert_id($linkDB), time() + 60*60*365);
                //echo "<p>The cookie id is :". $_COOKIE['id']."</P>";
                }
                  
             
                header("Location: project.php");  
             
                }
             
            }
 
        }  
    }
 
?>
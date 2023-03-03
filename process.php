<?php
//validating data before saving it

//if the name element of the post array is Empty
if(empty($_POST["Names"])){
  //stop the script with a suitable message name is required
  die("Name is required");
}
//if email element of the post array is invalid
//if false
if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
  //stop the script with a suitable message name is required
  die("valid email is required");
}

//if password element of the post arry less than six characters
if(strlen($_POST["Password"])<5){
  //stop the script with a suitable message name is required
  die("Password shoud be atleast 6 characters long");
}
//if password doesnt contain atleast a letter
if(!preg_match("/[a-z]/i", $_POST["Password"])){
  die("Password should contain atleast one letter");
}
//if password doesnt contain atleast a number
if(!preg_match("/[0-9]/", $_POST["Password"])){
  die("Password should contain atleast one number");
}
//if password matches theconfirmation password
if($_POST["Password"] !==$_POST["password_confirmation"]){
  die("Passwords dont match");
}
//getting data from the form
print_r($_POST); //post super global
 ?>

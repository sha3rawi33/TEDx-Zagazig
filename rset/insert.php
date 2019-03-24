<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "ted-x");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$full_name = mysqli_real_escape_string($link, $_REQUEST['full_name']);
$designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$contact_no = mysqli_real_escape_string($link, $_REQUEST['contact_no']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$field = mysqli_real_escape_string($link, $_REQUEST['field']);
$brief_description= mysqli_real_escape_string($link, $_REQUEST['brief_description']);
$topic = mysqli_real_escape_string($link, $_REQUEST['topic']);
$tedx_past = mysqli_real_escape_string($link, $_REQUEST['tedx_past']);
$old_link = mysqli_real_escape_string($link, $_REQUEST['old_link']);
$other_talks = mysqli_real_escape_string($link, $_REQUEST['other_talks']);
 
// Attempt insert query execution
$sql = "INSERT INTO submissions (full_name, designation, email, contact_no, address, field, brief_description, topic, tedx_past, old_link, other_talks) VALUES ('$full_name', '$designation', '$email', '$contact_no', '$address', '$field', '$brief_description', '$topic', '$tedx_past', '$old_link', '$other_talks')";
if(mysqli_query($link, $sql)){
          header('location: success.html');
        die;
} else{
    header ('location: failed.html');
	die;
}

 
// Close connection
mysqli_close($link);
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "forthesakeofourstartup", "tedx");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Age = mysqli_real_escape_string($link, $_REQUEST['Age']);
$Phone = mysqli_real_escape_string($link, $_REQUEST['Phone']);
$Facebook = mysqli_real_escape_string($link, $_REQUEST['Facebook']);
$Company = mysqli_real_escape_string($link, $_REQUEST['Company']);
$Profession = mysqli_real_escape_string($link, $_REQUEST['Profession']);
$Attended = mysqli_real_escape_string($link, $_REQUEST['Attended']);
$Contribute = mysqli_real_escape_string($link, $_REQUEST['Contribute']);
$Art = mysqli_real_escape_string($link, $_REQUEST['Art']);
$Scince = mysqli_real_escape_string($link, $_REQUEST['Scince']);
$Technology = mysqli_real_escape_string($link, $_REQUEST['Technology']);
$Entrepreneurship = mysqli_real_escape_string($link, $_REQUEST['Entrepreneurship']);
$History = mysqli_real_escape_string($link, $_REQUEST['History']);
$Psychology = mysqli_real_escape_string($link, $_REQUEST['Psychology']);
$Astronomy = mysqli_real_escape_string($link, $_REQUEST['Astronomy']);
$Other = mysqli_real_escape_string($link, $_REQUEST['Other']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$About = mysqli_real_escape_string($link, $_REQUEST['About']);
$Links = mysqli_real_escape_string($link, $_REQUEST['Links']);
$Hope = mysqli_real_escape_string($link, $_REQUEST['Hope']);
 
// Attempt insert query execution
$sql = "INSERT INTO Tickets (Name, Age, Phone, Facebook, Company, Profession,  National,  Attended, Contribute, Art, Scince, Technology, Entrepreneurship, History, Psychology, Astronomy, Other, Email, Gender, About, Links, Hope) 
VALUES ('$Name', '$Age', '$Phone', '$Facebook', '$Company', '$Profession', '$National', '$Attended', '$Contribute', '$Art', '$Scince', '$Technology', '$Entrepreneurship', '$History', '$Psychology', '$Astronomy', '$Other', '$Email', '$Gender', '$About', '$Links', '$Hope')";
//if(mysqli_query($link, $sql)){
  //  echo "Records added successfully.";
//} else{
  //  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
 

// Close connection
mysqli_close($link);

header("Location: https://https://tedxzagazig.com/register");
?>

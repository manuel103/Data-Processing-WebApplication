<?php
if(isset($_POST['submit'])){
$mysqli = new mysqli("localhost", "root", "", "datacollected");
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$gender = $mysqli->real_escape_string($_REQUEST['gender']);
$age = $mysqli->real_escape_string($_REQUEST['age']);
$period = $mysqli->real_escape_string($_REQUEST['period']);
$education = $mysqli->real_escape_string($_REQUEST['education']);
$living = $mysqli->real_escape_string($_REQUEST['living']);

$marriage = $mysqli->real_escape_string($_REQUEST['marriage']);
$residence = $mysqli->real_escape_string($_REQUEST['residence']);
$nationality = $mysqli->real_escape_string($_REQUEST['nationality']);
$religion = $mysqli->real_escape_string($_REQUEST['religion']);
$ethnicity = $mysqli->real_escape_string($_REQUEST['ethnicity']);
$otherlanguage = $mysqli->real_escape_string($_REQUEST['otherlanguage']);
$health = $mysqli->real_escape_string($_REQUEST['health']);
$household = $mysqli->real_escape_string($_REQUEST['household']);
$rent = $mysqli->real_escape_string($_REQUEST['rent']);
$rooms = $mysqli->real_escape_string($_REQUEST['rooms']);
$cars = $mysqli->real_escape_string($_REQUEST['cars']);
$computer = $mysqli->real_escape_string($_REQUEST['computer']);
$employment = $mysqli->real_escape_string($_REQUEST['employment']);
$income = $mysqli->real_escape_string($_REQUEST['income']);
 
// attempt insert query execution
$sql = "INSERT INTO formdata (gender,Age, period, education, living, marriage, residence, nationality, religion, ethnicity,
otherlanguage, health, household, rent, rooms, cars, computer, employment, income) 

VALUES ('$gender','$age','$period', '$education','$living',
'$marriage','$residence','$nationality','$religion','$ethnicity','$otherlanguage','$health','$household','$rent','$rooms','$cars',
'$computer','$employment','$income');";

if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
}
?>
<?php
//Start session
session_start();
 
//Include database connection details
include('connect.php');
 
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
 
//Sanitize the POST values
$regno = clean($_POST['regno']);
$password = clean($_POST['password']);

//Create query
$qry="SELECT * FROM students WHERE password='$password' AND regno='$regno'";
$result=mysql_query($qry);
 
//Check whether the query was successful or not
if($result) {
if(mysql_num_rows($result) > 0) {
//Login Successful
session_regenerate_id();
$member = mysql_fetch_assoc($result);
//$_SESSION['SESS_MEMBER_ID'] = $member['id'];
$_SESSION['SESS_FIRST_NAME'] = $member['regno'];
$_SESSION['SESS_LAST_NAME'] = $member['password'];
session_write_close();
header("location:student.php");
exit();
}else {
//Login failed
$errmsg_arr[] = 'USERNAME AND PASSWORD NOT FOUND';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
}
}else {
die("Query failed");
}
?>
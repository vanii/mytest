<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Student Information Center:: Institute of Computing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function validateForms()
{
var a=document.forms["login"]["username"].value;
var b=document.forms["login"]["password"].value;
if (a==null || a=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>

<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>
<body background="admin/images/1019286_abstract_orange_tiles_background_.jpg">


<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="admin/images/computer.jpg" width="304" height="42" /></h1>
      <h1 align="center" class="heading"><img src="admin/images/cooltext457954659.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center">
<?php
error_reporting(0);
include('connect.php');
?>
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

			<?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<div id="error">';
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>';
			}
			echo '</ul>';
			echo '</div>';
			unset($_SESSION['ERRMSG_ARR']);
			}
			?>
		
					<img align="center" height="55" height="55"src="images/lightbulb.png">
					<table align="center">
					   <tr>
					    <td>
							<p align="center"><font size="20">Welcome ADMIN!</font></h1>
						<td>
					   </tr>
					    <tr>
						  <td>
							<p><font color="red"><marquee>Please input correct login credentials ..Otherwise you shall be redirected to Main Screen<marquee></font></p>
							</td>
						 <tr>
					</table>
							
			<hr color="brown" height="20px"></hr>	
			<table align="center">
			  <tr>
			     <td>
            	<form action="valid.php" method="post" name="login" onSubmit="return validateForms()"">
					Username: </h1><br><input type="text" name="username" /><br>
					Password: <br><input type="password" name="password" /><br><br>
					<input type="submit" value="Log In" >
				</form>
				</td>
				</tr>
            </table>
                        <hr></hr>

        
      </p>
  <p align="center">&nbsp;</p>
      <center>
       
      </center>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>
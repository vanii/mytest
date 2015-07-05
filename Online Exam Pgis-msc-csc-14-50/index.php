<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Student Information Center:: Institute of Computing</title>
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
.linki {
	font-weight: bold;
	font-size: 36px;
}
-->
</style>
</head>

<body background="admin/images/1019286_abstract_orange_tiles_background_.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
  
    <td><h1 align="center" class="heading"><img src="admin/images/computer.png" width="304" height="120" /></h1>
      <h1 align="center" class="heading"><img src="admin/images/cooltext457954659.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center">
	  <hr><p align="center"> PLEASE LOGIN  BELOW</font></p></hr>
       <?php 
	 	/* $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>Roll No.</b></td><td><b>Reg No.</b></td><td><b>Deparment</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";*/
	 ?>
        
      </p>
	  <table border color="red" align="center"width="50%"  style="background-color: #CC3389;">
	  <tr>
	  <td>
  <p align="center">&nbsp;</p>
        <p align="center"><span class="linki">1.</span><a href="studentlogin.php"><!--<img border="0" src="admin/images/cooltext457954859.png" onmouseover="this.src='images/studentMouseOver.png';" onmouseout="this.src='images/student.png';" />--><span class="linki">Student</span></a><span class="linki"></br> 2.</span> <a href="admin.php"><!--<img src="admin/images/cooltext457954941.png" alt="ADMINISTRATOR" border="0" onmouseover="this.src='images/adminMouseOver.png';" onmouseout="this.src='images/cooltext457954941.png';" />-->
        <span class="linki">Admin</span></a><!--<a href="help.php"><img border="0" src="images/help.png" onmouseover="this.src='images/helpMouseOver.png';" onmouseout="this.src='images/help.png';" /></a></p>-->
      <center>
       
      </center>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</td>
</tr>
</table>
</body>
</html>
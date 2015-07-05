<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Best wishes</title>

<script language="javascript">

var mins
var secs;

function cd() {
 	mins = 1 * m("5"); // change minutes here
 	secs = 0 + s(":01"); 
 	redo();
}

function m(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(0, i));
}

function s(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
 	var disp;
 	if(mins <= 9) {
  		disp = " 0";
 	} else {
  		disp = " ";
 	}
 	disp += mins + " .";
 	if(secs <= 9) {
  		disp += "0" + secs;
 	} else {
  		disp += secs;
 	}
 	return(disp);
}

function redo() {
 	secs--;
 	if(secs == -1) {
  		secs = 59;
  		mins--;
 	}
 	document.cd.disp.value = dis(mins,secs); // setup additional displays here.
 	if((mins == 0) && (secs == 0)) {
  		window.alert(" Hey Time is up. Press OK to continue."); 
  		 window.location = "results_random.php" // redirects to specified page once timer ends and ok button is pressed
 	} else {
 		cd = setTimeout("redo()",1000);
 	}
}

function init() {
  cd();
}
window.onload = init;
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

.clock {
	font-family: "Lucida Console", Monaco, monospace;
	font-size: 18px;
	color: #FF0000;
}
.labe {
	font-size: 14px;
	font-weight: bold;
	font-family: "Comic Sans MS", cursive;
}


	
-->
</style>
</head>

<body background="admin/images/1019286_abstract_orange_tiles_background_.jpg" >
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
         <td><p align="center"><img src="admin/images/computer.jpg" width="170" height="33" alt="About" /></p>
              
<table width="80%" align="center">
<tr><td>
<center><h2><u> END OF SEMESTER II EXAMINATION</u><h2></center>
<tr align="right"><td><form name="cd">
  <label>
  <span class="labe">Remaining Time</span>:
  <input name="disp" type="text" class="clock" id="txt" value="10:00" size="10" readonly="true" align="right" border="1" />
  <span class="labe">Minutes</span>
</form></td></tr>
<form action="results_random.php" method="post">
  <?php
if (isset($_POST['cmdSubmit'])) {

}
$n = 20; // this is the declaration of the total item on your quiz and array is used as a sttorage of 	          //the question in order to display it in random
$links=array('Which are the two binary numbers?<br><br> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="1 and O"> 1 and O<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="2 and 0"> 2 and O<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q1" value="1 to 9"> 1 to 9</p>', 
               
			    'It is a standard specifying a power saving feature.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q2" value="PnP"> PnP<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q2" value="ACPI"> ACPI<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q2" value="BIOS"> BIOS</p>',
               
			    'A part of a computer processor that carries out computation.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q3" value="CU"> CU<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="CPU"> CPU<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="ALU"> ALU<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q3" value="RAM"> RAM</p>', 
              
			    'An output which is a printed one.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q4" value="CLEAR COPY"> CLEAR COPY<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="HARDCOPY">HARDCOPY<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="SOFTCOPY"> SOFTCOPY<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q4" value="PHOTOCOPY"> PHOTOCOPY</p>',
			
				'A continous and additive process and simplifies quantitative changes<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer" ></p>',
						
				'The speed of computer is measured by.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q5" value="bit"> bit<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q5" value="byte"> byte<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q5" value="hertz"> hertz</p>',
						
				'Operating system that was first introduced in 1984 with Macintosh Computer.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q6" value="OS/2"> OS/2<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q6" value="Mac OS"> Mac OS<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q6" value="UNIX"> UNIX</p>',
						
				'The first operating system used by IBM computers.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q7" value="DOS"> DOS<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q7" value="Windows 9x/Me"> Windows 9x/Me<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q7" value="Linux"> Linux</p>',
						
				'It is a component of operating system that exposes function to user and applications.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q8" value="Shell"> Shell<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q8" value="Kernel"> Kernel<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q8" value="Shell and Kernel"> Shell and Kernel</p>',
						
				'It is a primary graphical interface to operating system. <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q9" value="Windows Explorer"> Windows Explorer<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q9" value="Windows Desktop"> Windows Desktop<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q9" value="Windows Help"> Windows Help</p>',
						
				'Most important electrical component of computer is: <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q10" value="Operating System"> Operating System<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q10" value="Power Supply"> Power Supply<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q10" value="Application Software"> Application Software</p>',
						
				'It visually displays primary-output of computer.<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer2" ></p>',
				
				'What does TCP stands for?<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer3" ></p>',
						
						
						
						
				'It provides a way to perform task without a mouse. <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q13" value="Key Stroke Short Cuts"> Key Stroke Short Cuts<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q13" value="Device Manager"> Device Manager<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q13" value="System Information"> System Information</p>',
						
				'Refers to Windows 95, Windows 98, Windows Me and designed to bridge legacy and newer technologies <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q14" value="Windows NT"> Windows NT<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q14" value="DOS"> DOS<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q14" value="Windows 9x/Me"> Windows 9x/Me</p>',
						
				'What is the code name of Windows Vista?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q15" value="Long Horn"> Long Horn<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q15" value="Short Horn"> Short Horn<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q15" value="Middle Horn"> Middle Horn</p>',
						
				'Device providing temporary storage.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q16" value="ROM"> ROM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q16" value="RAM"> RAM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q16" value="RIMM"> RIMM</p>',
						
				'An access point located in back or front of case. <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q17" value="port">port<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q17" value="mouse"> mouse<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q17" value="keyboard"> keyboard</p>',
					
				
				'One MegaHertz is equivalent to?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q18" value="1 Billion cycle/second"> 1 Billion cycle/second<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q18" value="100 cycle/second"> 100 cycle/second<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q18" value="1 million cycle/second"> 1 million cycle/second</p>',
						
				'What is the range of CPU speed?<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q19" value="166 MHz to 4 GHz"> 166 MHz to 4 GHz<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q19" value="166 GHz to 4 MHz"> 166 GHz to 4 MHz<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q19" value="167 MHz to 4 GHz"> 167 MHz to 4 GHz</p>',
						
				'It enables secondary storage device to interface with the motherboard. <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q20" value="ROM">ROM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="Computer"> Computer<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q20" value="Parallel and Serial ATA Standard"> Parallel and Serial ATA Standard</p>',							
						
			    'An output which can be seen in the screen.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q21" value="CLEAR COPY"> CLEAR COPY<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="HARDCOPY">HARDCOPY<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="SOFTCOPY"> SOFTCOPY<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q21" value="PHOTOCOPY"> PHOTOCOPY</p>',
						
				'Smallest unit of data in a computer system.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q22" value="BYTE"> BYTE<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q22" value="KILOBYTE">KILOBYTE<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q22" value="MEGABYTE"> MEGABYTE<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q22" value="BIT"> BIT</p>',
						
				'Part of main memory where it stores data temporarirly.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q23" value="ROM"> ROM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q23" value="FLOPPY DISK">FLOPPY DISK<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q23" value="RAM"> RAM<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q23" value="HARD DISK"> HARD DISK</p>',
						
				'Software designed for hardware related task.<br><br>&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="radio" name="q24" value="Hardware"> Hardware<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q24" value="Application Software">Application Software<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q24" value="System Software"> System Software<br>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="q24" value="RAM"> RAM</p>',
						
				'What do you call the group of microchips controlling data flow?<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; answer: &nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="answer4" ></p>'
            ); 
			
// displaying the array in random until $n number is satisfied
$rand_keys = array_rand($links, $n);
echo "<center>". "<br><table><tr><td>";

echo "1.&nbsp;&nbsp;". $links[$rand_keys[0]] . "<br>";
echo "</td></tr><tr><td>";
echo "2.&nbsp;&nbsp;".$links[$rand_keys[1]] . "<br>";
echo "</td></tr><tr><td>";
echo "3.&nbsp;&nbsp;". $links[$rand_keys[2]] . "<br>";
echo "</td></tr><tr><td>";
echo "4.&nbsp;&nbsp;".$links[$rand_keys[3]] . "<br>";
echo "</td></tr><tr><td>";
echo "5.&nbsp;&nbsp;".$links[$rand_keys[4]] . "<br>";
echo "</td></tr><tr><td>";
echo "6.&nbsp;&nbsp;".$links[$rand_keys[5]] . "<br>";
echo "</td></tr><tr><td>";
echo "7.&nbsp;&nbsp;".$links[$rand_keys[6]] . "<br>";
echo "</td></tr><tr><td>";
echo "8.&nbsp;&nbsp;".$links[$rand_keys[7]] . "<br>";
echo "</td></tr><tr><td>";
echo "9.&nbsp;&nbsp;".$links[$rand_keys[8]] . "<br>";
echo "</td></tr><tr><td>";
echo "10.&nbsp;&nbsp;".$links[$rand_keys[9]] . "<br>";
echo "</td></tr><tr><td>";
echo "11.&nbsp;&nbsp;". $links[$rand_keys[10]] . "<br>";
echo "</td></tr><tr><td>";
echo "12.&nbsp;&nbsp;".$links[$rand_keys[11]] . "<br>";
echo "</td></tr><tr><td>";
echo "13.&nbsp;&nbsp;". $links[$rand_keys[12]] . "<br>";
echo "</td></tr><tr><td>";
echo "14.&nbsp;&nbsp;".$links[$rand_keys[13]] . "<br>";
echo "</td></tr><tr><td>";
echo "15.&nbsp;&nbsp;".$links[$rand_keys[14]] . "<br>";
echo "</td></tr><tr><td>";
echo "16.&nbsp;&nbsp;".$links[$rand_keys[15]] . "<br>";
echo "</td></tr><tr><td>";
echo "17.&nbsp;&nbsp;".$links[$rand_keys[16]] . "<br>";
echo "</td></tr><tr><td>";
echo "18.&nbsp;&nbsp;".$links[$rand_keys[17]] . "<br>";
echo "</td></tr><tr><td>";
echo "19.&nbsp;&nbsp;".$links[$rand_keys[18]] . "<br>";
echo "</td></tr><tr><td>";
echo "20.&nbsp;&nbsp;".$links[$rand_keys[19]] . "<br>";
/*
you can add numbers according to your needs */
echo "</td></tr></table>";
echo "<center>". "<br>";



//for($i=0; $i<$n; $i++)
//{
//echo $rand_keys[$i]."<br>";
//}

?>
  <input name="cmdSubmit" type="submit" id="cmdSubmit" value="Submit"/>
<input type="hidden" name="quest" value="quiz00.php">
</form>

</td></tr></table>
      <center>
        
      </center>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
<table>
<tr><td>&nbsp;</td></tr>
</table>
</body>
</html>

<?php
include ("../Control/Transporter_Reg_Process_chk.php");
?>
<!DOCTYPE html>
<html>

<title>REGISTRATION</title>
	<head>
	<link rel="stylesheet" type="text/css" href="../Style/form.css">
	<script src="../JS/SFJS.js"></script>

	</head>
<body>
<h2><p id=labels2>GET REGISTERTED</P></h2>
<div id="box">
<form  action="" method="POST"  onsubmit="return transporterformcheck()" >
<p id="message"></p>

    <p id="labels">Name:
	<input type="text" placeholder="Enter Full Name" name="name" id="name"></p>

	<p id=labels>National Id:
	<input type="number" placeholder="Enter National ID" name="nid" id="nid"></p>

	<p id="labels">Mobile:
	<input type="tel" name="mobile" placeholder="012-3456-7891" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" required></p>
	  
	<p id="labels">Transports Model:
	<input type="text" name="model" id="model"></p>

    <p id="labels">Transports Number:
	<input type="text" name="tnumber" id="tnumber"></p>

	<p id="labels">License Issue Date:<input type="date" name="lid" id="lid"></p>

	<p id="labels">License Expire Date:<input type="date" name="led" id="led"></p>


    <p id="labels">Experience:</p> <input type="radio" name="experience" id="2years" value="2years">Less than 2 Years
    <input type="radio" name="experience" id="3-5years" value="3-5years">3-5 Years
    <input type="radio" name="experience" id=">5years" value=">5years">More than 5 years

	<p id="labels"> Availability:<p> <input type="checkbox" id="availability" name="availability" value="Morning_Shift(7AM-12PM)">Morning Shift [8 AM - 12 PM]
    <input type="checkbox" id="availability"  name="availability" value="Afternoon_Shift(1PM-6PM)">Afternoon Shift [1 PM - 6 PM]
    <input type="checkbox" id="availability" name="availability" value="Night_Shift(7PM-12AM)">Night Shift [7 PM - 12 AM] 
	  

	<label><p id="labels">Set an username:<input type="text"  placeholder="Set an username" name="uname" id="uname"></p></label>

<label><p id="labels">Set a Password:<input type="password" placeholder="Set Password" name="pass" id="pass"></p></label>

<label><input type="submit" name="submit" class="button submitbutton" value="Submit"></label>
	<label><input type="Reset" class="button rbutton"></label>
    <label><div class=lbox><a href="Login.php"> LOGIN</a></div></br>
	<div class=lbox1> <a href="../View/Home.php"> GO BACK</a></div></label>
</form>
</div>
</body>
</html>
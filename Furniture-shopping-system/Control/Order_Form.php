<?php
 include ("../Control/Order_Form_Process.php");
?>
<!DOCTYPE html>
<html>
<title>PLACING ORDER</title>
	<head>
	<link rel="stylesheet" type="text/css" href="../Style/form.css">
	<script src="../JS/OJS.js"></script>
	</head>
<body>
<h2><p id=labels2>PLACE YOUR ORDER</P></h2>
<div id="box">
<form action="" method="POST" onsubmit="return orderformcheck()" >

<p id="message"></p>

<p id="labels">Name:
	<input type="text" placeholder="Enter Full Name" name="name" id="name"></p>

 <label><p id="labels">Enter your Username:<input type="text"  placeholder="Enter username" name="uname" id="uname" ></p></label>

 <label><p id="labels">Enter Your Password:<input type="password" placeholder="Enter Password" name="pass" id="pass" ></p></label>

 <p id="labels">Mobile:
	<input type="tel" name="mobile" placeholder="012-3456-7891" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" required></p>

 <p id=labels> Detailed Address : <input type="text" placeholder="Present Address" name="address" id="address"></p>

 <p id=labels>Destination Address:<input type="text" placeholder="Where to go?" name="d_address" id="d_address"></p>
	
 <p id=labels>Shifter Needed:
	<input type="number" placeholder="How Many Person Do You Need" name="person" id="person"></p>

    <p id=labels>Transport Needed:</p><input type="radio" name="car" value="Yes" id="yes">Yes
    <input type="radio" name="car" value="No" id="no">No

    <p id=labels>When Do You Want To Shift:</p>  <input type="checkbox" id="time" name="time" value="Morning_Shift(8AM-12PM)">Morning Shift [8 AM - 12 PM]
 <input type="checkbox" name="time" id="time" value="Afternoon_Shift(1PM-6PM)">Afternoon Shift [1 PM - 6 PM]
 <input type="checkbox" name="time" id="time" value="Night_Shift(7PM-12AM)">Night Shift [7 PM - 12 AM] 
 </br><br>

	
	<label><input type="submit" name="Submit" class="button submitbutton" value="Submit"></label>
	<label><input type="Reset" class="button rbutton"></label>
    <label><div class=lbox><a href="../View/Client_Login.php"> LOG OUT</a></div></br>
	<div class=lbox1> <a href="../View/Client.php"> GO BACK</a></div></label>
</form>
</div>
</body>
</html>
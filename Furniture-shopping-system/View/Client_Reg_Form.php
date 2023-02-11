<?php
 include ("../Control/Client_Reg_Process_chk.php");
?>
<!DOCTYPE html>
<html>
<title>REGISTRATION</title>
	<head>
	<link rel="stylesheet" type="text/css" href="../Style/form.css">

	<script src="../JS/SFJS.js"></script>
	</head>
<body> <h3> <t>WELCOME TO SHIFTING PARTNER.</t>
<t>HIRE THE BEST SERVICE IN TOWN</t><button><div class="button2 ">X</div></button></h3>
<h3 style="color:red; font-family:courier; font-size: 20px; border:5px solid black;background-color:blue;" >

<h2><p id=labels2>GET REGISTERTED</P></h2>
<div id="box">
<form  action="" method="POST"  onsubmit="return clientformcheck()" >
<p id="message"></p>

    <p id="labels">Name:
	<input type="text" placeholder="Enter Full Name" name="name" id="name"></p>

	<p id=labels>National Id:
	<input type="number" placeholder="Enter National ID" name="nid" id="nid"></p>

	<p id=labels> Address : <input type="text" name="address" id="address"></p>
	  
	<p id=labels> Email:
	<input type="email" name="email" id="email"></p>
	  
	<p id="labels">Mobile:
	<input type="tel" name="mobile" placeholder="012-3456-7891" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" required></p>

    <label><p id="labels">Set an username:<input type="text"  placeholder="Set an username" name="uname" id="uname" ></p></label>

<label><p id="labels">Set a Password:<input type="password" placeholder="Set Password" name="pass" id="pass" ></p></label>

	
<label><input type="submit" name="submit" class="button submitbutton" value="Submit"></label>
	<label><input type="Reset" class="button rbutton"></label>
    <label><div class=lbox><a href="Login.php"> LOGIN</a></div></br>
	<div class=lbox1> <a href="../View/Home.php"> GO BACK</a></div></label>
</form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("t").hide();
  });
});
</script>
</html>
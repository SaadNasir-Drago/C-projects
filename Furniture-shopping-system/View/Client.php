<?php
include ("../Control/Client_Reg_Process_chk.php")
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
<link rel="stylesheet" type="text/css" href="../Style/form.css">

</head>
<body>
<div id="box">
<h1><div id="labels"> SHIFTING  PARTNER </div></h1><hr>
<h2><div id="labels"> CLIENT </div></h2><hr></br>

    <h2><a href="../Control/Order_Form.php"><div class="box"> ---Place Your Order---</div></a></h2><br>



<form action="" method="post">
<input type="text" name="searchbar2" placeholder="Enter your name" id="name" onkeyup="return fetchuser()">
<p id="message"></p>
        <input type="submit" name="search" class="box"  value="Change Your Details">
        </form>

<h2>YOUR DETAILED INFO</h2>
<form action="" method="post">
        <input type="text" name="name" value="<?php echo $name;?>">
        <input type="number" name="nid" value="<?php echo $nid;?>">
        <input type="text" name="address" value="<?php echo $address;?>">
        <input type="text" name="email" value="<?php echo $email;?>">
        <input type="number" name="mobile" value="<?php echo $mobile;?>"><br></br>
        <input type="submit" name="update" id="btn23" value="Update Info">
        </form>



</br><h2><a href="../Control/Client_Logout.php">Logout</a></h2>
</div>
<script src="../JS/CLJS.js"></script>
</body>
</html>





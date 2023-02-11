<?php
include ("../Control/Shifter_Reg_Process_chk.php")
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
<link rel="stylesheet" type="text/css" href="../Style/form.css">

</head>
<body>
<div id="box">
<h1><div id="labels"> SHIFTING  PARTNER </div></h1><hr>
<h2><div id="labels"> SHIFTER </div></h2><hr></br>

<form action="" method="post">
<input type="text" name="searchbar2" placeholder="Enter your name">
        <input type="submit" name="search" id="btn12" value="See Your Details">
        </form>

        <h2>YOUR DETAILED INFO</h2>
<form action="" method="post">
        <input type="text" name="name" value="<?php echo $name;?>">
        <input type="number" name="nid" value="<?php echo $nid;?>">
        <input type="number" name="mobile" value="<?php echo $mobile;?>">
        <input type="text" name="dob" value="<?php echo $dob;?>">
        <input type="text" name="gender" value="<?php echo $gender;?>">
        <input type="text" name="availability" value="<?php echo $availability;?>">
        <br></br><br></br>
        <input type="submit" name="update" id="btn23" value="Update Info">
        </form>



</br><h2><a href="../Control/Shifter_Logout.php">Logout</a></h2>
</div>
</body>
</html>





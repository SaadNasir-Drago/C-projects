
<?php
include ("../Control/Transporter_Reg_Process_chk.php")
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">


</head>
<body>
<h1><div id="labels"> SHIFTING  PARTNER </div></h1><hr>
<h2><div id="labels"> TRANSPORTER </div></h2><hr></br>



<form action="" method="post">
<div class="center3"><input type="text" name="searchbar2" placeholder="Enter your name"></div>
        <input type="submit" name="search" id="btn12" value="See Your Details">
        </form>

        <h2>YOUR DETAILED INFO</h2>
<form action="" method="post">
        <input type="text" name="name" value="<?php echo $name;?>">
        <input type="text" name="nid" value="<?php echo $nid;?>">
        <input type="text" name="model" value="<?php echo $model;?>">
        <input type="text" name="tnumber" value="<?php echo $tnumber;?>">
        <input type="text" name="lid" value="<?php echo $lid;?>">
        <input type="text" name="led" value="<?php echo $led;?>">
        <input type="text" name="experience" value="<?php echo $experience;?>">
        <input type="text" name="availability" value="<?php echo $availability;?>">        <br></br><br></br>

        <input type="submit" name="update" id="btn23" value="Update Info">
        </form>












</br></br><h2><a href="../Control/Transporter_Logout.php">Logout</a></h2>
</body>
</html>






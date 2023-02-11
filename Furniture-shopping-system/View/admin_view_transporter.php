<?php
include ("../Control/Admin_Process.php")
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/form.css">
    </head>
    <body>
    
    <div id="box">
<form action="" method="post">
<input type="submit" name="rtransporter" value="REGISTERED Transporter"><br><br>
<input type="text" name="searchbar2" placeholder="Enter Transporter Name to search " id="name" onkeyup="return fetchuser();"><br> <br>
        <input type="submit" name="searchtransporter" value="Search">
        <p id="message"></p>

<input type="submit" name="deletetransporter" value="Delete">
<br>
        
        <input type="text" name="name" value="<?php echo $tname;?>"><br>
        <input type="text" name="nid" value="<?php echo $tnid;?>"><br>
        <input type="text" name="model" value="<?php echo $tmodel;?>"><br>
        <input type="text" name="tnumber" value="<?php echo $ttnumber;?>"><br>
        <input type="text" name="lid" value="<?php echo $tlid;?>"><br>
        <input type="text" name="led" value="<?php echo $tled;?>"><br>
        <input type="text" name="experience" value="<?php echo $texperience;?>"><br>
        <input type="text" name="availability" value="<?php echo $tavailability;?>"><br>
        <input type="submit" name="updatet" value="Update Info"><br>
        </form>
        
        <div class=lbox1> <a href="../View/Admin.php"> GO BACK</a></div></label>
</div>
        <script src="../JS/TPJS.js"></script>
    </body>
</html>
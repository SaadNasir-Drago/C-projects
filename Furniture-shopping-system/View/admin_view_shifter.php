<?php
include ("../Control/Admin_Process.php")
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../Style/form.css">
    </head>
    <body>
    

<form action="" method="post">
<div id="box">
        <input type="submit" name="rshifter"  value="REGISTERED SHIFTER"><br><br>

        <input type="text" name="searchbar1" placeholder="Enter Shifter name" id="name" onkeyup="return fetchuser();">    
        <p id="message"></p>

        <input type="submit" name="searchshifter" value="Search">

        <input type="submit" name="deleteshifter" value="Delete">
        </form>

        <form action="" method="post">
        Name:<input type="text" name="name" value="<?php echo $name;?>">
        <br>
        Nid:<input type="number" name="nid" value="<?php echo $nid;?>">
        <br>
        Mobile:<input type="number" name="mobile" value="<?php echo $mobile;?>">
        <br>
        Date of birth:<input type="text" name="dob" value="<?php echo $dob;?>">
        <br>
        Gender:<input type="text" name="gender" value="<?php echo $gender;?>">
        <br>
        Availability:<input type="text" name="availability" value="<?php echo $availability;?>">
        <br>
        Username:<input type="text" name="availability" value="<?php echo $uname;?>">
        <br>
        password:<input type="text" name="availability" value="<?php echo $pass;?>">
        <br>

        <input type="submit" name="updates" value="Update Info">

        <div class=lbox1> <a href="../View/Admin.php"> GO BACK</a></div></label>
        
</div>
        </form>
        <script src="../JS/SFJS.js"></script>
    </body>
</html>


<?php
include ("../Control/Admin_Process.php")
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
<link rel="stylesheet" type="text/css" href="../Style/form.css">
</head>
<body><h1><div id="labels"> SHIFTING  PARTNER </div></h1><hr>
<h2><div id="labels"> ADMIN </div></h2><hr>
        
<div id="frm">
        <div class="box">
<a href="../View/admin_view_shifter.php"> Shifter </a> <br></div>
<div class="box">
<a href="../View/admin_view_client.php"> Client </a> <br></div>
<div class="box">
<a href="../View/admin_view_transporter.php"> Transporter </a> <br></div>

<!--
</head>
<body>
<B><h3>WELCOME </h3>
<B><h3>AS    </h3>
<B><h1>ADMIN</h1><hr></br>

<table>
<tr>
        <th>[______SHIFTER______]</th>
        <th>[____TRANSPORTER____]</th>
        <th>[______ CLIENT______]</th>
</tr></br>
</br>

<tr>
    <td>
    <form action="" method="post">
<input type="submit" name="rshifter" id="name" value="REGISTERED SHIFTER" onkeyup="showuser()">
</form>

    <td> <form action="" method="post">
<input type="submit" name="rtransporter" id="btn" value="REGISTERED TRANSPORTER">
</form></td>

<td> <form action="" method="post">
<input type="submit" name="rclient" id="btn" value="REGISTERED Client">
</form></td>
</tr>
<tr>
<td>
<form action="" method="post">
        <input type="text" name="searchbar1" placeholder="Enter Shifter Username" id="uname" onkeyup="return showuser();">
        <p id="message"></p>
        <input type="submit" name="searchshifter" value="Search">
        </form>

        <form action="" method="post">
        <input type="text" name="name" value="<?php echo $name;?>">
        <input type="number" name="nid" value="<?php echo $nid;?>">
        <input type="number" name="mobile" value="<?php echo $mobile;?>">
        <input type="text" name="dob" value="<?php echo $dob;?>">
        <input type="text" name="gender" value="<?php echo $gender;?>">
        <input type="text" name="availability" value="<?php echo $availability;?>">

        <input type="submit" name="updates" value="Update Info">
        </form>
</td>



<td>
<form action="" method="post">
        <input type="text" name="searchbar2" placeholder="Enter Transporter Name to search ">
        <input type="submit" name="searchtransporter" value="Search">
        </form>

        <form action="" method="post">
        <input type="text" name="name" value="<?php echo $tname;?>">
        <input type="text" name="nid" value="<?php echo $tnid;?>">
        <input type="text" name="model" value="<?php echo $tmodel;?>">
        <input type="text" name="tnumber" value="<?php echo $ttnumber;?>">
        <input type="text" name="lid" value="<?php echo $tlid;?>">
        <input type="text" name="led" value="<?php echo $tled;?>">
        <input type="text" name="experience" value="<?php echo $texperience;?>">
        <input type="text" name="availability" value="<?php echo $tavailability;?>">
        <input type="submit" name="updatet" value="Update Info">
        </form>
</td>

<td>
<form action="" method="post">
        <input type="text" name="searchbar3" placeholder="Enter client Name to search">
        <input type="submit" name="searchclient" value="Search">
        </form>

        <form action="" method="post">
        <input type="text" name="name" value="<?php echo $cname;?>">
        <input type="text" name="nid" value="<?php echo $cnid;?>">
        <input type="text" name="address" value="<?php echo $caddress;?>">
        <input type="text" name="email" value="<?php echo $cemail;?>">
        <input type="text" name="mobile" value="<?php echo $cmobile;?>">
      
        <input type="submit" name="updatec" value="Update Info">
        </form>
</td>


</tr>

</table><hr>
-->

<B><h3><form action="" method="post">
<input type="submit" name="aorder" id="btn" value="SEE ALL ORDERS">
</form>
<script src="../JS/OJS.js"></script>
</h3><hr></br></br>
</br></br><h3><a href="../Control/Admin_Logout.php">Logout</a></h3>
</div>
</body>
</html>

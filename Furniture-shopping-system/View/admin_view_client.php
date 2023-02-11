<?php
include ("../Control/Admin_Process.php")
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/form.css">
    </head>
    <body>
    <body>
    

<form action="" method="post">
<div id="box">
<input type="submit" name="rclient" value="REGISTERED Client"><br><br>
<input type="text" name="searchbar3" placeholder="Enter client Name to search" id="name" onkeyup="return fetchuser();">
<p id="message"></p>

        <input type="submit" name="searchclient" value="Search">
        <input type="submit" name="deleteclient" value="Delete">
        </form>

        <form action="" method="post">
        <input type="text" name="name" value="<?php echo $cname;?>"><br>
        <input type="text" name="nid" value="<?php echo $cnid;?>"><br>
        <input type="text" name="address" value="<?php echo $caddress;?>"><br>
        <input type="text" name="email" value="<?php echo $cemail;?>"><br>
        <input type="text" name="mobile" value="<?php echo $cmobile;?>"><br>
        <br>
        <input type="submit" name="updatec" value="Update Info">
        </form>
        <div class=lbox1> <a href="../View/Admin.php"> GO BACK</a></div></label>
        </div>
        <script src="../JS/CLJS.js"></script>
    </body>
</html>


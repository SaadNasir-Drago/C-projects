<?php
include "../Control/logincheck.php";

$cookie_name="loginCheck"; 
$cookie_value="1";   
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 
 
 
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! This is the first time you have viewed this page today."; 
  $cookie = 1;
  setcookie("count", $cookie);
}
else
{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page today ".$_COOKIE['count']." times.";
};
 
?>

<!DOCTYPE html>
<html>         
<head>  
    <title>LOGIN/Sign In</title>  
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
</head>  

<body>  
</br> <h1><p id="labels"> SHIFTING  PARTNER </p></h1> 

<div id="myDIV"></div>    


    <div id = "frm">  
        <h1><p id="labels2">LOG IN </p></h1>  
        <form action = ""  method = "POST" >  
            <p>  
                <label > UserName: </label>  
                <input type = "text"  id ="uname" name  = "uname" />  
            </p>  
            <p>  
                <label> Password: &nbsp </label> 
                <input type = "password" id ="pass" name  = "pass" />  
            </p>      
            <input type =  "radio"  name="choose" value= "Admin" />Admin   
            <input type =  "radio" name="choose"  value = "Client" />Client  
            <input type =  "radio" name="choose"  value = "Shifter" />Shifter  
            <input type =  "radio" name="choose"  value = "Transporter" />Transporter
                            
            <p>     
                <input type =  "submit" name="submit" id = "btn" value = "Login" />  
            </p> 
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $error?>
            <br><br><br><br><br>
            <div id="btn22">     
                <a href="../View/Home.php"> Homepage </a>  
</div>  
        </form>  
      
    <script> </script>  
</body>     
</html>  


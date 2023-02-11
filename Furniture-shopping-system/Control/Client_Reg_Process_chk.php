<?php
session_start();

include ("../Model/Client_model.php");
$name=$nid=$address=$email=$mobile=$uname=$pass="";

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $nid=$_POST["nid"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    if(empty($name) || empty($nid) || empty($mobile) || empty($address) || empty($email)|| empty($uname) || empty($pass))
{
    echo "Please insert all data correctly";
}
else
{
$mydb=new db();
$conobj=$mydb->opencon();
$mydb->InsertData($name,$nid,$address,$email,$mobile,$uname,$pass,"client_data",$conobj);
$mydb->closecon($conobj);
}

}





if(isset($_POST["search"]))
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->searchData("client_data", $conobj, $_POST["searchbar2"]);
    

    if($mydata->num_rows>0)
    {   
        echo "<form>";
        
        echo "<form action='' method='post'>";
       
            
        while($row=$mydata->fetch_assoc())
        {
            $name=$row["name"];
            $nid=$row["nid"];
            $address=$row["address"];
            $email=$row["email"];
            $mobile=$row["mobile"];
            $uname=$row["uname"];
            $pass=$row["pass"];

        }
       
        echo "</form>";
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}



if(isset($_POST["update"]))
{
    $name=$_POST["name"];
    $nid=$_POST["nid"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
   // $uname=$_POST["uname"];
    //$pass=$_POST["pass"];
   
     
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->updateData($name, $nid, $address, $email, $mobile, "client_data", $conobj);

$mydb->closecon($conobj);
}

?>
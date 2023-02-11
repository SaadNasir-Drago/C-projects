<?php
session_start();

include ("../Model/Shifter_model.php");
$name=$nid=$mobile=$dob=$gender=$availability=$uname=$pass="";
if(isset($_POST["submit"]))
{
        
    $name=$_POST["name"];
    $nid=$_POST["nid"];
    $mobile=$_POST["mobile"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $availability=$_POST["availability"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    if(empty($name) || empty($nid) || empty($mobile) || empty($dob) || empty($uname) || empty($pass))
{
    echo "Please insert all data correctly";
}
else{
$mydb=new DB();
$conobj=$mydb->opencon();
$mydb->InsertData($name,$nid,$mobile,$dob,$gender,$availability, $uname,$pass,"shifter_data",$conobj);
$mydb->closecon($conobj);
}

}












if(isset($_POST["search"]))
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->searchData("shifter_data", $conobj, $_POST["searchbar2"]);
    

    if($mydata->num_rows>0)
    {   
        echo "<form>";
        //echo "<table>";
        echo "<form action='' method='post'>";
       //  echo "<tr><td> First Name</td> <td>Last Name</td> <td>Age</td> <td>Salary</td> <td>Address</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
            $name=$row["name"];
            $nid=$row["nid"];
            $mobile=$row["mobile"];
            $dob=$row["dob"];
            $gender=$row["gender"];
            $availability=$row["availability"];
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
    $mobile=$_POST["mobile"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
   $availability=$_POST["availability"];
    //$pass=$_POST["pass"];
   
     
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->updateData($name, $nid, $mobile, $dob, $gender,$availability, "shifter_data", $conobj);

$mydb->closecon($conobj);
}











?>
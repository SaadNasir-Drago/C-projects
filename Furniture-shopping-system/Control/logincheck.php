<?php
include ("../Model/Client_model.php");
$error="";
session_start();
$uname=$pass="";

if(isset($_POST["submit"]) && isset($_POST["choose"]) && $_POST["choose"]=="Client")
{
    
    if(empty($_POST["uname"]) && empty($_POST["pass"]))
    {
        echo "uname or password connot be empty";
    }
    else
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->login($_POST["uname"], $_POST["pass"], "client_data", $conobj);

        if($mydata->num_rows > 0){
        while($row=$mydata->fetch_assoc())
        {
           echo "logged in"; 
           header("location: ../View/Client.php");
        
        }
           $mydb->closecon($conobj);
        }
        else
        {
            $error="no data found";
            
        }
      

    }
}

if(isset($_POST["submit"]) && isset($_POST["choose"]) && $_POST["choose"]=="Admin")
{
    if(empty($_POST["uname"]) && empty($_POST["pass"]))
    {
        echo "uname or password connot be empty";
    }
    else
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->login($_POST["uname"], $_POST["pass"], "admin_data", $conobj);

        if($mydata->num_rows > 0){
        while($row=$mydata->fetch_assoc())
        {
           echo "logged in"; 
           header("location: ../View/Admin.php");
        
        }
           $mydb->closecon($conobj);
        }
        else
        {
            $error="no data found";
            
        }
      

    }
}

if(isset($_POST["submit"]) && isset($_POST["choose"]) && $_POST["choose"]=="Shifter")
{
    if(empty($_POST["uname"]) && empty($_POST["pass"]))
    {
        echo "uname or password connot be empty";
    }
    else
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->login($_POST["uname"], $_POST["pass"], "shifter_data", $conobj);

        if($mydata->num_rows > 0){
        while($row=$mydata->fetch_assoc())
        {
           echo "logged in"; 
           header("location: ../View/Shifter.php");
        
        }
           $mydb->closecon($conobj);
        }
        else
        {
            $error="no data found";
            
        }
      

    }
}


if(isset($_POST["submit"]) && isset($_POST["choose"]) && $_POST["choose"]=="Transporter")
{
    if(empty($_POST["uname"]) && empty($_POST["pass"]) && empty($_POST["choose"]))
    {
        $error="uname or password connot be empty";
    }
    else
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->login($_POST["uname"], $_POST["pass"], "transporter_data", $conobj);

        if($mydata->num_rows > 0){
        while($row=$mydata->fetch_assoc())
        {
           echo "logged in"; 
           header("location: ../View/Transporter.php");
        
        }
           $mydb->closecon($conobj);
        }
        else
        {
            $error="no data found";
            
        }
      

    }
}

if(isset($_POST["submit"]) && empty($_POST["choose"]) )
{
    
      $error= "*Check radio button";

    
}


?>
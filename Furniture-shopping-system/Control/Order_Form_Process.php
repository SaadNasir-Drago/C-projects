<?php
session_start();

include ("../Model/Order_model.php");

if(isset($_POST["submit"]))
{
	      $name= $_POST["name"];
	      $uname= $_POST["uname"];
		  $pass= $_POST["pass"];
		  $mobile= $_POST["mobile"];
	      $address=$_POST["address"];
	      $d_address= $_POST["d_address"];
         $car= $_POST["car"];
          $time=$_POST["time"];
	      $person= $_POST["person"];

		  if(empty($name) || empty($uname) || empty($pass) || empty($mobile)||empty($address) ||empty($d_address)  || empty($person))
		  {
			  echo "Please insert all data correctly";
		  }
		  else{
		  $mydb=new DB();
		  $conobj=$mydb->opencon();
		  $mydb->InsertData($name,$uname,$pass,$mobile,$address,$d_address,$car,$time,$person,"order_data",$conobj);
		  $mydb->closecon($conobj);
		  }
		}
?>
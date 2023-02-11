<?php
session_start();

include ("../Model/Admin_model.php");


$name=$nid=$mobile=$dob=$gender=$availability=$uname=$pass="";
$cname=$cnid=$caddress=$cemail=$cmobile=$cuname=$cpass="";
$tname=$tnid=$tmodel=$ttnumber=$tlid=$tled=$texperience=$tavailability="";


if(isset($_POST["aorder"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->vieworderData("order_data", $conobj);

 
    if($mydata->num_rows>0)
    {   
        echo "<table>";
        echo "<tr><td>Client Name</td> <td>User Name</td> <td>Password</td><td>Mobile</td> <td>Present Address</td><td>Destination Address</td><td>Transport Needed</td> <td>Preferred Time</td><td>Shifter Needed</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
           
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["uname"]."</td>";
            echo "<td>".$row["pass"]."</td>";
            echo "<td>".$row["mobile"]."</td>";  
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row["d_address"]."</td>";
            echo "<td>".$row["car"]."</td>";
            echo "<td>".$row["time"]."</td>";
            echo "<td>".$row["person"]."</td>";

            echo "</tr>";
        }
        echo "</table>";
        
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}


if(isset($_POST["deleteshifter"]))
{
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->deleteData("shifter_data", $conobj, $_POST["searchbar1"]);
        $mydb->closecon($conobj);
}


if(isset($_POST["rshifter"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->viewData("shifter_data", $conobj);

 
    if($mydata->num_rows>0)
    {   
        echo "<table>";
        echo "<tr><td> Name</td> <td>National ID</td> <td>Mobile</td> <td>Dob</td>  <td>Gender</td> <td>Availability</td> <td>Username</td> <td>Password</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
           
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["nid"]."</td>";
            echo "<td>".$row["mobile"]."</td>";
            echo "<td>".$row["dob"]."</td>";  
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["availability"]."</td>";
            echo "<td>".$row["uname"]."</td>";
            echo "<td>".$row["pass"]."</td>";

            echo "</tr>";
        }
        echo "</table>";
        
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}



if(isset($_POST["rtransporter"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->viewData("transporter_data", $conobj);

 
    if($mydata->num_rows>0)
    {   
        echo "<table>";
        echo "<tr><td> Name</td> <td>National ID</td> <td>Mobile</td> <td>Car Model</td><td>Transport Number</td><td>License issue date</td> <td>License expire date</td><td>Experience</td><td>Availability</td><td>Username</td><td>Password</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
           
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["nid"]."</td>";
            echo "<td>".$row["mobile"]."</td>";
            echo "<td>".$row["model"]."</td>";  
            echo "<td>".$row["tnumber"]."</td>";
            echo "<td>".$row["lid"]."</td>";
            echo "<td>".$row["led"]."</td>";
            echo "<td>".$row["experience"]."</td>";
            echo "<td>".$row["availability"]."</td>";
            echo "<td>".$row["uname"]."</td>";
            echo "<td>".$row["pass"]."</td>";

            echo "</tr>";
        }
        echo "</table>";
        
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}


if(isset($_POST["rclient"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->viewData("client_data", $conobj);

 
    if($mydata->num_rows>0)
    {   
        echo "<table>";
        echo "<tr><td> Name</td> <td>National ID</td> <td>Address</td> <td>Email</td><td>Mobile</td><td>Username</td><td>Password</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
           
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["nid"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row["email"]."</td>";  
            echo "<td>".$row["mobile"]."</td>";
            echo "<td>".$row["uname"]."</td>";
            echo "<td>".$row["pass"]."</td>";

            echo "</tr>";
        }
        echo "</table>";
        
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}




if(isset($_POST["searchshifter"]))
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->ssearchData("shifter_data", $conobj, $_POST["searchbar1"]);
    

    if($mydata->num_rows>0)
    {   
        echo "<form>";    
        echo "<form action='' method='post'>";
      
            
        while($row=$mydata->fetch_assoc())
        {
            $name=$row["name"];
            $nid=$row["nid"];
            $mobile=$row["mobile"];
            $dob=$row["dob"];
            $gender=$row["gender"];
            $availability=$row["availability"];
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



if(isset($_POST["updates"]))
{
    $sname=$_POST["name"];
    $snid=$_POST["nid"];
    $smobile=$_POST["mobile"];
    $sdob=$_POST["dob"];
    $sgender=$_POST["gender"];
   $savailability=$_POST["availability"];
    //$pass=$_POST["pass"];
   
     
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->supdateData($sname, $snid, $smobile, $sdob, $sgender,$savailability, "shifter_data", $conobj);

$mydb->closecon($conobj);
}



if(isset($_POST["deletetransporter"]))
{
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->deleteData("transporter_data", $conobj, $_POST["searchbar2"]);
        $mydb->closecon($conobj);
}

if(isset($_POST["searchtransporter"]))
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->tsearchData("transporter_data", $conobj, $_POST["searchbar2"]);
    

    if($mydata->num_rows>0)
    {   
        echo "<form>";
        
        echo "<form action='' method='post'>";
       
            
        while($row=$mydata->fetch_assoc())
        {
            $tname=$row["name"];
            $tnid=$row["nid"];
            $tmodel=$row["model"];
            $ttnumber=$row["tnumber"];
            $tlid=$row["lid"];
            $tled=$row["led"];
            $texperience=$row["experience"];
            $tavailability=$row["availability"];
        }
       
        echo "</form>";
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}

if(isset($_POST["updatet"]))
{
    $tname=$_POST["name"];
    $tnid=$_POST["nid"];
    $tmodel=$_POST["model"];
    $ttnumber=$_POST["tnumber"];
    $tlid=$_POST["lid"];
    $tled=$_POST["led"];
    $texperience=$_POST["experience"];
    $tavailability=$_POST["availability"];

   // $uname=$_POST["uname"];
    //$pass=$_POST["pass"];
   
     
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->tupdateData($tname, $tnid, $tmodel, $ttnumber, $tlid,$tled,$texperience,$tavailability, "transporter_data", $conobj);

$mydb->closecon($conobj);
}


if(isset($_POST["deleteclient"]))
{
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->deleteData("client_data", $conobj, $_POST["searchbar3"]);
        $mydb->closecon($conobj);
}

if(isset($_POST["searchclient"]))
    {
        
        $mydb=new db();
        $conobj=$mydb->opencon();
        $mydata=$mydb->csearchData("client_data", $conobj, $_POST["searchbar3"]);
    

    if($mydata->num_rows>0)
    {   
        echo "<form>";
        
        echo "<form action='' method='post'>";
       
            
        while($row=$mydata->fetch_assoc())
        {
            $cname=$row["name"];
            $cnid=$row["nid"];
            $caddress=$row["address"];
            $cemail=$row["email"];
            $cmobile=$row["mobile"];
            $cuname=$row["uname"];
            $cpass=$row["pass"];

        }
       
        echo "</form>";
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}

if(isset($_POST["updatec"]))
{
    $cname=$_POST["name"];
    $cnid=$_POST["nid"];
    $caddress=$_POST["address"];
    $cemail=$_POST["email"];
    $cmobile=$_POST["mobile"];
   // $uname=$_POST["uname"];
    //$pass=$_POST["pass"];
   
     
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->cupdateData($cname, $cnid, $caddress, $cemail, $cmobile, "client_data", $conobj);

$mydb->closecon($conobj);
}



?>
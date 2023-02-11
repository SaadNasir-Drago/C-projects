<?php
include ("../Model/transporter_model.php");
if($_POST["name"]=="")
{
    echo "empty input";
}
else{
    

    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->searchData("transporter_data", $conobj, $_POST["name"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
          echo $row["name"]; 
          echo "<br>";
          echo $row["nid"];
          echo "<br>";
          echo $row["mobile"];
          echo "<br>";
          echo $row["model"];
          echo "<br>";
          echo $row["tnumber"];
          echo "<br>";
          echo $row["lid"];
          echo "<br>";
          echo $row["led"];
          echo "<br>";
          echo $row["experience"];
          echo "<br>";
          echo $row["availability"];
          echo "<br>";
          echo $row["uname"];
          echo "<br>";
          echo $row["pass"];
          
           
        }


    }
    else
    {
        echo "No data found";
    }
    

}


?>
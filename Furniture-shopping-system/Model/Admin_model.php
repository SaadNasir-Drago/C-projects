<?php

class db
{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="project";
        
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
        echo "couldn't connect".$conn->connect_error;
        }
        return $conn;
    }

    function closecon($conn){
        $conn->close();
    }



    function viewData($tablename, $conn)
    {
        $sqlstr="SELECT * FROM $tablename ";
    
        $results=$conn->query($sqlstr);
        return $results;
    }

function deleteData($tablename, $conn, $name)
{
    $sqlstr="DELETE FROM $tablename WHERE name='$name'";
    if($conn->query($sqlstr)===TRUE)
    {
        echo "data deleted";
    }
    else
    {
        echo "couldn't delete data".$conn->error;
    }    
}


    function vieworderData($tablename, $conn)
    {
        $sqlstr="SELECT * FROM $tablename ";
    
        $results=$conn->query($sqlstr);
        return $results;
    }


    function ssearchData($tablename, $conn, $name)
    {
        $sqlstr="SELECT * FROM $tablename WHERE name='$name'";
    
        $results=$conn->query($sqlstr);
        return $results;
    }
    
    function tsearchData($tablename, $conn, $tname)
    {
        $sqlstr="SELECT * FROM $tablename WHERE name='$tname'";
    
        $results=$conn->query($sqlstr);
        return $results;
    }
    function csearchData($tablename, $conn, $cname)
    {
        $sqlstr="SELECT * FROM $tablename WHERE name='$cname'";
    
        $results=$conn->query($sqlstr);
        return $results;
    }
    
    function supdateData($sname, $snid, $smobile, $sdob, $sgender,$savailability, $tablename, $conn)
    {
       
    
        $sql="UPDATE $tablename SET name='$sname', nid=$snid, mobile=$smobile, dob='$sdob', gender='$sgender',availability='$savailability' WHERE name='$sname'";
    
    
    if($conn->query($sql)===TRUE)
    {
        echo "data updated";
    }
    else
    {
        echo "couldn't update data".$conn->error;
    }    
    }
    
    function cupdateData($cname, $cnid, $caddress, $cemail, $cmobile, $tablename, $conn)
    {
       
        $sql="UPDATE $tablename SET name='$cname', nid=$cnid, address='$caddress', email='$cemail', mobile=$cmobile WHERE name='$cname'";
      
    
    if($conn->query($sql)===TRUE)
    {
        echo "data updated";
    }
    else
    {
        echo "couldn't update data".$conn->error;
    }    
    }


    function tupdateData($tname, $tnid,$tmodel, $ttnumber, $tlid,$tled, $texperience, $tavailability, $tablename, $conn)
    {
       // $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";
    
        $sql="UPDATE $tablename SET name='$tname', nid=$tnid, model='$tmodel', tnumber='$ttnumber', lid='$tlid',led='$tled',experience='$texperience',availability='$tavailability' WHERE name='$tname'";
      //  $sql="UPDATE $tablename SET fname='$fname', lname='$lname', age=$age, salary=$salary, address='$address' WHERE fname='$fname'";
    
    if($conn->query($sql)===TRUE)
    {
        echo "data updated";
    }
    else
    {
        echo "couldn't update data".$conn->error;
    }    
    }

}
?>
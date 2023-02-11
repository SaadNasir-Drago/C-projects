<?php
class DB
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

function InsertData($name, $nid, $mobile, $dob, $gender, $availability,$uname,$pass,$tablename, $conn)
{
    $sql="INSERT INTO $tablename (name, nid, mobile, dob, gender,availability,uname,pass) VALUES ('$name', '$nid', '$mobile', '$dob', '$gender','$availability','$uname','$pass')";

if($conn->query($sql)===TRUE)
{
    echo "REGISTRATION SUCCESSFUL";
}
else
{
    echo "couldn't insert data".$conn->error;
}

}





function fetchData($tablename, $conn)
{
    $sqlstr="SELECT * FROM $tablename ";

    $results=$conn->query($sqlstr);
    return $results;
}

function searchData($tablename, $conn, $name)
{
    $sqlstr="SELECT * FROM $tablename WHERE name='$name'";

    $results=$conn->query($sqlstr);
    return $results;
}

function updateData($name, $nid, $mobile, $dob, $gender,$availability, $tablename, $conn)
{
   // $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";

    $sql="UPDATE $tablename SET name='$name', nid=$nid, mobile=$mobile, dob='$dob', gender='$gender',availability='$availability' WHERE name='$name'";
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











/*
function fetchData($conn,$tablename)
{
    $sqlstr="SELECT * FROM $tablename";
   $results= $conn->query($sqlstr);
return $results;

}

function searchUser($conn,$tablename,$fname)
{
$sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";
$results=$conn->query($sqlstr);
return $results;
}

function updateData($tablename,$fname,$lname,$age,$salary,$conn)
{
    $sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname', age='$age', salary='$salary' WHERE fname='$fname'";
    if($conn->query($sqlstr))
    {
        echo "updated";
    }
    else
    {
        echo "not updated".$conn->error;
    }

}

function deleteData($tablename,$fname,$conn)
{
    $sqlstr="DELETE FROM $tablename WHERE fname='$fname'";
    if($conn->query($sqlstr))
    {
echo "deleted";
    }
    else{
        echo "not deleted".$conn->error;
    }
}

*/

function closecon($conn){
    $conn->close();
}

}



?>
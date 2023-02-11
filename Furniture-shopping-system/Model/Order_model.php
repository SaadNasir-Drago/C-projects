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

function InsertData($name,$uname,$pass,$mobile,$address,$d_address,$car,$time,$person,$tablename, $conn)
{
    $sql="INSERT INTO $tablename (name, uname,pass, mobile, address,d_address,car,time,person) VALUES ('$name', '$uname','$pass','$mobile','$address', '$d_address', '$car', '$time','$person')";
if($conn->query($sql)===TRUE)
{
    echo "ORDER PLACED SUCCESSFULLY";
}
else
{
    echo "couldn't insert data".$conn->error;
}

}
function closecon($conn){
    $conn->close();
}

}



?>
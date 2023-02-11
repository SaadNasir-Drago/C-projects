<?php      
class DB
{
    function opencon(){
        
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "Project";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if($con->connect_error)
    {
    echo "couldn't connect".$con->connect_error;
    }
    return $con;
}




function selectsadmin($con,$tablename,$uname,$pass){

    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from admin_login_data where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location:../View/Admin.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h3>";  
            echo '<a href="../View/Login.php"> Try Again</a></h3>';

        }
        
    }






    function selectsshifter($con,$tablename,$uname,$pass){

        $username = $_POST['uname'];  
        $password = $_POST['pass'];  
          
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select  *from shifter_data where uname = '$username' and pass = '$password'";  
            $result = mysqli_query($con, $sql);  
    
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count > 0){  

                header("location:../View/Shifter.php");
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h3>";  
                echo '<a href="../View/Shifter_Login.php"> Try Again</a></h3>';

            }
            
        }




        function selectstransporter($con,$tablename,$uname,$pass){

            $username = $_POST['uname'];  
            $password = $_POST['pass'];  
              
                $username = stripcslashes($username);  
                $password = stripcslashes($password);  
                $username = mysqli_real_escape_string($con, $username);  
                $password = mysqli_real_escape_string($con, $password);  
              
                $sql = "select  *from transporter_data where uname = '$username' and pass = '$password'";  
                $result = mysqli_query($con, $sql);  
        
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                if($count > 0){  
                    header("location:../View/Transporter.php");
                }  
                else{  
                    echo "<h1> Login failed. Invalid username or password.</h3>";  
                    echo '<a href="../View/Transporter_Login.php"> Try Again</a></h3>';
    
                }
                
            }

            function selectsclient($con,$tablename,$uname,$pass){

                $username = $_POST['uname'];  
                $password = $_POST['pass'];  
                  
                    $username = stripcslashes($username);  
                    $password = stripcslashes($password);  
                    $username = mysqli_real_escape_string($con, $username);  
                    $password = mysqli_real_escape_string($con, $password);  
                  
                    $sql = "select  *from client_data where uname = '$username' and pass = '$password'";  
                    $result = mysqli_query($con, $sql);  
            
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count = mysqli_num_rows($result);  
                      
                    if($count > 0){  
                        header("location:../View/Client.php");
                    }  
                    else{  
                        echo "<h1> Login failed. Invalid username or password.</h3>";  
                        echo '<a href="../View/Client_Login.php"> Try Again</a></h3>';
        
                    }
                    
                }



    function closecon($con){
        $con->close();
    }

}
?>  
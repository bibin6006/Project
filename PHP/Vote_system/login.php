<?php
        include "conn.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){

        $user=$_POST["user"];
        $pass=$_POST["pass"];
        $type=$_POST["type"];

        $query="select * from data where user='$user' and pass='$pass' and type='$type'";
        $res=mysqli_query($conn,$query);
        if($res){
                if(mysqli_num_rows($res)>0){
                        echo "successful";
                }
                else{
                        echo "<script>alert('incorrect credential'); window.location='login.html';</script>";

                }
        }


        }

?>

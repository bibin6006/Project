<?php
        include "conn.php";
        if(isset($_GET["deleteid"])){
                $id=$_GET["deleteid"];
                $sql1="delete from course where sid=$id";
                $res1=mysqli_query($conn,$sql1);
                $sql2="delete from std where sid=$id";
                $res2=mysqli_query($conn,$sql2);
                if($res1 and $res2){
                        header("Location:sms.php");
                }
        }
?>

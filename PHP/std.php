<?php
        include "conn.php";
        $name=$_POST["name"];
        $email=$_POST["email"];
        $admission=$_POST["admission"];
        $course=$_POST["course"];
        $sql1="insert into std (name,email,admission) values ('$name','$email',$admission)";
        $res1=mysqli_query($conn,$sql1);
        $last_id=mysqli_insert_id($conn);
        $sql2="insert into course (sid,cname) values ($last_id,'$course')";
        $res2=mysqli_query($conn,$sql2);
        if($res1 and $res2){
                header("Location:sms.php");
        }
?>

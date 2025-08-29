<?php
        include "conn.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){

        $user=$_POST["user"];                                                                                                                $phone=$_POST["phone"];
        $pass=$_POST["pass"];
        $cpass=$_POST["cpass"];
        $type=$_POST["type"];



        if($pass!=$cpass){                                                                                                                           echo "<script>alert('Passward incorrect'); window.location='registration.html';</script>";
        }
        else{
                $sql="select * from data where user='$user' and pass='$pass'";                                                                       $res=mysqli_query($conn,$sql);
                if($res){

                        if(mysqli_num_rows($res)>0){
                                echo "<script>alert('alredy exist'); window.location='registration.html';</script>";
                        }
                }
                $query="insert into data(user,phone,pass,type,status,vote) values('$user','$phone','$pass','$type','0','0')";
                $result=mysqli_query($conn,$query);
                if($result){
                        echo "<script>alert('Registration successfull'); window.location='registration.html';</script>";
                }
        }
}
?>

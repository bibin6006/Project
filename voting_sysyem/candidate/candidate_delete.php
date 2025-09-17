<?php 
include "../conn.php";
    $cid=$_GET['cid'];
    $sql="delete from candidate where cid=$cid";
    $res=mysqli_query($conn,$sql);
    if($res){
        header("Location:candidate_list.php");
    }
?>
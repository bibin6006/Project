<?php 
    include "conn.php";
    session_start();
    $candidates=$_SESSION["candidates"];
    $voter=$_SESSION['voter'];
    $vote=$_POST["vote"];
    $cid=$_POST["cid"];
    $id=$voter['vid'];

    $total_vote=$vote+1;
    $update_vote="update candidate set vote=$total_vote where cid=$cid";
    $vote_res=mysqli_query($conn,$update_vote);
    $voter_id=$voter['vid'];
    $status="update voter set status=1,voted_for_cid=$cid where vid=$voter_id";
    $status_res=mysqli_query($conn,$status);

    if($vote_res and $status_res){
        $sql="select * from candidate";
        $candidates=mysqli_query($conn,$sql);
        if($candidates){
            $row_candidates=mysqli_fetch_all($candidates,MYSQLI_ASSOC);
            $_SESSION["candidates"]=$row_candidates;
        }
        $query="select * from voter where vid=$voter_id"; 
        $res=mysqli_query($conn,$query);
        if($res){
            $_SESSION["voter"]=mysqli_fetch_assoc($res);
        }    

        header("Location:voting.php");
    }
    ?>
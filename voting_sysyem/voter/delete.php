<?php 
    session_start();
    include "../conn.php";
    $vid=$_GET['voterid'];
    $check="select * from voter where vid=$vid";
    $res_check=mysqli_query($conn,$check);
    $ch=mysqli_fetch_assoc($res_check);
    $cid=$ch['voted_for_cid'];
    if(!empty($cid)){
      $sql="select * from candidate where cid=$cid";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);

      $vote=$row['vote'];
      $vote-=1;
      $update="update candidate set vote=$vote where cid=$cid";
      $res_update=mysqli_query($conn,$update);
      

    }

    $delete="delete from voter where vid=$vid";
    mysqli_query($conn,$delete);
    header("Location:voter_list.php");

    ?>
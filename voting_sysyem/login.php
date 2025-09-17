<?php
/* 
session_start();
include "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $voter_id=$_POST['voter_id'];
    $sql="select * from voter where name='$name' and vid=$voter_id";
    $res=mysqli_query($conn,$sql);
    if($res){
        $num=mysqli_num_rows($res);
        if($num>0){
            $sql="select * from candidate";
            $candidates=mysqli_query($conn,$sql);
                        if($candidates){
                                $row_candidates=mysqli_fetch_all($candidates,MYSQLI_ASSOC);
                                $_SESSION["candidates"]=$row_candidates;

                        }
                        $_SESSION["voter"]=mysqli_fetch_assoc($res);
            header("Location:voting.php");
        }else{
             echo "<script> alert('incorrect credential'); window.location='login.php';</script>";
        }
    }

}

*/
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        name:<input type="text" name="name"><br>
        voter_id<input type="text" name="voter_id"><br>
        <input type="submit" name="submit">
    <form>
</body>
</html>

-->

<?php 
session_start();
include "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $voter_id=$_POST['voter_id'];
    $sql="select * from voter where name='$name' and vid=$voter_id";
    $res=mysqli_query($conn,$sql);
    if($res){
        $num=mysqli_num_rows($res);
        if($num>0){
            $sql="select * from candidate";
            $candidates=mysqli_query($conn,$sql);
                        if($candidates){
                                $row_candidates=mysqli_fetch_all($candidates,MYSQLI_ASSOC);
                                $_SESSION["candidates"]=$row_candidates;
                        }
                        $_SESSION["voter"]=mysqli_fetch_assoc($res);
            header("Location:voting.php");
        }else{
             echo "<script> alert('incorrect credential'); window.location='login.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 shadow-sm">
                    <h2 class="card-title text-center mb-4">Voter Login</h2>
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="voter_id" class="form-label">Voter ID</label>
                            <input type="text" class="form-control" id="voter_id" name="voter_id" required>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="submit" class="btn btn-success" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
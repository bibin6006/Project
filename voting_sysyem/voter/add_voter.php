<?php
/* 
include "../conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $sql="insert into voter (name,email,phoneno,status) values ('$name','$email','$phoneno','0')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header("location:voter_list.php");
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
    <form action="add_voter.php" method="post">
       name<input type="text" name="name"><br>
        email<input type="email" name="email"><br>
        phone no<input type="text" name="phoneno"><br>
        <input type="submit" name="submit">
    <form>
</body>
</html>
-->

<?php 
include "../conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $sql="insert into voter (name,email,phoneno,status) values ('$name','$email','$phoneno','0')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header("location:voter_list.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Voter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <h2 class="card-title text-center mb-4">Add New Voter</h2>
                    <form action="add_voter.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phoneno" class="form-label">Phone No</label>
                            <input type="text" class="form-control" id="phoneno" name="phoneno" required>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="submit" class="btn btn-primary" value="Add Voter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

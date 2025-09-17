<?php
    include "conn.php";
    $sql="select * from candidate";
    $res=mysqli_query($conn,$sql);
    if(!$res){
        echo "<script> alert('error'); window.location='dashboard.html';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container mt-5">
        <div class="text-center my-4">
            <h1>Candidate Vote Status</h1>
        </div>
        <?php
            while($row=mysqli_fetch_assoc($res)){
        ?>
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Name: <?php echo $row['name']; ?></h5>
                        <p class="card-text text-muted">Vote Count: <?php echo $row['vote']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
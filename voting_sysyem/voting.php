<?php
/*
    session_start();
    $voter=$_SESSION['voter'];
    $candidates=$_SESSION['candidates'];
    if($voter['status']==1){
        $status= "<h5> voted <h5>";
    }
    else{
        $status= "<h5> not voted <h5>";
    }
        */
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="m-5 p-8">
    <div class="text-center m-3 p-3">
        <h1>Voting System<h1>

    </div>
    <div class="row m-4" >
        <div class="col-sm-8">
            <?php
            /*
                foreach($candidates as $c){
                */
            ?>

                <div class="card" style="width: 14rem;">
                    <div class="card-body">
                    <h6 class="card-title">Name:<?php/* echo $c['name']; */?></h6>
                    <h6 class="card-title">vote:<?php /*echo $c['vote']; */?></h6>
                    <form action="adding_vote.php" method="post">
                    <input type="hidden" name="vote" value=<?php /*echo $c['vote'];*/?>>
                    <input type="hidden" name="cid" value= <?php /* echo $c['cid'];*/?>>
                    <?php 
                    /*
                        if($voter['status']==0){
                            echo "<button > vote</button>";
                        }
                            */
                    ?>
                </form> 
                    <?php 
                    /*
                        if($voter['status']!=0){
                            echo "<button > voted</button>";
                        }
                    */
                     ?>   
                        
                    </div>
                </div>  
                <hr>
                
         <?php 
         /*
                }
         */
         ?>     
        </div>


        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h6 class="card-title">Name:  <?php /*echo $voter['name'];*/ ?></h6>
                    <h6 class="card-title">Phone no:  <?php/* echo $voter['phoneno'];*/ ?></h6>
                    <h6 class="card-title">Satuts:<?php/* echo $status;*/ ?></h6>
                    </div>
            </div> 
            <div class="p-3">
                <button><a href="dashboard.html">Log out</a></button>
                
            </div>   

        </div>


    </div>
    
</body>
</html>

-->


<?php
    session_start();
    $voter=$_SESSION['voter'];
    $candidates=$_SESSION['candidates'];
    if($voter['status']==1){
        $status= "<h5 class='text-success'> Voted <h5>";
    }
    else{
        $status= "<h5 class='text-danger'> Not Voted <h5>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <div class="text-center my-4">
            <h1>Voting System</h1>
        </div>
        <div class="row m-4">
            <div class="col-md-8">
                <h3 class="mb-3">Candidates</h3>
                <?php
                    foreach($candidates as $c){
                ?>
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Name: <?php echo $c['name']; ?></h5>
                                    <p class="card-text text-muted">Vote Count: <?php echo $c['vote']; ?></p>
                                </div>
                                <div>
                                    <form action="adding_vote.php" method="post">
                                        <input type="hidden" name="vote" value="<?php echo $c['vote'];?>">
                                        <input type="hidden" name="cid" value="<?php echo $c['cid'];?>">
                                        <?php 
                                            if($voter['status']==0){
                                                echo "<button type='submit' class='btn btn-primary'>Vote</button>";
                                            } else {
                                                echo "<button type='button' class='btn btn-secondary' disabled>Voted</button>";
                                            }
                                        ?>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>  
                <?php 
                    }
                ?>     
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        Voter Profile
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Name: <?php echo $voter['name']; ?></h6>
                        <h6 class="card-title">Phone no: <?php echo $voter['phoneno']; ?></h6>
                        <h6 class="card-title">Status: <?php echo $status; ?></h6>
                    </div>
                </div> 
                <div class="p-3">
                    <a href="dashboard.html" class="btn btn-danger w-100">Log out</a>
                </div>   
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
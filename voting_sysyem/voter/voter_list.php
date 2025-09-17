<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <tr>
    <th>Voter id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
  </tr>
    <?php
    /* 
        include "../conn.php";
        $sql="select * from voter";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res)){
            if($row['status']=='0'){
                $status='not voted';
            }else{
                $status='voted';
            }
            $vid=$row['vid'];
            */
        ?>
          <tr>
            <td><?php/*echo $row['vid']; */?></td>
            <td><?php /*echo $row['name']; */?></td> 
            <td><?php /*echo $row['email']; */?></td>
            <td><?php/* echo $status; */?></td>
            <td><button><a href="delete.php? voterid=<?php/* echo $vid; */?>">Delete</a></button></td>
            </tr>
    <?php    
    /*
        }
    */
    ?>
</table>
<button><a href="../dashboard.html">Back</a></button>
</body>
</html>

--> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="text-center mb-4">Voter List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Voter ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../conn.php";
                        $sql="select * from voter";
                        $res=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($res)){
                            if($row['status']=='0'){
                                $status='Not Voted';
                                $status_class = 'text-danger';
                            }else{
                                $status='Voted';
                                $status_class = 'text-success';
                            }
                            $vid=$row['vid'];
                    ?>
                    <tr>
                        <td><?php echo $row['vid']; ?></td>
                        <td><?php echo $row['name']; ?></td> 
                        <td><?php echo $row['email']; ?></td>
                        <td class="<?php echo $status_class; ?>"><?php echo $status; ?></td>
                        <td>
                            <a href="delete.php?voterid=<?php echo $vid; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this voter?');">Delete</a>
                        </td>
                    </tr>
                    <?php    
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="../dashboard.html" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

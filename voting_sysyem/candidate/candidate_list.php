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
  
    <th>Name</th>
    <th>Email</th>
    <th>Phone number</th>

  </tr>
    <?php 
    /*
        include "../conn.php";
        $sql="select * from candidate";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res)){
      */      
        ?>
          <tr>
            
            <td><?php/* echo $row['name'];*/ ?></td> 
            <td><?php/* echo $row['email']; */?></td>
            <td><?php/* echo $row['phoneno']; */?></td>
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
    <title>Candidate List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="text-center mb-4">Candidate List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Votes</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "../conn.php";
                        $sql="select * from candidate";
                        $res=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td> 
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phoneno']; ?></td>
                        <td><?php echo $row['vote']; ?></td>
                        <td>
                            <a href="candidate_delete.php?cid=<?php echo $row['cid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this candidate?');">Delete</a>
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
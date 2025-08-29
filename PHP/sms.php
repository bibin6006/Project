<?php
        include "conn.php";
        $sql="select * from std inner join course on std.sid=course.sid";
        $res=mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html>
<head>
    <title>student management system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtk>
</head>
<body>
<div class="text-center shadow-lg p-5 my-5 bg-white rounded">
 <h1>Student Management System</h1>
</div>
<a href="std.html"><button class="btn btn-primary mx-5 my-5">Add student</button></a>
<div class="mr-5 ml-5 shadow p-3 mb-5 bg-white rounded">
<table class="table table-hover shadow p-3 mb-5 bg-white rounded">
  <thead class="table-light">
   <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Admission no</th>
      <th scope="col">Course</th>
      <th scope="col">Operations</th>
    </tr>

  </thead>
  <tbody>
        <?php

                while($row=mysqli_fetch_assoc($res)){
                        $sid=$row["sid"];
                        echo '
                          <tr>
                                <td>'.$row["name"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["admission"].'</td>
                                <td>'.$row["cname"].'</td>
                                <td><a href="update.php?updateid='.$sid.'"><button class="btn btn-success">update</button></a>
                                   <a href="delete.php?deleteid='.$sid.'"><button class="btn btn-danger">delete</button></a>
                                </td>
                          </tr>';
                }

        ?>

  </tbody>
</table>
</div>
</body>
</html>

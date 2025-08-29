<?php
        include "conn.php";
        if(isset($_GET["updateid"])){
                $id=$_GET["updateid"];
        }
        $sql="select * from std inner join course on std.sid=course.sid where std.sid=$id";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);

        if(isset($_POST["btn"])){
                $name=$_POST["name"];           $email=$_POST["email"];
                $admission=$_POST["admission"];
                $course=$_POST["course"];
                $sql1="update course set cname='$course' where sid=$id";
                $res1=mysqli_query($conn,$sql1);
                $sql2="update std set name='$name',email='$email',admission=$admission where sid=$id";
                $res2=mysqli_query($conn,$sql2);
                if($res1 and $res2){

                        header("Location:sms.php");
                }
          }

?>



                                                                                                                                                        <html>
<head>
    <title>student details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5 mx-6 shadow-lg p-3 mb-5 bg-white rounded">
  <form action="update.php?updateid=<?php echo $id; ?> " method="post">
        <div class="form-group row my-3">
            <label for="n" class="h4 col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control " id="n" name="name" value=<?php echo $row['name'];?> placeholder="enter your name" 
            </div>
        </div>
                                                                                                                                                                <div class="form-group row my-3">
            <label for="m" class="h4 col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control " id="m" name="email" value=<?php echo $row['email'];?> placeholder="enter your email" 
            </div>
        </div>
                                                                                                                                                                <div class="form-group row my-3" >
            <label for="a" class="h4 col-sm-2 col-form-label">Admission no:</label>
            <div class="col-sm-10">
            <input type="number" class="form-control" id="a" name="admission"  value=<?php echo $row['admission'];?>  placeholder="enter your admission>
            </div>
        </div>

        <div class="form-group row my-3" >
            <label for="c" class="h4 col-sm-2 col-form-label">Course:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="c" name="course" value=<?php echo $row['cname'];?> placeholder="enter your course">
            </div>
        </div>


        <div class="text-center my-5">
        <button class="my-3 btn btn-primary" name="btn" >update</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Online Registration Form</title>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
    
  <h2>Basic Form</h2>
  <form action="" name="form1" method="post">

    <div class="form-group">
      <label for="firstname">Firstname</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
    </div>

    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
    </div>

    <div class="form-group">
      <label for="phoneno">Phone No</label>
      <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone No.." name="phoneno">
    </div>

    <div class="form-group">
        <lable for="course">Course</lable>
        <select>  
            <option value="Course">Course</option>  
            <option value="BCA">BCA</option>  
            <option value="BBA">BBA</option>  
            <option value="B.Tech">B.Tech</option>  
            <option value="MBA">MBA</option>  
            <option value="MCA">MCA</option>  
            <option value="M.Tech">M.Tech</option>  
         </select>
    </div>

    <div class="form-Group">
        <label for="gender">Gender</label>
        <input type="radio" name="male"/> Male <br>  
        <input type="radio" name="female"/> Female <br>  
        <input type="radio" name="other"/> Other  
        <br>  
        <br>  
    </div>

    <div class="form-group">
      <label for="email">Email ID</label>
      <input type="email" class="form-control" id="email" placeholder="abcd@gmail.com.." name="email">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>

    <div class="form-group">
      <label for="repass">Re-Type-Password</label>
      <input type="password" class="form-control" id="repass" placeholder="Re_Enter your Password " name="repass">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea cols="80" rows="5" class="form-control" id="address" placeholder="" name="address">
      </textarea>
    </div>
    <button type="submit" name="insert" class="btn btn-primary">Submit</button>
    <button type="submit" name="update" class="btn btn-success">Delete</button>
    <button type="submit" name="delete" class="btn btn-danger">Update</button>
  </form>
    </div>
</div>

<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
          <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phoneno</th>
        <th>Course</th>
        <th>Gender</th>
        <th>Email Id</th>
        <th>Password</th>
        <th>Re_type Password</th>
        <th>Address</th>

      </tr>
    </thead>
    <tbody>
     <?php
     $res=mysqli_query($link,"select * from cat1");
     while($row=mysqli_fetch_array($res))
     {
         echo "<tr>";

         echo "<td>"; echo $row["id"]; echo "</td>";
         echo "<td>"; echo $row["firstname"]; echo "</td>";
         echo "<td>"; echo $row["lastname"]; echo "</td>";
         echo "<td>"; echo $row["phoneno"]; echo "</td>";
         echo "<td>"; echo $row["course"]; echo "</td>";
         echo "<td>"; echo $row["gender"]; echo "</td>";
         echo "<td>"; echo $row["email"]; echo "</td>";
         echo "<td>"; echo $row["password"]; echo "</td>";
         echo "<td>"; echo $row["repass"]; echo "</td>";
         echo "<td>"; echo $row["address"]; echo "</td>";
         echo "</tr>";
     }
     ?>
      
    </tbody>
  </table>
</div>
</body>
<?php
if(isset($_POST["insert"]))
{
   mysqli_query($link,"insert into cat1 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[phoneno]','$_POST[course]','$_POST[gender]','$_POST[email]','$_POST[password]','$_POST[repass]','$_POST[address]')"); 
   ?>
   <script type="text/javascript">
       window.location.href=window.location.href;
    </script>
    <?php

}
    if(isset($_POST["delete"]))
{
    mysqli_query($link,"delete from cat1 where firstname= '$_POST[firstname]'") or die(mysqli_error($link));
    
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
     </script>
     <?php
}
if(isset($_POST["update"]))
{
   mysqli_query($link,"update cat1 set firstname='$_POST[lastname]' where firstname='$_POST[firstname]'") or die(mysqli_error($link)); 

   ?>
   <script type="text/javascript">
       window.location.href=window.location.href;
    </script>
    <?php
}
?>
</html>




<?php

//Connection must include to connnect two files data. 
$conn =mysqli_connect("localhost","root","","data_students");
$query = "SELECT * FROM students";
$result =mysqli_query($conn,$query);
?>
<!-- table formatings -->
<html>
<head>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
 <link rel="stylesheet" href="style.css">
</head>

<body>

    <center>
    <div class="header">
    <h1 style="font-size:25px">List of student those has filled form</h1>
    </div>
    <br><br>
   
  <div class="button1:hover">  
  <a href="save.php"  style="border-radius:5px" class="button5">Add new</a>
</div>
   <?php echo "<br><br>";?>

  <table  class="table table-hover text-center">
  <thead style="background-color:#000000" >
    <tr>
      <th style="color:white" scope="col">#id</th>
      <th style="color:white" scope="col">Fname</th>
      <th style="color:white" scope="col">Lname</th>
      <th style="color:white" scope="col">Email</th>
      <th style="color:white" scope="col">Birth date</th>
      <th style="color:white" scope="col">Standard</th>
      <th style="color:white" scope="col">Edit</th>
      <th style="color:white" scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   <tr>
    <?php
    // fetching form data into table rows 
    while($row = mysqli_fetch_assoc($result)){
    ?>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['birthdate'];?></td>
      <td><?php echo $row['standard']; ?></td>
      <td><a href="edit_student.php?id=<?php echo $row['id'] ?>"  class="link-dark"> <i class="fa-solid fa-pen-to-square fs-10 me-3"></i></a></td>
      <td><a href="delete_student.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class="fa-solid fa-solid fa-trash fs-5"></i></a></td>
 </tr>
<?php
  }
  ?> 
  
</tbody>
</table>

</body>
</html>


































<?php
$conn =mysqli_connect("localhost","root","","data_students");

$id =$_GET['id'];
$query = "SELECT * FROM `students` WHERE id='$id' ";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<!-- Update page layout started from here -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Edit_details</title>
  </head>

<body>
  
<center>
    <div class="header">
    <h1 style="font-size:25px">MS EDUCATION COLLEGE & SOCIETY</h1>
    <h6 style="color:#8c8c8c"><i> founded the Ms Educational & Welfare Society (HEWS) in the year 1993 with the objective of providing quality education</i></h6>  
  </div>
    <div class="registration-box">
    <div class="content">
    <div class="text-center mb-7">
    <h2>Admission Registration Form</h2>
    </div>
    <br>

  <!--Start Putting the form inputs elements -->
<form  border="solid black 2px" action="#" method="POST">

   <label>ID:</label>
   <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Enter id">
   <br><br> 
   <label>First name:</label>
   <input type="text" name="fname" value="<?php echo $row['fname'] ?>" placeholder="Enter First name">
   <br><br>
   <label>Lirst name:</label>
   <input type="text" name="lname" value="<?php echo $row['lname'] ?>" placeholder="Enter Last name">
   <br><br>
   <label>E-mail:</label>
   <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter email">
   <br><br>
   <label>Birth date:</label>
   <input type="date" name="birthdate" value="<?php echo $row['birthdate'] ?>"> 
   <br><br>
  <label>Standard:</label>
  <select name="standard" <?php echo $row['standard']; ?>>
    <option value="V">V</option>
    <option value="VI">VI</option>
    <option value="VII">VII</option>
    <option value="VIII">VIII</option>
    <option value="IX">IX</option>
    <option value="X">X</option>
  </select> 
   <br><br>
   <button name="save" class="button">Save</button> 
  
</form>
</center>
<footer>
   Email us :<a href="mailto:education&society@gmail.com"><i class="fa-solid fa-envelope"></i> education&society@gmail.com</a>
   For Enquiry Contace on this no :<a href="contactme:91-8271166620"><i class="fa-solid fa-phone"></i> 91-8271166620</a>
 </footer> 

</body>
</html>

<!-- insert Update query for changing data -->
<?php
if(isset($_POST['save'])){

 $id = $_POST['id'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $bod = $_POST['birthdate'];
 $standard = $_POST['standard'];

 $updatequery = "UPDATE `students` SET `id`='$id',`fname`='$fname',`lname`='$lname',`email`='$email',`birthdate`='$bod',`standard`='$standard' WHERE id ='$id' ";
 $result =mysqli_query($conn,$updatequery);
 
 if($result){
   ?>
   <script>
      alert("Update successfull");
   </script>
   <?php   
 }else{
   ?>
   <script>
      alert("Data isn't updated");
   </script>
   <?php   
 }
} 

?>




















<!-- Complete form -->
<?php
include "studentconn.php";

//in this php code we send data to database record. 
if(isset($_GET['save']))   {
   
   $id=$_GET['id'];
   $fname=$_GET['fname'];
   $lname=$_GET['lname'];
   $email=$_GET['email'];
   $bod=$_GET['birthdate'];
   $standard=$_GET['standard'];
   
  

$insertquery = "INSERT INTO students(`id`, `fname`, `lname`, `email`, `birthdate`, `standard`) VALUES ('$id','$fname','$lname','$email','$bod','$standard')";

$result =mysqli_query($conn,$insertquery);
if($result){
   ?>
  <script>
   alert("record insert successfuly");
  </script>
  <?php
}else{
?>
<script>
alert("record not insert successfuly");
</script>
<?php
}

}

?>

<!--Start desingn page layount -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>MS Official website</title>
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
<form  border="solid black 2px" action="#" method="GET">
   
<section class="label">
   <label>ID:</label>
   <input type="text" name="id" placeholder="Enter id">
   <br><br> 
   <label>First name:</label>
   <input type="text" name="fname" placeholder="Enter First name">
   <br><br>
   <label>Lirst name:</label>
   <input type="text" name="lname" placeholder="Enter Last name">
   <br><br>
   <label>E-mail:</label>
   <input type="email" name="email" placeholder="Enter email">
   <br><br>
   <label>Birth date:</label>
   <input type="date" name="birthdate"> 
   <br><br>
  <label>Standard:</label>
  <select name="standard">
    <option>Select option</option>
    <option value="IX">IX</option>
    <option value="X">X</option>
    <option value="10 + 2">10 + 2</option>
    <option value="Graduation">Graduation</option>
    <option value="Post graduation">Post graduation</option>
  </select> 
</section> 
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




 
 










































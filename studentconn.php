
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_students";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn){
    die("Connection is filed: " . mysqli_connect_error());

 }else {
    ?>
    <script>
     alert("Connection is successfull.");
     </script>
     <?php
    
 }

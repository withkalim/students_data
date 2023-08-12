<?php

//connect with data connection. 
$conn =mysqli_connect("localhost","root","","data_students");
if(isset($_GET['id'])){

    $id =$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM students WHERE id=$id ");
    
    if($delete){
        ?>
        <script>
            alert("Data is deleted");
        </script>
        <?php    
    }else{
        ?>
        <script>
         alert("Data isn't deleted");
         </script>
         <?php   
    }
}
 
?>




























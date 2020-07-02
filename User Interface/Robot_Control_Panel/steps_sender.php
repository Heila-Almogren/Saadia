<!DOCTYPE html>
<html>



<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$name="Robot_Control";

// Create connection
$conn = new mysqli($servername, $username, $password,$name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 
?>


    
    <?php
    
    
    mysqli_select_db($conn, "Robot_Control");
    
    $up = $_POST['up'];
    $down = $_POST['down'];
    $right = $_POST['right'];
    $left = $_POST['left'];
    
    $sql = "INSERT INTO steps_instructions (right_steps, left_steps, up_steps, down_steps) VALUES (".$right.",".$left.",".$up.",".$down.");";
    
  
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    
    
    mysqli_close($conn);
  ?>
    
    
    
    
    
</body>

</html>
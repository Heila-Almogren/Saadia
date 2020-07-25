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
    $q = $_GET['q'];
    
    mysqli_select_db($conn, "Robot_Control");
    $sql = "SELECT * FROM control_instructions WHERE instruction = '".$q."'";
    $result = mysqli_query($conn,$sql);

    
    while($row = mysqli_fetch_array($result)) {
      
      echo $row[2];
      
    }
    
    mysqli_close($conn);
  ?>
    
    
    
    
    
</body>

</html>
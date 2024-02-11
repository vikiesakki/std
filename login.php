<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "students";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$roll_no = $_POST['roll_no'];
$password = $_POST['password'];

$query = "select * from details where roll_no='$roll_no' and password='$password'";
$result = $conn->query($query);
if($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($row){
        session_start();
        // echo '<pre>';
        // print_r($_SESSION);
        // print_r($row);
        $_SESSION['id'] = $row['ID'];
        $_SESSION['roll_no'] = $row['Roll_No'];
        header("Location: profile.php");
    }
}else{
    echo "Error: You did not registered. Please register your account";
}
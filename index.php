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
if($_POST && $_POST['student_name'] != ""){
    echo $_POST['student_name'];
}

// echo "Connected successfully";
?>
<style>
    table,th,td{
        border: 1px solid;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    label {
        width: 150px;
        display: inline-block;
        padding: 5px;
    }

</style>
<form method="post" action="login.php">
    <label>Roll No</label>
    <input type="text" name="roll_no" required /> <br />
    <label>Password</label>
    <input type="password" name="password" required /> <br />
    <input type="submit" value="login" />
</form>
<a href="register.php">Register</a>
<a href="forget.php">Forget Password</a>
<!-- 
    

ehvqwgegye
hgfytqwcduqwvduqyu2ety2fet
jdhvqgwvdyqwd
hqvcyqcy
->
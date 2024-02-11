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
<form method="post" action="create.php">
    <label>Student Name</label>
    <input type="text" name="student_name" required /> <br />
    <label>Roll No</label>
    <input type="text" name="roll_no" required /> <br />
    <label>Password</label>
    <input type="password" name="password" required /> <br />
    <label>Year</label>
    <input type="number" name="year" maxlength="4" required /> <br />
    <label>Mobile Number</label>
    <input type="number" name="mobile_no" maxlength="10" required /> <br />
    <label>Date Of Birth</label>
    <input type="date" name="dob" /> <br />
    <label>Parent Mobile</label>
    <input type="number" name="parent_mobile" maxlength="10" required /> <br />
    <label>Address</label>
    <textarea name="address" required></textarea> <br />
    <label>Branch</label>
    <input type="text" name="branch" required /> <br />
    <label>Later Entry</label>
    <input type="radio" name="later_entry" value="0" required />No
    <input type="radio" name="later_entry" value="1" required />Yes <br />
    <input type="submit" />
</form>
<a href="index.php">Login</a>
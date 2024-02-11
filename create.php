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

$student_name = $_POST['student_name'];
$roll_no = $_POST['roll_no'];
$password = $_POST['password'];
$year = $_POST['year'];
$mobile_no = $_POST['mobile_no'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$branch = $_POST['branch'];
$later_entry = $_POST['later_entry'];
$parent_mobile = $_POST['parent_mobile'];

$query = "INSERT INTO `details` (`Roll_No`,`Student_Name`, `Year`, `Mobile_No`, `Date_Of_Birth`, `Password`, `Parent_Mobile`, `Address`, `Branch`, `Later_Entry`) VALUES ('$roll_no', '$student_name', $year, $mobile_no, $dob, '$password', $parent_mobile, '$address', '$branch', $later_entry)";
if($conn->query($query) === TRUE){
    echo "Successfully Inserted";
}else{
    echo "Error:". $conn->error;
}
?>
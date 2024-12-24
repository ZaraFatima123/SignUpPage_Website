<?php 
// include("connect2.php");
$FirstName = $_POST['first-name'];
//echo $FirstName;
$LastName = $_POST['last-name'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Gender = $_POST['gender'];
$Country = $_POST['country'];
//echo "Country: " . $Country;

// Debugging output
echo "First Name: " . $FirstName . "<br>";
echo "Last Name: " . $LastName . "<br>";
echo "Email: " . $Email . "<br>";
echo "Gender: " . $Gender . "<br>";
echo "Country: " . $Country . "<br>";

$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO `registering`(`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Country`) VALUES (\'[value-2]\',\'[value-3]\',\'[value-4]\',\'[value-5]\',\'[value-6]\',\'[value-7]\');";

// $sql = "INSERT INTO `registering` (`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Country`) 
//         VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Gender', '$Country')";

$sql = "INSERT INTO `rrr` (`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Country`) 
        VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Gender', '$Country')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

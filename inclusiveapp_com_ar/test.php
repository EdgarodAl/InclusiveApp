
<?php
$servername = "mysql.hostinger.com";
$username = "u823359572_admin";
$database = "u823359572_inclu";
$password = "chispita25";

//  Create a new connection to the MySQL database using PDO
//$conn = new mysqli($servername, $username, $password);

// Check connection
//if ($conn->connect_error) {
// //   die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<h1>Hello!</h1>
<h4>Test connect db</h4>
<?php
$host = 'db';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";

phpinfo();
?>
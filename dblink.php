<?php
function createDatabase(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
try {
	$conn = new PDO("mysql:host=$servername;dbname=kalender", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
	return $conn;
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
try {
	$stmt = $conn->prepare("SELECT * FROM verjaardag ORDER BY `date` desc");
	$stmt->execute();
	$result = $stmt->fetchall();
} 
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>

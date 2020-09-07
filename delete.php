<?php require 'dblink.php';
try {
    $stmt = $conn->prepare("DELETE FROM `verjaardag` WHERE id=:id");
    $stmt->bindParam(":id", $_GET["id"]);
    $stmt->execute();
    }
?>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Kalender</title>
</head>
<body>
    <div class="p1">
        <h1>Kalender</h1>
        <a href="index.php">Startscherm</a>
    </div>
</body>
</html>
<?php require 'footer.php'; ?>
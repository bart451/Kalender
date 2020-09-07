<?php require 'dblink.php';
if ($_POST["naam"] != "" && $_POST["dag"] != "") {
    try {
    $stmt = $conn->prepare("INSERT INTO `verjaardag`(`naam`, `dag`) VALUES (:naam,:dagen)");
    $stmt->bindParam(":namen", $_POST["naam"]);
    $stmt->bindParam(":dagen", $_POST["dag"]);
    $stmt->execute();
    }
} ?>
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
    	<form action="" method="post">
    	<label for="naam">Naam: </label><br>
    	<input id="naam" type="text" name="naam" value=""><br><br>
    	<label for="dag">Geboortedag: </label><br>
    	<input id="dag" type="date" name="dag" value=""><br><br>
    	<input type="submit" value="Verzend">
    	</form>
    </div>
</body>
</html>
<?php require 'footer.php'; ?>
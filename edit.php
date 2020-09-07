<?php require 'dblink.php';
if ($_POST["naam"] != "" && $_POST["dag"] != "") {
    try {
    $stmt = $conn->prepare("UPDATE `verjaardag` SET `naam`=:namen,`dag`=:dagen WHERE id=:id");
    $stmt->bindParam(":namen", $_POST["naam"]);
    $stmt->bindParam(":dag", $_POST["dagen"]);
    $stmt->bindParam(":id", $_GET["id"]);
    $stmt->execute();
} 
    try {
        $stmt = $conn->prepare("SELECT * FROM verjaardag where id=:id");
        $stmt->bindParam(":id", $_GET["id"]);
        $stmt->execute();
        $result = $stmt->fetch(); 
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
        <input id="naam" type="text" name="naam" value=""<?= $result['naam']; ?>"><br><br>
    	<label for="dag">Geboortedag: </label><br>
        <input id="dag" type="date" name="dag" value=""<?= $result['dag']; ?>"><br><br>
        <input type="submit" value="Verzend">
        </form>
    </div>
</body>
</html>
<?php require 'footer.php'; ?>
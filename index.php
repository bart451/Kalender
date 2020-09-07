<?php require 'dblink.php'; ?>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Kalender</title>
</head>
<body>
	<div class="p1">
    	<h1>Kalender</h1>
    	<a href="add.php">Voeg een verjaardag toe</a>
    	<?php foreach($result as $bday) {?>
    		<h2><?= $bday["naam"]; ?></h2>
    		<h3><?= $bday["dag"]; ?></h3>
    		<a href="edit.php?id=<?= $bday["id"]; ?>">Bewerk</a>
    		<a href="delete.php?id=<?= $bday["id"]; ?>">Verwijder</a>
    	<?php } ?>
    </div>
</body>
</html>
<?php require 'footer.php'; ?>

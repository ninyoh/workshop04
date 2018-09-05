<?php
require_once "pdo.php";

if ( isset($_POST['make']) && isset($_POST['year']) 
     && isset($_POST['mileage'])) {
    $sql = "INSERT INTO users (make, year, mileage) 
              VALUES (:make, :year, :mileage)";
   // echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':make' => $_POST['make'],
        ':year' => $_POST['year'],
        ':mileage' => $_POST['mileage']));
}
?>
<html>
<head>
	<?php require_once "bootstrap.php"; ?>
</head>
<body>
	<div class="container">
<p><H2>Tracking Autos for csev@umich.edu</H2></p>
<form method="post">
<p>Make:
<input type="text" name="make" size="40"></p>
<p>Year:
<input type="text" name="year"></p>
<p>Mileage:
<input type="text" name="mileage"></p>
<p><input type="submit" value="Add New"/>
 <a href="/workshop4/autos2.php" target="_blank" input type="submit" value="sdfs">Show Database</a>
</p>
</div>
</form>
</body>

<?php
echo "<pre>\n";
$pdo = new PDO('mysql:host=sql12.freesqldatabase.com;port=8889;dbname=sql12254594',
    'sql12254594', 'tQz5NKQ7jd');

$stmt = $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

echo "</pre>\n";

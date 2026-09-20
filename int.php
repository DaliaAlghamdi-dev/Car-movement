<?php
$pdo = new PDO('mysql:host=localhost;dbname=employee_cars', 'username', 'password');

$username = 'employee1';
$password = password_hash('123456', PASSWORD_DEFAULT); // تشفير
$name = 'Dalia';

$stmt = $pdo->prepare("INSERT INTO employees (username, password, name) VALUES (?, ?, ?)");
$stmt->execute([$username, $password, $name]);
?>

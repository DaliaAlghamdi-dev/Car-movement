<?php
$employee_id = 1; // مثال
$car_model = 'Toyota Corolla';
$car_plate = 'ABC-1234';

$stmt = $pdo->prepare("INSERT INTO cars (employee_id, car_model, car_plate) VALUES (?, ?, ?)");
$stmt->execute([$employee_id, $car_model, $car_plate]);
?>

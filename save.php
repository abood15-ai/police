<?php
header('Content-Type: application/json');
$host = "localhost";
$user = "اسم_المستخدم";
$pass = "كلمة_المرور";
$db   = "police_data";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die(json_encode(['error'=>'DB connection'])); }

$data = json_decode(file_get_contents('php://input'), true);

$id = intval($data['id']);
$name = $conn->real_escape_string($data['name']);
$point = $conn->real_escape_string($data['point']);
$courses = $conn->real_escape_string($data['courses']);
$discord_id = $conn->real_escape_string($data['discord_id']);
$vacation = $conn->real_escape_string($data['vacation']);
$promotion = $conn->real_escape_string($data['promotion']);

$sql = "UPDATE police_ranks SET name='$name', point='$point', courses='$courses', discord_id='$discord_id', vacation='$vacation', promotion='$promotion' WHERE id=$id";
$conn->query($sql);

echo json_encode(['success'=>true]);
?>
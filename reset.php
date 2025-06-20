<?php
// يعيد تعيين كل القيم المعدلة للقيم الافتراضية (حسب ما تضعه أنت)
header('Content-Type: application/json');
$host = "localhost";
$user = "اسم_المستخدم";
$pass = "كلمة_المرور";
$db   = "police_data";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die(json_encode(['error'=>'DB connection'])); }

// تعيين القيم الافتراضية (يجب عليك تحديدها حسب رغبتك أو يمكنك حذف كل القيم)
$conn->query("UPDATE police_ranks SET name='', point='', courses='', discord_id='', vacation='', promotion=''");

echo json_encode(['success'=>true]);
?>
<?php
include 'db.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';

if (empty($name) || empty($email) || empty($gender)) {
    echo json_encode(['success' => false, 'message' => 'Field tidak boleh kosong']);
    exit;
}

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$stmt = $pdo->prepare("INSERT INTO users (name, email, gender, ip, browser) VALUES (?, ?, ?, ?, ?)");
$result = $stmt->execute([$name, $email, $gender, $ip, $browser]);

echo json_encode(['success' => $result]);
?>

<?php
header('Content-Type: application/json');

$username = $_GET['username'] ?? '';

if ($username === '') {
    echo json_encode(['exists' => false]);
    exit;
}

require 'db.php'; // your DB connection file

$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
$stmt->execute([$username]);
$exists = $stmt->fetchColumn() > 0;

echo json_encode(['exists' => $exists]);

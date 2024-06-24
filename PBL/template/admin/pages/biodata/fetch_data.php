<?php
$host = 'localhost';
$dbname = 'uas';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT id_soal, COUNT(id_jawaban) FROM jawaban_responden group by id_soal');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
}
?>
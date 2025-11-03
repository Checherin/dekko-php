<?

$conn = null;

$BD = 'Finish_work';
$user = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=' . $BD,$user,$password);
} catch (PDOException $err) {
    echo 'Ошибка подключения! ' . $err->getMessage();
}

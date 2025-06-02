<?php 

// $mahasiswa = [
//     "nama" => "Afiq Baihaqi",
//     "NIM"  => "2217020172",
//     "email" => "afiqbaihaqi188@gmail.com"
// ];

$dbh = new PDO('mysql:host=localhost;dbname=pengaduan_system', 'root', '');
$db = $dbh->prepare('SELECT * FROM users');
$db->execute();
$users = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($users);
echo $data;

?>
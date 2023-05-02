<?php

// --  PARAMETER --
// nama container mysql
$host = 'db';

// use name dari database
$user = 'MYSQL_USER';

// password dari database
$pass = 'MYSQL_PASSWORD';

// nama dari database
$mydatabase = 'Redlock';


$conn = new mysqli($host, $user, $pass, $mydatabase);

// SELECT semua data dari tabel users
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

// Cetak/Output data tabel users
echo "=============";
echo "<br>";
echo "|| Redlock Table ||";
echo "<br>";
echo "=============";
foreach ($users as $user) {
    echo "<br>";
    // buat cetak
    echo $user->ID . " - " . $user->Nama . " - " . $user->Alamat . " - " . $user->Jabatan;
    echo "<br>";
}

?>
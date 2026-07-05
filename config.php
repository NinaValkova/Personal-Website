<!-- 
 connRead.php

<?php
$hostname_connRead = "127.0.0.1";
$database_connRead = "personal_website_db";
$username_connRead = "pwread";
$password_connRead = "5T@rmaN";

$connRead = mysqli_connect(
    $hostname_connRead,
    $username_connRead,
    $password_connRead,
    $database_connRead
);

if (!$connRead) {
    die("Database connection failed: " . mysqli_connect_error());
}
?> -->


<!-- 
connWrite.php

<?php
$hostname_connWrite = "127.0.0.1";
$database_connWrite = "personal_website_db";
$username_connWrite = "pwwrite";
$password_connWrite = "Bow!e#CS5";

$connWrite = mysqli_connect(
    $hostname_connWrite,
    $username_connWrite,
    $password_connWrite,
    $database_connWrite
);

if (!$connWrite) {
    die("Database connection failed: " . mysqli_connect_error());
}
?> -->


<?php

return [
    "host" => "localhost",
    "db_name" => "personal_website_db",
    "read" => "pwread",
    "read_pass" => "5T@rmaN",
    "write" => "pwwrite",
    "write_pass" => "Bow!e#CS5",
];
?> 

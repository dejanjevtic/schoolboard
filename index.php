<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SCHOOL BOARD</title>
</head>

<body>

<?php

include 'class_student.php';
include 'DB_connect.php';


$url = $_SERVER['REQUEST_URI'];

$parts=parse_url($url);
$path_parts= explode('/', $parts['path']);
echo $user = $path_parts[4];




?>

</body>

</html>
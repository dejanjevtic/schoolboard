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

$parts = parse_url($url);
$path_parts= explode('/', $parts['path']);
$id = $path_parts[4];

$sql = "SELECT * FROM student WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$name = $row["name"];
		$grade = $row["grade"];
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "  - Grades: " . $row["grade"]." - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}


$student = new Student($name,$grade);
echo $student->averageGrade();


?>

</body>

</html>
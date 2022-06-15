<?php
include("./dbcon.php");

$name = $_POST["name"];
$tel = $_POST["tel"];
$juso = $_POST["juso"];

$sql = "INSERT INTO member (mname, mtel, mjuso)
VALUES ('$name', '$tel', '$juso')";

if (mysqli_query($conn, $sql)) {
  echo "레코드가 저장되었습니다. 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<div>
<a href="./input.php">학생정보입력</a>
<a href="./list.php">학생목록</a>
</div>
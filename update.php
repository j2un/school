<?php
    include("./dbcon.php");

    $no = $_GET["no"];

$sql = "SELECT * FROM member where mno=".$no;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nameprt = $row["mname"];
        $telprt = $row["mtel"];
        $jusoprt = $row["mjuso"];
    }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학생정보수정</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="no" value="<?php echo $no; ?>">
<div>
이름 <input type="text" name="name" value='<?php echo $nameprt; ?>'>
</div>
<div>
전화번호 <input type="text" name="tel" value='<?php echo $telprt; ?>'>
<div>
주소 <input type="text" name="juso" value='<?php echo $jusoprt; ?>'>
</div>
<input type="submit" value="수정">
</body>
</html>
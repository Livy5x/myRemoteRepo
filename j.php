<?php 
require("dbconnect.php");

$sql = "select * from todo where status = '已完成';";
$result = mysqli_query($conn, $sql);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>

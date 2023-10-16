<?php
require("dbconnect.php");

$id=(int)$_GET['id'];

$sql = "UPDATE todo SET status = '已完成' WHERE id =?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
if (mysqli_stmt_execute($stmt)) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}


mysqli_close($conn);
?>

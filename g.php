<?php
require("dbconnect.php");

$jobName = $_POST['jobName'];
$jobUrgent = $_POST['jobUrgent'];
$jobContent = $_POST['jobContent'];
$id = (int)$_POST['jobID']; 

$sql = "UPDATE todo SET jobName =?, jobUrgent =?, jobContent =? WHERE id =?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssi", $jobName, $jobUrgent, $jobContent, $id);
if (mysqli_stmt_execute($stmt)) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}


mysqli_close($conn);
?>

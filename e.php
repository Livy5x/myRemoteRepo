<?php
require("dbconnect.php");
$jobName = $_POST['jobName'];
$jobUrgent = $_POST['jobUrgent'];
$jobContent = $_POST['jobContent'];

// 寫進資料
$sql = "INSERT INTO todo (jobName, jobUrgent, jobContent) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $jobName, $jobUrgent, $jobContent);
if (mysqli_stmt_execute($stmt)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

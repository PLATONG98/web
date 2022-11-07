<?php
include './database.php';

$Name = $_POST['bname'];
$ID = $_POST['bid'];
$Number = $_POST['bnumber'];
$id = $_POST['id'];

$sql = "update lib_book set Status='Borrowed' where ID='$id'";
$sql = "INSERT INTO lib_user (ID,Name,Number) VALUES ($ID,$Name,$Number)";


if (mysqli_query($conn, $sql)) {
    echo "Successfully";
    header("Location: /pages/admin.php");
} else {
    $sql = "update lib_user set Amount=Amount + 1, Name='$Name' where ID='$ID'";
    echo "Error  : " . mysqli_error($conn);
}
mysqli_close($conn);

<?php
include './database.php';

$id = $_POST['id'];
$Name = $_POST['bname'];
$Type = $_POST['btype'];
$Author = $_POST['bauthor'];
$Image = $_POST['bimage'];
$Synopsis = $_POST['bsynopsis'];
$Status = $_POST['bstatus'];

$sql = "update lib_book set Name='$Name', Type='$Type', Author='$Author', Image='$Image', Synopsis='$Synopsis', Status='$Status' where ID='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
    header("Location: /pages/admin.php");
} else {
    echo "Error deleting : " . mysqli_error($conn);
}
mysqli_close($conn);

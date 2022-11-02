<?php
include './database.php';

$Name = $_POST['bname'];
$Type = $_POST['btype'];
$Author = $_POST['bauthor'];
$Image = $_POST['bimage'];
$Synopsis = $_POST['bsynopsis'];

$sql = "INSERT INTO lib_book (Name,Type,Author,Synopsis,Image) VALUES ('$Name','$Type','$Author','$Image','$Synopsis')";
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
    header("Location: /pages/admin.php");
} else {
    echo "Error deleting : " . mysqli_error($conn);
}
mysqli_close($conn);

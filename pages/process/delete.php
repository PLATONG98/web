<?php
include_once 'database.php';
$sql = "DELETE FROM lib_book WHERE ID='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
    header("Location: /pages/admin.php");
} else {
    echo "Error deleting : " . mysqli_error($conn);
}
mysqli_close($conn);
?>
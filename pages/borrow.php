<?php
include 'process/database.php';
$sql = " SELECT * FROM lib_book where id=".$_GET["id"];
$result = $conn->query($sql);
$conn->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/pages/borrow.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <img src="../asset/bg.png" id="bg" alt="">
    <header>
        <navbar>
            <div class="topnav">
                <a href="../index.php">หน้าหลัก</a>
                <a class="active" href="#lists">ค้นหาหนังสือ</a>
                <a class="account" href="./admin.php"><i class="fas fa-tools" style='font-size:20px'></i></a>
            </div>
        </navbar>
    </header>
    <section>
        <table>
            <?php while ($rows = $result->fetch_assoc()) { ?>
                <tr>
                    <th colspan="4"><?php echo $rows['Name']; ?></th>
                </tr>
                <tr>
                    <td class="synopsis" colspan="4"><?php echo $rows['Synopsis']; ?></td>
                </tr>
                <th>ประเภท</th>
                <th>ผู้แต่ง</th>
                <th colspan="4">ดำเนินการ</th>
                <tr>
                    <td  class="type"><?php echo $rows['Type']; ?></td>
                    <td  class="author"><?php echo $rows['Author']; ?></td>
                    <td class="action"><a href="./lists.php">กลับ</a></td>
                    <td class="action"><a href="./process/borrowing.php">ดำเนินการต่อ</a></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>

</html>
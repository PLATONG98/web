<?php
include 'process/database.php';
$sql = " SELECT * FROM lib_book ORDER BY ID DESC ";
$result = $conn->query($sql);
$conn->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/pages/admin.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <img src="../asset/bg.png" id="bg" alt="">
    <header>
        <navbar>
            <div class="topnav">
                <a href="../index.php">หน้าหลัก</a>
                <a href="./lists.php">ค้นหาหนังสือ</a>
                <a class="account" href="#admin"><i class="fas fa-tools" style='font-size:20px'></i></a>
            </div>
        </navbar>
    </header>
    <section>
        <table id="Table">
            <input type="text" size="100" id="Search" onkeyup="search()" placeholder="Search...">
            <td class="add"><a href='add.php'>เพิ่มหนังสือ</a></td>
            <tr>
                <th>รูปภาพ</th>
                <th>ชื่อ</th>
                <th>ประเภท</th>
                <th>สถานะ</th>
                <th>ผู้แต่ง</th>
                <th colspan="2">ดำเนินการ</th>
            </tr>
            <?php while ($rows = $result->fetch_assoc()) { ?>
                <tr>
                    <td><img src="<?php echo $rows['Image']; ?>" height="150"></td>
                    <td><?php echo $rows['Name']; ?></td>
                    <td><?php echo $rows['Type']; ?></td>
                    <td><?php echo $rows['Status']; ?></td>
                    <td><?php echo $rows['Author']; ?></td>
                    <td class="delete"><?php echo "<a href='process/delete.php?id=" . $rows['ID'] . "'>ลบ</a>"; ?></td>
                    <td class="update"><?php echo "<a href='edit.php?id=" . $rows['ID'] . "'> แก้ไข</a>"; ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>

<script>
    function search() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("Search");
        filter = input.value.toUpperCase();
        table = document.getElementById("Table");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    tr[i].style.transition = "0.5s";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</html>
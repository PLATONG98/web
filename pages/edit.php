<?php
include 'process/database.php';
$sql = " SELECT * FROM lib_book where id=".$_GET["id"];
$result = $conn->query($sql);
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/pages/edit.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <img src="../asset/bg.png" id="bg" alt="">
    <h3>แก้ไขข้อมูล</h3>
    <form name="addingform" action="./process/insert.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <?php while ($rows = $result->fetch_assoc()) { ?>
                <div class="form_group">
                    <label>ชื่อหนังสือ</label>
                    <input class="input_text" placeholder="<?php echo $rows['Name']; ?>" size="100" type="text" name="bname" value=""/>
                </div>
                <div class="form_group">
                    <label>ประเภท</label>
                    <input class="input_text" placeholder="<?php echo $rows['Type']; ?>" size="100" type="text" name="btype" value=""/>
                </div>
                <div class="form_group">
                    <label>ผู้แต่ง</label>
                    <input class="input_text" placeholder="<?php echo $rows['Author']; ?>" size="100" type="text" name="bauthor" value=""/>
                </div>
                <div class="form_group">
                    <label>รูปภาพ</label>
                    <input class="input_text" placeholder="<?php echo $rows['Image']; ?>" size="100" type="text" name="bimage" value=""/>
                </div>
                <div class="form_group">
                    <label>เรื่องย่อ</label>
                    <input class="input_text" placeholder="<?php echo $rows['Synopsis']; ?>" size="100" type="text" name="bsynopsis" value=""/>
                </div>
                <div class="form_group">
                    <input class="btn" type="submit" name="btn" value="บันทึก" />
                </div>
            <?php }
            $conn->close(); ?>
        </div>
    </form>
</body>

</html>
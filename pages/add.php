<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/pages/add.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <img src="../asset/bg.png" id="bg" alt="">
    <h3>เพิ่มข้อมูล</h3>
    <form name="addingform" action="./process/insert.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="form_group">
                <label>ชื่อหนังสือ</label>
                <input size="100" type="text" name="bname" value="" required />
            </div>
            <div class="form_group">
                <label>ประเภท</label>
                <input size="100" type="text" name="btype" value="" required />
            </div>
            <div class="form_group">
                <label>ผู้แต่ง</label>
                <input size="100" type="text" name="bauthor" value="" required />
            </div>
            <div class="form_group">
                <label>รูปภาพ</label>
                <input size="100" type="text" name="bimage" value="" required />
            </div>
            <div class="form_group">
                <label>เรื่องย่อ</label>
                <input size="100" type="text" name="bsynopsis" value="" required />
            </div>
            <div class="form_group">
                <input class="btn" type="submit" name="btn" value="เพิ่ม" />
            </div>
        </div>
    </form>
</body>

</html>
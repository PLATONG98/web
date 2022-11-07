<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/pages/add.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <img src="../asset/bg.png" id="bg" alt="">
    <h3>ยืมหนังสือ</h3>
    <form name="addingform" action="./process/insert-user.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <input type='hidden' name='id' value='<?php echo $_GET["id"]; ?>'>
            <div class="form_group">
                <label>ชื่อ</label>
                <input size="100" type="text" name="bname" value="" required />
            </div>
            <div class="form_group">
                <label>รหัสประจำตัวนักเรียน</label>
                <input size="100" type="text" name="bid" value="" required />
            </div>
            <div class="form_group">
                <label>เบอร์โทรศัพท์</label>
                <input size="100" type="text" name="bnumber" value="" required />
            </div>
            <div class="form_group">
                <input class="btn" type="submit" name="btn" value="ยืม" />
            </div>
        </div>
    </form>
</body>

</html>
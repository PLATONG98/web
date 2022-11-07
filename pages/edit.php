<?php
include 'process/database.php';
$sql = " SELECT * FROM lib_book where id=" . $_GET["id"];
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
    <form name="addingform" action="./process/update.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <?php while ($rows = $result->fetch_assoc()) { ?>
                <input type='hidden' name='id' value='<?php echo $_GET["id"]; ?>'>
                <div class="form_group">
                    <label>ชื่อหนังสือ</label>
                    <input class="input_text" value="<?php echo $rows['Name']; ?>" size="100" type="text" name="bname" value="" />
                </div>
                <div class="form_group">
                    <label>ประเภท</label>
                    <select name="btype">
                        <option value='<?php echo $rows['Type']; ?>' selected><?php echo $rows['Type']; ?></option>
                        <option value="นิยาย">นิยาย</option>
                        <option value="หนังสือวาย">หนังสือวาย</option>
                        <option value="นิยายแปล">นิยายแปล</option>
                        <option value="วรรณกรรม">วรรณกรรม</option>
                        <option value="หนังสือบทความ สารคดี">หนังสือบทความ สารคดี</option>
                        <option value="หนังสือเตรียมสอบ แนวข้อสอบ">หนังสือเตรียมสอบ แนวข้อสอบ</option>
                        <option value="การ์ตูน">การ์ตูน</option>
                        <option value="หนังสือเด็ก">หนังสือเด็ก</option>
                        <option value="แม่และเด็ก">แม่และเด็ก</option>
                        <option value="จิตวิทยา การพัฒนาตัวเอง">จิตวิทยา การพัฒนาตัวเอง</option>
                        <option value="สินค้าไลฟ์สไตล์">สินค้าไลฟ์สไตล์</option>
                        <option value="บริหาร ธุรกิจ">บริหาร ธุรกิจ</option>
                        <option value="คอมพิวเตอร์">คอมพิวเตอร์</option>
                        <option value="หนังสือท่องเที่ยว">หนังสือท่องเที่ยว</option>
                        <option value="ธรรมะ ศาสนา และปรัชญา">ธรรมะ ศาสนา และปรัชญา</option>
                        <option value="บ้านและสวน">บ้านและสวน</option>
                        <option value="สุขภาพ ความงาม">สุขภาพ ความงาม</option>
                        <option value="งานอดิเรก งานฝีมือ">งานอดิเรก งานฝีมือ</option>
                        <option value="โหราศาสตร์ ดูดวง ฮวงจุ้ย">โหราศาสตร์ ดูดวง ฮวงจุ้ย</option>
                        <option value="หนังสือต่างประเทศ">หนังสือต่างประเทศ</option>
                        <option value="หนังสือพระราชนิพนธ์">หนังสือพระราชนิพนธ์</option>
                    </select>
                </div>
                <div class="form_group">
                    <label>ผู้แต่ง</label>
                    <input class="input_text" value="<?php echo $rows['Author']; ?>" size="100" type="text" name="bauthor" value="" />
                </div>
                <div class="form_group">
                    <label>รูปภาพ</label>
                    <input class="input_text" value="<?php echo $rows['Image']; ?>" size="100" type="text" name="bimage" value="" />
                </div>
                <div class="form_group">
                    <label>เรื่องย่อ</label>
                    <input class="input_text" value="<?php echo $rows['Synopsis']; ?>" size="100" type="text" name="bsynopsis" value="" />
                </div>
                <div class="form_group">
                    <label>สถานะ</label>
                    <select name="bstatus">
                        <option value='<?php echo $rows['Status']; ?>' selected><?php echo $rows['Status']; ?></option>
                        <option value="Ready">Ready</option>
                        <option value="Unready">Unready</option>
                        <option value="Borrowed">Borrowed</option>
                    </select>
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
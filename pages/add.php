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
                    <select name="btype">
                        <option value="นิยาย" selected>นิยาย</option>
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
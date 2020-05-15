<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>

<body>
    <?php include 'componant/header.php'; ?>
    <!-- BODY -->
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <img class="img-fluid" src="images/thumbnails/myanmar copy.jpg" alt="Card image cap">
                </div>
                <h3 style="margin-top: 20px; margin-bottom: 20px;">Location</h3>
                <ul class="list-group">
                    <li class="list-group-item">มหาเจดีย์ชเวดากอง กรุงย่างกุ้ง</li>
                    <li class="list-group-item">พระมหามัยมุนี แห่งมัณฑะเลย์ </li>
                    <li class="list-group-item">พระธาตุมุเตา เมืองหงสาวดี </li>
                    <li class="list-group-item">หาดฮาปาลี เมืองตั่งตแว </li>
                    <li class="list-group-item">หาดฮเวซวง เมืองปะเต็น </li>
                    <li class="list-group-item">มหาเจดีย์ชเวซิกอง เมืองพุกาม</li>
                </ul>
            </div>
            <div class="col-md-7">
                <h1 style="margin-top: 10px;"><b>Myanmar</b></h1>
                <hr>
                <p class="text-justify">
                    ประเทศพม่าหรือเมียนมาเป็นประเทศเพื่อนบ้านที่อยู่ติดกับประเทศของเราซึ่งมีประชากรประมาณ 60 ล้านคน
                    ที่นี่มีแหล่งวัฒนธรรมมากที่สุดแห่งหนึ่งในโลกด้วยสถานที่น่าสนใจมากมายก็ยกให้ พม่า
                    นี่แหละค่ะหลังจากที่พม่าเริ่มเปิดประเทศให้นักท่องเที่ยวได้เข้าไปเที่ยวกันมากขึ้นหลายคนจึงเริ่มเดินทางไปทัวร์พม่ากันมากมายจนกลายเป็นอีกหนึ่งเส้นทางยอดฮิตที่ราคาไม่แพงแถมยังได้เที่ยวที่ใหม่ๆเหมาะสำหรับผู้ที่ชอบการแสวงบุญรวมไปถึงนักท่องเที่ยว
                </p>
                <form action="php_backend/php_booking.php" method="POST">
                    <input type="hidden" id="type_booking" name="type_booking" value="myanmar">
                    <button class="btn btn-info btn-block" type="submit" role="button">จอง</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>




</html>
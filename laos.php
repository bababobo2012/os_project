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
                    <img class="img-fluid" src="images/thumbnails/laos_travel2.jpg" alt="Card image cap">
                </div>
                <h3 style="margin-top: 20px; margin-bottom: 20px;">Location</h3>
                <ul class="list-group">
                    <li class="list-group-item">น้ำตกตาดกวางสี </li>
                    <li class="list-group-item">ถ้ำกองลอ</li>
                    <li class="list-group-item">ทุ่งไหหิน </li>
                    <li class="list-group-item">พระธาตุหลวง </li>
                    <li class="list-group-item">น้ำตกคอนพะเพ็ง </li>

                </ul>
            </div>
            <div class="col-md-7">
                <h1 style="margin-top: 10px;"><b>Laos</b></h1>
                <hr>
                <p class="text-justify"> "ลาว"
                    เป็นอีกหนึ่งประเทศเพื่อนบ้านที่คนไทยหลายคนคุ้นเคยเป็นอย่างดีและเป็นประเทศที่น่าเที่ยวอีกแห่งหนึ่งเพราะการเดินทางไปเที่ยวสามารถไปได้ง่ายๆ
                    มีให้เลือกหลายเส้นทางด้วยกัน ทั้งทางรถ ทางเรือและทางเครื่องบิน
                    ซึ่งค่าใช้จ่ายในการท่องเที่ยวก็ไม่สูงอีกทั้งยังมีสถานที่ท่องเที่ยวมากมาย
                    ซึ่งเต็มไปด้วยความสมบูรณ์ทางธรรมชาติ
                    ความสงบและเรียบง่ายก็เป็นอีกหนึ่งเสน่ห์เฉพาะตัวที่ทำให้หลายคนต้องหลงรัก</p>
                    <form action="php_backend/php_booking.php" method="POST">
                    <input type="hidden" id="type_booking" name="type_booking" value="laos">
                    <button class="btn btn-info btn-block" type="submit" role="button">จอง</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <div class="modal" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">การจอง</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="ปิด">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>เสร็จสิ้น!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"data-dismiss="modal">บันทึก</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>    -->





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>




</html>
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
                    <img class="img-fluid" src="images/thumbnails/vietnam_travel.jpg" alt="Card image cap">
                </div>
                <h3 style="margin-top: 20px; margin-bottom: 20px;">Location</h3>
                <ul class="list-group">
                    <li class="list-group-item">บาน่าฮิลล์ ดานัง </li>
                    <li class="list-group-item">อ่าวฮาลอง </li>
                    <li class="list-group-item">ซาปา </li>
                    <li class="list-group-item">ภูเขาทรายสองสี </li>
                </ul>
            </div>
            <div class="col-md-7">
                <h1 style="margin-top: 10px;"><b>Vietnam</b></h1>
                <hr>
                <p class="text-justify">"เวียดนาม"
                    เป็นประเทศที่มีธรรมชาติสวยๆเยอะมากจริงๆและด้วยภูมิประเทศที่ทอดตัวยาวลงมาตั้งแต่เหนือจรดใต้
                    ทำให้มีความหลากหลายทางธรรมชาติ
                    ที่บางทีอาจจะนึกไม่ถึงเลยว่าทั้งหมดนี้อยู่ในประเทศเดียวกันและนอกจากธรรมชาติแล้วยังมีสถาปัตยกรรมงดงามน่าชมมากมาย
                </p>
                <form action="php_backend/php_booking.php" method="POST">
                    <input type="hidden" id="type_booking" name="type_booking" value="vietnam">
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
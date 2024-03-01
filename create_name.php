<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create name</title>
    <?php include("include/script.php") ?>
</head>
<body>
<center>
<div class="container-fluid" style="text-align: center; margin-top: 50px;">
    <img src="img/logo.png" alt="Logo" width="270px">
    <h5>กรอกชื่อของคุณ</h5>

<center>
    <input type="text" class="form-control" id="number" name="number" placeholder="หน้าตาดี ทรัพย์จาง " style="width: 250px; border: 1px solid #FF8686; border-radius: 5px;">
</center>

    <a href="home.php" class="btn btn-link" style="color: black;">ข้าม</a>


   <br><br><br>
    <a class="btn btn-pink " href="home.php" style="width: 250px; ">ยืนยัน</a>
</div>
</center> 


<?php
    include("include/footer.php")
        ?>
</body>
</html>

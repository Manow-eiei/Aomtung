<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aomtung</title>
    <?php include("include/script.php") ?>
</head>
<body>
<center>
<div class="container-fluid" style="text-align: center; margin-top: 50px;">
    <img src="img/logo.png" alt="Logo" width="270px">
    <h5>ระบุหมายเลขโทรศัพท์</h5>

    <center>
    <input type="text" class="form-control" id="number" name="number" placeholder="063-xxxxxxx" style="width: 220px; border: 1px solid #FF8686; border-radius: 5px;">
</center>

   <br>
    <a class="btn btn-pink " href="login_otp.php" style="width: 220px; ">ยืนยัน</a>
</div>
</center> 


<?php
    include("include/footer.php")
        ?>
</body>
</html>

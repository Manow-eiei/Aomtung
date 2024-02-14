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
    <img src="img/logo.png" alt="Logo" width="350">
    <h5>ระบุหมายเลขโทรศัพท์</h5>
    <center>
    <input type="text" class="input-form" id="number" name="number" placeholder="063-xxxxxxx" style="width: 200px; margin-top: 15px;">
</center>

   <br>
    <a class="btn btn-pink " href="login_otp.php" style="width: 200px;">ยืนยัน</a>
</div>
</center> 


<?php
    include("include/footer.php")
        ?>
</body>
</html>

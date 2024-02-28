<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Input</title>
    <?php include("include/script.php") ?>

</head>

<body>
    <div class="container-fluid" style="text-align: center; margin-top: 50px;">
        <img src="img/logo.png" alt="Logo" width="270">
        <h5>ระบุรหัส OTP ที่ได้รับจากเบอร์</h5>
        <br>
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)" pattern="[0-9]*"
            inputmode="numeric">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)" pattern="[0-9]*"
            inputmode="numeric">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)" pattern="[0-9]*"
            inputmode="numeric">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)" pattern="[0-9]*"
            inputmode="numeric">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)" pattern="[0-9]*"
            inputmode="numeric">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)" pattern="[0-9]*"
            inputmode="numeric">

        <br><br>
        <h6> <i class="bi bi-arrow-repeat"></i> ส่งรหัส OTP อีกครั้ง</h6>

        <a class="btn btn-pink " href="home.php" style="width: 320px; margin-top: 20px;">ยืนยัน</a>
    </div>

    <script>
    function focusNext(currentInput) {
        const maxLength = parseInt(currentInput.getAttribute("maxlength"));
        const currentLength = currentInput.value.length;

        if (currentLength >= maxLength) {
            const nextInput = currentInput.nextElementSibling;

            if (nextInput && nextInput.tagName === "INPUT") {
                nextInput.focus();
            }
        }
    }
    </script>
    <?php
        include("include/footer.php")
    ?>
</body>

</html>
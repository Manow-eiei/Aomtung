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
    <img src="img/logo.png" alt="Logo" width="350">
        <h5>ระบุรหัส OTP ที่ได้รับจากเบอร์</h5>
        <br>
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)">
        <input type="text" class="otp-input" maxlength="1" oninput="focusNext(this)">

        <br>
        <a class="btn btn-pink" href="#" style="width: 200px; margin-top: 20px;">ยืนยัน</a>
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
</body>
</html>

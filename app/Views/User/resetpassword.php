<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <title>Đăng Nhập</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sedgwick+Ave&display=swap"
        rel="stylesheet">

</head>

<body>
    <img src="assets/images/logo.png" alt="logo" id="logo">
    <main>
        <h1>Quản lý sinh viên</h1>
        <!-- Form nhập mã OTP và mật khẩu mới -->
        <form id="reset-password-form" style="">
            <h4>QUÊN MẬT KHẨU</h4>
            <div class="group">
                <label for="new-password">Mật khẩu mới</label>
                <input type="password" id="new-password" name="new-password" placeholder="Mật khẩu mới" required>
                <img id="view-pw" src="assets/images/eyeopen.svg" alt="show/hide password">
            </div>
            <div class="group">
                <label for="new-password">Nhập lại mật khẩu</label>
                <input type="password" id="new-password-2" name="new-password-2" placeholder="Mật khẩu mới" required>
                <img id="view-pw-2" src="assets/images/eyeopen.svg" alt="show/hide password">
            </div>
            <button type="submit" class="button-24" id="reset-password-btn">Đổi mật khẩu</button>
        </form>
    </main>
    <script>
        document.getElementById("new-password").addEventListener('input', function() {
            if (this.value) {
                document.getElementById("view-pw").style.display = 'block';
            } else {
                document.getElementById("view-pw").style.display = 'none';
            }
        })
        document.getElementById("new-password-2").addEventListener('input', function() {
            if (this.value) {
                document.getElementById("view-pw-2").style.display = 'block';
            } else {
                document.getElementById("view-pw-2").style.display = 'none';
            }
        })
        document.getElementById("view-pw").addEventListener('click', function() {
            let pw = document.getElementById("password");
            if (pw.getAttribute('type') == 'password') {
                pw.setAttribute('type', "text");
                this.src = this.src.replace('open', 'close')
            } else {
                pw.setAttribute('type', "password");
                this.src = this.src.replace('close', 'open')
            }
        });
    </script>
</body>

</html>
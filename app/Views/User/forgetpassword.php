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
        <form action="<?= base_url('/checkotp') ?>" method="get">
            <h4>QUÊN MẬT KHẨU</h4>
            <div class="group">
                <label for="">Tài khoản/ Email</label>
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <button type="submit" class="button-24" id="forget-password-btn">Lấy mã OTP</button>
        </form>


    </main>
   

    <script>
        document.getElementById("password").addEventListener('input', function() {
            if (this.value) {
                document.getElementById("view-pw").style.display = 'block';
            } else {
                document.getElementById("view-pw").style.display = 'none';
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
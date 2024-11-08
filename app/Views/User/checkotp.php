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
        <form action="<?= base_url('/resetpassword') ?>" method="get">
            <h4>QUÊN MẬT KHẨU</h4>
            <div class="group">
                <label for="otp">Nhập mã OTP</label>
                <input type="text" id="otp" name="otp" placeholder="Nhập mã OTP" required>
            </div>
            <button type="submit" class="button-24" id="reset-password-btn">Xác nhận</button>
        </form>
    </main>
    
</body>

</html>
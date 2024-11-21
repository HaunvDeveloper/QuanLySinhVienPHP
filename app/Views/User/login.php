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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!---<img src="assets/images/logo.png" alt="logo" id="logo">--->
    <main>
        <!---<h1>Quản lý sinh viên</h1>
        <form action="<?= base_url('/login') ?>" method="post">
            <h4>ĐĂNG NHẬP</h4>
            <div class="group">
                <label for="">Tài khoản</label>
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="group">
                <label for="">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
                <img id="view-pw" src="assets/images/eyeopen.svg" alt="">

                <a href="<?= base_url('/forgetpassword') ?>">Quên mật khẩu?</a>
            </div>
            <button class="button-24" role="button">ĐĂNG NHẬP</button>
        </form>

        --->

        <form action="<?= base_url('/login') ?>" method="post">
        <div class="container">
            <div class="left-section">
                <div class="information">
                    <img src="assets/images/logo-HCMUE.png" alt="Logo" class="logo" >
                    <h1>Sign in to</h1>
                    <h2>Student Information System</h2>
                </div>
                
                <img src="assets/images/Toa-nha-A-01.png" alt="Building Illustration" class="building">
            </div>
            <div class="right-section">
                <div class="login-box">
                    <h3>Sign in</h3>
                    <form>
                        <div class="input-group">
                            <input type="text" placeholder="Enter email or username" required>
                        </div>
                        <div class="input-group">
                            <input type="password" id="password" name ="password" placeholder="Password" required>
                            <i class="fa-solid fa-eye" id="show-password"></i>
                        </div>
                        <div class="forgot-password">
                            <a href="<?= base_url('/forgetpassword') ?>">Forgot password?</a>
                        </div>
                        <button type="submit" class="login-btn">Login</button>
                    </form>
                    <p class="register-link">If you don't have an account, register <a href="#">here</a>!</p>
                </div>
            </div>
        </div>
        <footer>
            <p>By Díp Dồ</p>
        </footer>
        
    </main>

    

    <script>
        // document.getElementById("password").addEventListener('input', function() {
        //     if (this.value) {
        //         document.getElementById("view-pw").style.display = 'block';
        //     } else {
        //         document.getElementById("view-pw").style.display = 'none';
        //     }
        // })
        // document.getElementById("view-pw").addEventListener('click', function() {
        //     let pw = document.getElementById("password");
        //     if (pw.getAttribute('type') == 'password') {
        //         pw.setAttribute('type', "text");
        //         this.src = this.src.replace('open', 'close')
        //     } else {
        //         pw.setAttribute('type', "password");
        //         this.src = this.src.replace('close', 'open')
        //     }
        // });

        const showPassword = document.querySelector("#show-password");
        const passwordField = document.querySelector("#password");
        
        showPassword.addEventListener("click", function () {
            if (this.classList.contains("fa-eye")) {
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
            } else {
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
            }
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);
        });
        
    </script

</body>

</html>
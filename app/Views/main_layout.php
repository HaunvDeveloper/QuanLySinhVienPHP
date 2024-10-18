<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sedgwick+Ave&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- Section Links -->
    <?= $this->renderSection('links') ?>
</head>

<body>
    <header>
        <div id="header-info" class="w-100">
            <img id="logo" src="assets/images/logo.png" width="150">
            <h1>Quản lý HCMUE</h1>
        </div>
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #056392;" id="header-bar">
            <div class="container my-container-header">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0 gap-4">
                        <li class="nav-item">
                            <a class="nav-link  text-light active thanhtieude" href="<?= base_url('/') ?>" aria-current="page">
                                <img src="assets/images/house-solid.svg" alt="" width="20">
                                TRANG CHỦ
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light thanhtieude" href="<?= base_url('course') ?>" aria-current="page">
                                <img src="assets/images/bookmark.svg" alt="" width="14">
                                MÔN HỌC
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light thanhtieude" href="<?= base_url(relativePath: 'teacher') ?>">
                                <img src="assets/images/user.svg" alt="" width="18">
                                DANH SÁCH GIÁO VIÊN
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  text-light thanhtieude" href="#" id="dropdownId"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/circle-solid.svg" alt="" width="20">
                                CHỨC NĂNG
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Admin Action 2</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light thanhtieude" href="<?= base_url('about') ?>">
                                <img src="assets/images/infor.svg" alt="" width="20">
                                    THÔNG BÁO
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="search-bt">
                            <img src="assets/images/search.svg" alt="" width="20">
                        </button>
                    </form>
                </div>
            </div>
        </nav>


    </header>

    <!-- Section Body -->
    <main>
        <?= $this->renderSection('body') ?>
    </main>
    

    <footer>
        <div id="footer-info">
            <div class="row">
                <div class="col-6 column">
                    <h4>Trường Đại học Sư phạm Thành phố Hồ Chí Minh</h4>
                    <h6>Địa chỉ: 280 An Dương Vương, Quận 5, TP.HCM</h6>
                    <h6>Email: hcmue@edu.vn</h6>
                </div>
                <div class="col-6 column">
                    <img src="assets/images/hcmue.jpg" alt="" class="imghcmue">
                    <h6>Số lượng truy cập: xxxxxx</h6>
                    <h1>::.</h1>
                </div>
            </div>

            <div id="sign">
                <p>By Díp Dồ Team </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>
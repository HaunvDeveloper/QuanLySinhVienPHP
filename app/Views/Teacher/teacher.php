<!-- app/Views/about.php -->
<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    Danh sách giáo viên
<?= $this->endSection() ?>


<?= $this->section('links') ?>
    <link rel="stylesheet" href="assets/css/teacher.css">
<?= $this->endSection() ?>



<?= $this->section('body') ?>
<div class="container">
        <h2>QUẢN LÝ NHÂN LỰC</h2>
        <h3>Thông tin nhân viên</h3>
        <label for="department">Đơn vị công tác:</label>
        <select id="department">
            <option value="PhongCNTT">Phòng CNTT</option>
            <!-- Add more options if needed -->
        </select>

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Đơn vị công tác</th>
                </tr>
            </thead>
            <tbody id="employeeTable">
                <!-- Employee data will be loaded here -->
                
            </tbody>
        </table>

        <div class="pagination">
            <!-- Pagination links -->
           
        </div>

        <button id="addButton">Thêm</button>
        <button id="editButton">Chỉnh sửa</button>
        <button id="searchButton">Tìm kiếm</button>
    </div>
<?= $this->endSection() ?>




<?= $this->section('scripts') ?>
    <script src="/assets/js/about.js"></script>
<?= $this->endSection() ?>


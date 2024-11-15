<!-- app/Views/about.php -->
<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    Danh sách giáo viên
<?= $this->endSection() ?>


<?= $this->section('links') ?>
    <link rel="stylesheet" href="assets/css/course.css">
<?= $this->endSection() ?>



<?= $this->section('body') ?>
<div class="container">
  <div class="table-container m-4">
    <h4 class="text-center mb-4 mt-2" style="font-size:35px;font-weight:bold;">DANH SÁCH MÔN HỌC</h4>
    <div class="d-flex justify-content-between mb-3">
      <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary">Filters</button>
        <button class="btn btn-outline-secondary">Export</button>
      </div>
      <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-add-course">+ Thêm môn học</button>
    </div>
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Mã môn học</th>
          <th>Tên môn học</th>
          <th>Khoa - Bộ môn</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>COMP18001</td>
          <td>Công nghệ phần mềm</td>
          <td>Công nghệ Thông tin</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <tr>
          <td>COMP18002</td>
          <td>Công nghệ phần mềm</td>
          <td>CNTT</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <tr>
          <td>COMP18101</td>
          <td>Thiết kế web</td>
          <td>CNTT</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <tr>
          <td>COMP18101</td>
          <td>Thiết kế web</td>
          <td>CNTT</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <tr>
          <td>COMP18101</td>
          <td>Thiết kế web</td>
          <td>CNTT</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <tr>
          <td>COMP18101</td>
          <td>Thiết kế web</td>
          <td>CNTT</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <tr>
          <td>COMP18101</td>
          <td>Thiết kế web</td>
          <td>CNTT</td>
          <td><button class="btn btn-link text-decoration-none">⋮</button></td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>

    
    <div class="pag-container middle">
        <div class="pagination">
            <ul>
                <img class="move previous" src="assets/images/circle-chevron-right-solid.svg" alt="">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <img class="move next" src="assets/images/circle-chevron-right-solid.svg" alt="">

            </ul>
        </div>
    </div>

  </div>
</div>



<div class="modal" id="myModal">
  <form class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Thêm Môn Học</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="form-group">
            <label for="" class="form-label">Mã Môn Học</label>
            <input type="text" class="form-control" name="" id="">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Tên Môn Học</label>
            <input type="text" class="form-control" name="" id="">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Khoa/ Bộ môn</label>
            <select name="" class="form-control" id="">
                <option value="1">CNTT</option>
                <option value="2">Toan</option>
                <option value="3">Ly</option>
            </select>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Thêm</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
      </div>

    </div>
  </form>
</div>
<?= $this->endSection() ?>




<?= $this->section('scripts') ?>
    <script src="/assets/js/about.js"></script>
<?= $this->endSection() ?>


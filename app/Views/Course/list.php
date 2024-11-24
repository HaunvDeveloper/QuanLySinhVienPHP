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

    <table class="table table-bordered table-hover">
      <thead>
        <tr class="table-primary">
          <th class="text-center text-light">Mã môn học</th>
          <th class="text-center text-light">Tên môn học</th>
          <th class="text-center text-light">Số tín chỉ</th>
          <th class="text-center text-light">Khoa - Bộ môn</th>
          <th width="13%"></th>
        </tr>
      </thead>
      <tbody>
        <?php for($i = 0; $i < 15; $i++): ?>
        <tr>
          <td>COMP18001</td>
          <td>Công nghệ phần mềm</td>
          <td class="text-center">3</td>
          <td>Công nghệ Thông tin</td>
          <td class="text-center">
            <a href="" class="btn-service btn btn-primary mx-1"><img src="assets/images/pen-solid.svg" height="20" alt=""></a>
            <a href="" class="btn-service btn btn-danger"><img src="assets/images/trash-solid.svg" height="20" alt=""></a>
          </td>
        </tr>
        <?php endfor; ?>
        
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
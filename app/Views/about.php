<!-- app/Views/about.php -->
<?= $this->extend('main_layout') ?>

<?= $this->section('title') ?>
    Trang chủ
<?= $this->endSection() ?>

<?= $this->section('links') ?>
    
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <h1>About Us</h1>
    <p>This is the about page. Welcome!</p>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="/assets/js/about.js"></script>
<?= $this->endSection() ?>
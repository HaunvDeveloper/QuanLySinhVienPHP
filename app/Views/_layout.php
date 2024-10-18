<!-- app/Views/layouts/main_layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    
    <!-- Section Links -->
    <?= $this->renderSection('links') ?>
</head>
<body>
    <!-- Section Body -->
    <?= $this->renderSection('body') ?>

    <!-- Section Scripts -->
    <?= $this->renderSection('scripts') ?>
</body>
</html>

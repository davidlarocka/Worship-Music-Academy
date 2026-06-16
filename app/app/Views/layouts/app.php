<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'App') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/wma.css') ?>">
</head>
<body style="background: var(--wma-bg); color: var(--wma-text);">
    <div class="app-shell">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>

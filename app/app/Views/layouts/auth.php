<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Auth') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/wma.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body class="auth-page" style="background: var(--wma-bg); color: var(--wma-text);">
    <?= view('layouts/auth-header') ?>
    <main class="auth-layout">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>

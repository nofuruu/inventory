<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $this->include('skins/links') ?>

</head>

<body class="page-wrapper">
    <div class="page-container">


        <?= view('skins/header') ?>

        <?= view('skins/sidebar') ?>

        <div class="page-content">
            <main>
                <?= $this->renderSection('content') ?>
            </main>
        </div>

        <?= view('partials/footer') ?>

    </div>

</body>

</html>
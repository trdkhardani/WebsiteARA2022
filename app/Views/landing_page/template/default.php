<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | ARA HMIT ITS 2022</title>
    <meta name="description" content="Mendorong Inovasi dan Pembangunan Infrastruktur Teknologi untuk Indonesia">
    <meta name="keywords" content="ARA, A Renewal Agent, Teknologi Informasi, Institut Teknologi Sepuluh Nopember">
    <meta name="author" content="Divisi Website ARA 2022">

    <?= $this->include("landing_page/component/default-link"); ?>
    <?= $this->renderSection('custom-css') ?>
</head>

<body>
    <?= $this->include("landing_page/component/navbar"); ?>

    <main class="text-white">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include("landing_page/component/footer"); ?>

    <?= $this->include("landing_page/component/default-js"); ?>
    <?= $this->renderSection('custom-js') ?>
</body>

</html>
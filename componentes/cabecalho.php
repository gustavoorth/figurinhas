<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./recursos/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.css">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <title>Figurinhas</title>
</head>
<body class="d-flex flex-column min-vh-100">
<div id="liveAlertPlaceholder" class="position-fixed start-50 w-fit z-index-999" 
    style="margin-top: 8rem; transform: translate(-50%, -50%); width: fit-content; z-index: 999;"></div>
    <main class="main" id="top">
        <div class="container" data-layout="container">
        <?php 
            include 'navbar.php';
        ?>
            <div class="content">
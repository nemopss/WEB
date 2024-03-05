<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Домашняя страница</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>

<body>
    <main>
        <a href="../lab_1/index.html"> 1</a>
        <a href="../lab_2/index.html"> 2</a>
        <a href="authentification.php"> 3</a>
        <a href="../lab_4/header.php"> 4</a>
    </main>
    <?php
    $seconds = date('s');
    $image = ($seconds % 2 == 0) ? 'images/cat.jpeg' : 'images/dog.jpeg';
    ?>
    <img class="catdog" src="<?php echo $image; ?>" alt="Картинка с сюрпризом">
    <footer class="footer">
        <p class="container">
            &copy; Авторское право данного сайта закрепляется за Гладилиным Алексеем Алексеевичем с 24.11.2023.
            Сформировано в
            <?php echo date('d.m.Y'); ?>
            <?php echo date('H:i:s'); ?>.
        </p>
    </footer>
</body>

</html>
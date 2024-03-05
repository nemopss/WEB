<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="styles/form.css">
</head>

<body>
    <header class="header">
        <div class="mail">
            
            <a class="bton" href="mailto:alexey_gladilin@mail.ru">Написать мне</a>
        </div>
        <div class="container">
            <nav class="main-menu">

                <a href="<?php
                $name = 'Обратная связь';
                $link = 'index.php';
                $current_page = true;
                echo $link;

                ?>" class="<?php
                if ($current_page)
                    echo 'selected_menu';
                else
                    echo 'navigation';
                ?>">
                    <?php
                    echo $name;
                    ?>
                </a>

                <a href="<?php
                $name = 'Главная';
                $link = 'dbconnect.php';
                $current_page = false;
                echo $link;

                ?>" class="<?php
                if ($current_page)
                    echo 'selected_menu';
                else
                    echo 'navigation';
                ?>">
                    <?php
                    echo $name;
                    ?>
                </a>
            </nav>
        </div>
    </header>

<?php
$pageTitle = 'Форма обратной связи';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <?php date_default_timezone_set('Europe/Moscow');?>
</head>

<body class="body-auth">
    <header class="header">
        <div class="mail">
            <h1>Гладилин Алексей Алексеевич - Начинающий веб-разработчик</h1>
            <a class="bton" href="mailto:alexey_gladilin@mail.ru">Написать мне</a>
        </div>
        <div class="container">
            <nav class="main-menu">
                <a class="title" href="">Моя страница</a>
                <a href="<?php
                    $name='Аутентификация';
                    $link='authentification.php';
                    $current_page=false;
                    echo $link;
                    
                ?>" class="<?php
                    if($current_page)
                        echo 'selected_menu';
                    else
                        echo 'navigation';
                ?>"><?php
                    echo $name;
                ?></a>

                <a href="<?php
                    $name='Обратная связь';
                    $link='feedback.php';
                    $current_page=true;
                    echo $link;
                    
                ?>" class="<?php
                    if($current_page)
                        echo 'selected_menu';
                    else
                        echo 'navigation';
                ?>"><?php
                    echo $name;
                ?></a>

                <a href="<?php
                    $name='Фотография с сюрпризом';
                    $link='index.php';
                    $current_page=false;
                    echo $link;
                    
                ?>" class="<?php
                    if($current_page)
                        echo 'selected_menu';
                    else
                        echo 'navigation';
                ?>"><?php
                    echo $name;
                ?></a>
            </nav>
        </div>
    </header>
    <h1><?php echo $pageTitle?></h1>
    <div class="container">
        <form action="https://httpbin.org/post" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label" for="login">Логин</label>
                <input id="login" type="text" name="login" placeholder="Введите свой логин" required>
            </div>

            <div>
                <label class="form-label" for="password">Пароль</label>
                <input id="password" type="password" name="password" placeholder="Введите свой пароль" required>
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember" id="remember" value="yes">
                <label for="remember">Запомнить меня?</label>
            </div>

            <input class="btn" type="submit" value="Войти">
        </form>
    </div>
    <footer class="footer">
        <p class="container">
            &copy; Авторское право данного сайта закрепляется за Гладилиным Алексеем Алексеевичем с 24.11.2023.
            Сформировано в <?php
            date_default_timezone_set('Europe/Moscow');
            echo date('d.m.Y');?> <?php echo date('H:i:s');?>.
        </p>
    </footer>
</body>

</html>
<?php
$pageTitle = 'Форма обратной связи';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $pageTitle ?>
    </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <?php date_default_timezone_set('Europe/Moscow'); ?>
</head>

<body class="body-form">
    <header class="header">
        <div class="mail">
            <h1>Гладилин Алексей Алексеевич - Начинающий веб-разработчик</h1>
            <a class="bton" href="mailto:alexey_gladilin@mail.ru">Написать мне</a>
        </div>
        <div class="container">
            <nav class="main-menu">
                <a class="title" href="">Моя страница</a>
                <a href="<?php
                $name = 'Аутентификация';
                $link = 'authentification.php';
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

                <a href="<?php
                $name = 'Обратная связь';
                $link = 'feedback.php';
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
                $name = 'Фотография с сюрпризом';
                $link = 'index.php';
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
    <h1>
        <?php echo $pageTitle ?>
    </h1>
    <div class="container">
        <form action="https://httpbin.org/post" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label" for="name">ФИО</label>
                <input id="name" type="text" name="name" placeholder="Введите ФИО" value="Иванов Илья Иванович"
                    required>
            </div>

            <div>
                <label class="form-label" for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Введите свою почту" required>
            </div>

            <div class="form-group">
                <p class="form-label">Как вы узнали о нас?</p>
                <input type="radio" name="source" id="advertising" checked>
                <label for="advertising">Реклама</label>
                <input type="radio" name="source" id="friends">
                <label for="friends">Рассказали знакомые</label>
            </div>

            <div class="form-group">
    <label class="form-label" for="category">Категория обращения</label>
    <select name="category" id="category">
        <?php
        // Ассоциативный массив с категориями и их значениями
        $categories = array(
            "proposal" => "Предложение",
            "grievance" => "Жалоба"
        );

        // Генерация опций на основе элементов массива
        foreach ($categories as $value => $label) {
            echo "<option value=\"$value\">$label</option>";
        }
        ?>
    </select>
</div>


            <div class="form-group">
                <label class="form-label" for="message">Текст сообщения</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
            </div>

            <div class="form-group">
                <input type="checkbox" name="agreement" id="agreement" value="yes">
                <label for="agreement">Даю согласие на обработку персональных данных</label>
            </div>

            <div class="form-group">
                <label class="form-label" for="attachment">Вложение</label>
                <input type="file" name="attachment" id="attachment">
            </div>

            <input class="btn" type="submit" value="Отправить">
        </form>
    </div>
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
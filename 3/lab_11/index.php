<!DOCTYPE html>
<?php
function outDivForm()
{
    // если параметр content не был передан в программу
    if (!isset($_GET['content'])) {
        for ($i = 2; $i < 10; $i++) // цикл со счетчиком от 2 до 9
        {
            echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
            outRow($i); // вызывем функцию, формирующую содержание
            // столбца умножения на $i (на 4, если $i==4)
            echo '</div>';
        }
    } else {
        echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
        outRow($_GET['content']); // выводим выбранный в меню столбец
        echo '</div>';
    }
}

function outTableForm()
{
    // если параметр content не был передан в программу

    if (!isset($_GET['content'])) {

        for ($i = 2; $i < 10; $i++) // цикл со счетчиком от 2 до 9
        {
            echo '<table>';
            // echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
            outTableRow($i); // вызывем функцию, формирующую содержание
            // столбца умножения на $i (на 4, если $i==4)
            // echo '</div>';
            echo '</table>';
        }
    } else {
        echo '<table>'; // оформляем таблицу в блочной форме
        outTableRow($_GET['content']); // выводим выбранный в меню столбец
        echo '</table>';
    }
}

// функция ВЫВОДИТ СТОЛБЕЦ ТАБЛИЦЫ УМНОЖЕНИЯ
function outRow($n)
{
    for ($i = 2; $i <= 9; $i++) { // цикл со счетчиком от 2 до 9
        $val=$i*$n;
        if($i*$n<10 & $i*$n>1){
            $val ='<a href = "index.php?content='.$val.'">'.$val.'</a>'; 
        }
        echo '<a href = "index.php?content=' . $n . '">' . $n . '</a> x ' . '<a href = "index.php?content=' . $i . '">' . $i . '</a>' . '=' . $val . '<br>'; // выводим строку столбца с тегом
    }
}
function outTableRow($n)
{
    for ($i = 2; $i <= 9; $i++) { // цикл со счетчиком от 2 до 9
        $val = $i * $n;
        if ($i * $n < 10 & $i * $n > 1) {
            $val = '<a href = "index.php?content=' . $val . '">' . $val . '</a>';
        }
        echo '<tr><td><a href = "index.php?content=' . $n . '">' . $n . '</a> x ' . '<a href = "index.php?content=' . $i . '">' . $i . '</a>' . '=' . $val . '</td></tr>'; // выводим строку столбца с тегом

    }
}

?>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Гладилин Алексей Алексеевич 221-361 лаб. 11</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <?php date_default_timezone_set('Europe/Moscow'); ?>

</head>

<body>
    <header>
        <h1>Гладилин Алексей Алексеевич 221-361 лаб. 11</h1>
        <?php
        $content = '';
        if (isset($_GET['content'])) {
            $content = '&content=' . $_GET['content'];
        }

        echo '<a href="?html_type=table' . $content . '"';
        if (isset($_GET['html_type']) && $_GET['html_type'] == 'table') {
            echo 'class="link select">';
        } else {
            echo 'class="link">';
        }
        echo 'Tабличная верстка</a>';

        echo '<a href="?html_type=div' . $content . '"';
        if (isset($_GET['html_type']) && $_GET['html_type'] == 'div') {
            echo 'class="link select">';
        } else {
            echo 'class="link">';
        }
        echo 'Блочная верстка</a>'
        ?>
    </header>


    <main>
        <div class="sidenav">

            <?php
            $html_type = '';
            if (isset($_GET["html_type"])) {
                $html_type = $_GET['html_type'];
                echo '<a href="index.php?html_type=' . $html_type . '"'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
            } else {
                echo '<a href="index.php"'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
            }
            if (!isset($_GET['content'])) // если в скрипт НЕ был передан параметр content
                echo ' class="select"'; // ссылка выделяется через CSS-класс
            echo '>Вся таблица</a>'; // конец ссылки
            for ($i = 2; $i <= 9; $i++) // цикл со счетчиком от 2 до 9 включительно
            {
                if (isset($_GET["html_type"])) {
                    $html_type = $_GET['html_type'];
                    echo '<a href="index.php?html_type=' . $html_type . '&content=' . $i . '"';
                } else {
                    echo '<a href="index.php?content=' . $i . '"';
                }
                // если в скрипт был передан параметр content
                // и параметр равен значению счетчика
                if (isset($_GET['content']) && $_GET['content'] == $i)
                    echo ' class="select"'; // ссылка выделяется через CSS-класс
                echo '>Таблица на ' . $i . '</a>'; // конец ссылки
            }
            ?>
        </div>
        <div class="right_block">
            <?php

            if (isset($_GET['html_type']) && $_GET['html_type'] == 'table')
                outTableForm(); // выводим таблицу умножения в табличной форме
            else
                outDivForm(); // выводим таблицу умножения в блочной форме


            ?>
        </div>
    </main>


    <footer>
        <p>Тип верстки: <?php if (isset($_GET['html_type']) && $_GET['html_type'] == 'table') {
                            echo 'таблица';
                        } else {
                            echo 'блок';
                        } ?></p>
        <p>Тип таблицы: <?php
                        if (!isset($_GET['content'])) {
                            echo 'Таблица';
                        } else {
                            echo 'Колонка';
                        }
                        ?> </p>
        <p>Дата и время: <?php echo date("Y-m-d H:i:s") ?> </p>
    </footer>

</body>


</html>
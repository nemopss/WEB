<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Ответ</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

</head>

<body>
    <?php require "header.php"; ?>
    <div class="container">

        <section class="request_section">
            <form>
                <?php if (isset($_POST["name"])) {
                    echo '<p class="head">Здравствуйте, ' .
                        $_POST["name"] .
                        "</p>";
                    if (isset($_POST["type_request"])) {
                        if ($_POST["type_request"] == 1) {
                            echo "<p>Мы рассмотрим Вашу жалобу:</p>";
                        } else {
                            echo "<p>Спасибо за ваше предложение:</p>";
                        }
                    }
                    if (isset($_POST["text_area"])) {
                        echo "<p>Ваш текст: " . $_POST["text_area"] . "</p>";
                    }
                    if (isset($_POST["file"]) & ($_POST["file"] != "")) {
                        echo "<p>Вы приложили следующий файл: " .
                            $_POST["file"] .
                            "</p>";
                    }
                    echo '<p></p><a class="bton" href="index.php?N=' .
                        urlencode($_POST["name"]) .
                        "&E=" .
                        $_POST["email"] .
                        "&S=" .
                        $_POST["radio"] .
                        '">Заполнить снова</a>';
                } ?>
            </Form>
        </section>
    </div>
    </div>
    <?php require "footer.php"; ?>
</body>

</html>
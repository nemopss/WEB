<!DOCTYPE html>
<html lang="ru">



<head>
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

</head>

<body>
    <?php require "header.php"; ?>
    <div class="container">
        <section class="request_section">
            <form method="POST" action="home.php">
                <p class="head"></p>
                <p><input type="text" placeholder="ФИО" name="name" <?php if (
                    isset($_GET["N"])
                ) {
                    echo "value=" . urldecode($_GET["N"]);
                } ?> required> </p>
                <p><input type="text" placeholder="Email" name="email" <?php if (
                    isset($_GET["E"])
                ) {
                    echo "value=" . $_GET["E"];
                } ?> required></p>
               <p class="head">Откуда Вы узнали о нас?</p>
<p>
    <input type="radio" id="internet" name="radio" value="internet" <?php if (
        isset($_GET["S"]) and
        $_GET["S"] == "internet"
    ) {
        echo "checked";
    } ?>>
    <label for="internet">Реклама в интернете</label>
</p>
<p>
    <input type="radio" id="friend" name="radio" value="friend" <?php if (
        isset($_GET["S"]) and
        $_GET["S"] == "friend"
    ) {
        echo "checked";
    } ?>>
    <label for="friend">Совет друга</label>
</p>
<p>
    <input type="radio" id="more" name="radio" value="more" <?php if (
        isset($_GET["S"]) and
        $_GET["S"] == "more"
    ) {
        echo "checked";
    } ?>>
    <label for="more">Другое</label>
</p>
                    <select name="type_request" class="text_block">
                        <option disabled selected>Выберите тип обращения</option>
                        <option value="1">Жалоба</option>
                        <option value="2">Предложение</option>
                    </select>
                </p>
                <textarea name="text_area" cols="50" rows="10"></textarea>
                <p><input type="file" name="file"></p>
                <p>
                    <input type="checkbox" id="approval" name="" class="approval">
                    <label for="approval">Даю согласие на обработку персональных данных</label>
                </p>                
                <p><input type="submit" name="submit" class="button">
                </p>
            </form>
        </section>
    </div>
    </div>
    <?php require "footer.php"; ?>
</body>

</html>

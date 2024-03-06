<body>
    <?php
    require "header.php";
    ?>
    <div class="container">

        <?php
        define('DB_HOST', 'localhost'); //Адрес
        define('DB_USER', 'x95110as_imgdef'); //Имя пользователя
        define('DB_PASSWORD', 'Ukflbkby2004'); 
        define('DB_NAME', 'x95110as_imgdef'); //Имя БД
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_error) {
            die("Connection failed");
        }
        ?>
        <?php
        include "db.php";
        $result1 = mysqli_query($mysql, "SELECT img_name FROM `games`");
        ?>
        <div class="box">
            <?php
            while ($name1 = mysqli_fetch_assoc($result1)) {
                ?>
                <div>
                    <img class="galleryImg" title="<?php echo $name1['game']; ?>"
                        src="images/<?php echo $name1['img_name']; ?>">
                </div>
                <?php
            }
            ?>
        </div>

    </div>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>
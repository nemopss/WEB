<body>
    <?php
    require "header.php";
    ?>
    <script src="script/main.js"></script>
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
        ?>
        <p>
            <?php
            $result1 = mysqli_query($mysql, "SELECT * FROM `games` WHERE `game` like '{$_GET['GameName']}'");
            while ($name1 = mysqli_fetch_assoc($result1)) {
                ?>

            <div class="fullProduct">
                <div class="picName">
                    <img class="gameFullImage" title="<?php echo $name1['game']; ?>" src="images/<?php echo $name1['img_name']; ?>">
                    <p class="gameNameFull">
                        <?php echo $name1['game'] ?>
                    </p>
                </div>
                <div class="productText">
                    <p class="gameFullDescription">
                        <?php echo $name1['fullDescription'] ?>
                    </p>
                    <div class="anotherInf">
                        <p class="price">
                            <?php echo $name1['price'] ?>₽
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </p>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>
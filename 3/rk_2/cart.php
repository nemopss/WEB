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
            if (empty($_GET)) {
                ?> <p class="nothing"> <?php echo "Тут пока ничего нет"; ?></p>
            <?php
            } else {
                $result1 = mysqli_query($mysql, "SELECT * FROM `games` WHERE `game` LIKE '{$_GET['GameName']}'");
                while ($name1 = mysqli_fetch_assoc($result1)) {
                    ?>

                <div class="product">
                    
                    <img class="gameImage" title="<?php echo $name1['game']; ?>" src="images/<?php echo $name1['img_name']; ?>">
                    <div class="productText">
                        <p class="gameName">
                            <?php echo $name1['game'] ?>
                        </p>
                        <p class="gameDescription">
                            <?php echo $name1['description'] ?>
                        </p>
                        <div class="anotherInf">
                            <p class="price">
                                <?php echo $name1['price'] ?>₽
                            </p>
                            
                            <a class="pay" href="cart.php" >Оплатить</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
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
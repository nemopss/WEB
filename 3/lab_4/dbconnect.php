<title>
    <?php echo "Ответ"; ?>
</title>


<body>
    <link rel="stylesheet" href="styles/form.css">
    <?php
    require 'header.php'; ?>
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
        $result1 = mysqli_query($mysql, "SELECT * FROM `images`");
        $result2 = mysqli_query($mysql, "SELECT * FROM `definitions`")
            ?>
        <div class="box">
            <?php
            while ($name1 = mysqli_fetch_assoc($result1)) {
                ?>
                <div>
                    <img class="image1" title="<?php echo $name1['name']; ?>" src="img/<?php echo $name1['name']; ?>.png" />
                </div>
                <?php
            }
            ?>
        </div>
        <table>
    <tr>
        <th>Термин</th>
        <th>Определение</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result2)) {
    ?>
    <tr>
        <td><?php echo $row['word']; ?></td>
        <td><?php echo $row['description']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>

    </div>
    <?php
    require 'footer.php'; ?>
</body>
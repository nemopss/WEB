<footer class="footer">
    <p class="container">
        Наш адрес: г. Шутерград, ул. Стрелковая, д. 42
        <br>
        &copy; Авторское право данного сайта закрепляется с 11.05.2013
        </br>
        <?php
        date_default_timezone_set('Europe/Moscow');
        $date = date("Y.m.d");
        $time = date("H:i:s");
        echo "Сформировано " . $date . " в " . $time . "";
        ?>
    </p>
</footer>
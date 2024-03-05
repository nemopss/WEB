<footer class="footer">
    <p class="container">
        &copy; Авторское право данного сайта закрепляется за Гладилиным Алексеем Алексеевичем с 10.09.2023
        </br>
        <?php
            date_default_timezone_set('Europe/Moscow');
            $date = date("Y.m.d");
            $time = date("H:i:s");
            echo "Сформировано " . $date . " в " . $time . "";
        ?>
    </p>
</footer>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Гладилин Алексей Алексеевич 221-361 Лаб 9 Вар 8 </title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">


</head>

<body>
    <header>
        <img src="images/polyteh.jpg" class="icon">
        <h1>Гладилин Алексей Алексеевич 221-361 Лаб 9 Вар 8 </h1>
    </header>


    <main>
        <div class="cycle">
            <?php
            $x = -10;    // начальное значение аргумента
            $encounting = 100;    // количество вычисляемых значений
            $step = 1;    // шаг изменения аргумента
            $type = 'C';    // тип верстки (A-E)
            $minF = -100;
            $maxF = 2000;

            $max = PHP_INT_MIN;
            $min = PHP_INT_MAX;
            $sum = 0;

            switch ($type) {
                case 'B':
                    echo '<ul>';
                    break;
                case 'C':
                    echo '<ol>';
                    break;
                case 'D':
                    echo '<table>';
                    echo '<thead><tr>
                            <th>Номер</th>
                            <th>Значение аргумента</th>
                            <th>Значение функций</th>
                          </tr></thead>
                          <tbody>';
                    break;
            }

            for ($i = 0; $i < $encounting; $i++, $x += $step) {
                if ($x <= 10) {
                    $f = round(7 * $x + 18, 3);
                } else if ($x < 20) {
                    if ($x === 16) {
                        $f = "error";
                    } else {
                        $f = round(($x - 17) / (8 - $x * 0.5), 3);
                    }
                } else if ($x >= 20) {
                    $f = round(($x + 4)*($x - 7), 3);
                }
                if (($f < $minF || $f > $maxF) && $f != "error") {
                    break;
                }
                if ($f != "error") {
                    $min = min($min, $f);
                    $max = max($max, $f);
                    $sum += $f;
                }

                switch ($type) { // если тип верстки А
                    case 'A':
                        echo 'f(' . $x . ')=' . $f;    // выводим аргумент и значение функции
                        if ($i < $encounting - 1) // если это не последняя итерация цикла
                            echo '<br>';    // выводим знак перевода строки
                        break;
                    case 'C':
                    case 'B':
                        echo '<li>f(' . $x . ')=' . $f . '</li>';
                        break;
                    case 'D':
                        echo "<tr><td>" . $i . "</td>";
                        echo "<td>" . $x . "</td>";
                        echo "<td>" . $f . "</td></tr>";
                        break;
                    case 'E':
                        echo '<div class="func">f(' . $x . ')=' . $f . '</div>';
                }
            }
            switch ($type) {
                case 'B':
                    echo '</ul>';
                    break;

                case 'C':
                    echo '</ol>';
                    break;

                case 'D':
                    echo '</tbody></table>';
                    break;
            }
            if ($i !== 0) {
                echo '<div class="func">min(f)=' . round($min, 3) . '</div>';
                echo '<div class="func">max(f)=' . round($max, 3) . '</div>';
                echo '<div class="func">sum(f)=' . round($sum, 3) . '</div>';
                echo '<div class="func">avg(f)=' . round($sum / $i, 3) . '</div>';
            }else{
                echo 'Значение находится за пределами области определения функции: ' . $x . '';
            }
            ?>


        </div>
        <div class="cycle">

            <?php
            $x = 11;    // начальное значение аргумента
            $encounting = 100;    // количество вычисляемых значений
            $step = 2;    // шаг изменения аргумента
            $type = 'D';    // тип верстки (A-E)
            $minF = -20.03;
            $maxF = 1000000;

            $max = PHP_INT_MIN;
            $min = PHP_INT_MAX;
            $sum = 0;

            switch ($type) {
                case 'B':
                    echo '<ul>';
                    break;
                case 'C':
                    echo '<ol>';
                    break;
                case 'D':
                    echo '<table>';
                    echo '<thead><tr>
                            <th>Номер</th>
                            <th>Значение аргумента</th>
                            <th>Значение функций</th>
                          </tr></thead>
                          <tbody>';
                    break;
            }
            $i = 0;

            while ($i < $encounting) {
                if ($x <= 10) {
                    $f = round(7 * $x + 18, 3);
                } else if ($x < 20) {
                    if ($x === 16) {
                        $f = "error";
                    } else {
                        $f = round(($x - 17) / (8 - $x * 0.5), 3);
                    }
                } else if ($x >= 20) {
                    $f = round(($x + 4)*($x - 7), 3);
                }
                if (($f < $minF || $f > $maxF) && $f != "error") {
                    break;
                }
                if ($f != "error") {
                    $min = min($min, $f);
                    $max = max($max, $f);
                    $sum += $f;
                }
                switch ($type) { // если тип верстки А
                    case 'A':
                        echo 'f(' . $x . ')=' . $f;    // выводим аргумент и значение функции
                        if ($i < $encounting - 1) // если это не последняя итерация цикла
                            echo '<br>';    // выводим знак перевода строки
                        break;
                    case 'C':
                    case 'B':
                        echo '<li>f(' . $x . ')=' . $f . '</li>';
                        break;
                    case 'D':
                        echo "<tr><td>" . $i . "</td>";
                        echo "<td>" . $x . "</td>";
                        echo "<td>" . $f . "</td></tr>";
                        break;
                    case 'E':
                        echo '<div class="func">f(' . $x . ')=' . $f . '</div>';
                }

                $i++;
                $x += $step;
            }
            switch ($type) {
                case 'B':
                    echo '</ul>';
                    break;

                case 'C':
                    echo '</ol>';
                    break;

                case 'D':
                    echo '</tbody></table>';
                    break;
            }

            if ($i !== 0) {
                echo '<div class="func">min(f)=' . round($min, 3) . '</div>';
                echo '<div class="func">max(f)=' . round($max, 3) . '</div>';
                echo '<div class="func">sum(f)=' . round($sum, 3) . '</div>';
                echo '<div class="func">avg(f)=' . round($sum / $i, 3) . '</div>';
            }else{
                echo 'Значение находится за пределами области определения функции';
            }
            ?>

        </div>
        <div class="cycle">

            <?php
            $x = 10;    // начальное значение аргумента
            $encounting = 100;    // количество вычисляемых значений
            $step = 2;    // шаг изменения аргумента
            $type = 'E';    // тип верстки (A-E)
            $minF = -10;
            $maxF = 1000000;

            $max = PHP_INT_MIN;
            $min = PHP_INT_MAX;
            $sum = 0;

            switch ($type) {
                case 'B':
                    echo '<ul>';
                    break;
                case 'C':
                    echo '<ol>';
                    break;
                case 'D':
                    echo '<table>';
                    echo '<thead><tr>
                            <th>Номер</th>
                            <th>Значение аргумента</th>
                            <th>Значение функций</th>
                          </tr></thead>
                          <tbody>';
                    break;
            }
            $i = 0;
            do {
                if ($x <= 10) {
                    $f = round(7 * $x + 18, 3);
                } else if ($x < 20) {
                    if ($x === 16) {
                        $f = "error";
                    } else {
                        $f = round(($x - 17) / (8 - $x * 0.5), 3);
                    }
                } else if ($x >= 20) {
                    $f = round(($x + 4)*($x - 7), 3);
                }
                if (($f < $minF || $f > $maxF) && $f != "error") {
                    break;
                }
                if ($f != "error") {
                    $min = min($min, $f);
                    $max = max($max, $f);
                    $sum += $f;
                }
                switch ($type) { // если тип верстки А
                    case 'A':
                        echo 'f(' . $x . ')=' . $f;    // выводим аргумент и значение функции
                        if ($i < $encounting - 1) // если это не последняя итерация цикла
                            echo '<br>';    // выводим знак перевода строки
                        break;
                    case 'C':
                    case 'B':
                        echo '<li>f(' . $x . ')=' . $f . '</li>';
                        break;
                    case 'D':
                        echo "<tr><td>" . $i . "</td>";
                        echo "<td>" . $x . "</td>";
                        echo "<td>" . $f . "</td></tr>";
                        break;
                    case 'E':
                        echo '<div class="func">f(' . $x . ')=' . $f . '</div>';
                }

                $i++;
                $x += $step;
            } while ($i < $encounting);
            switch ($type) {
                case 'B':
                    echo '</ul>';
                    break;

                case 'C':
                    echo '</ol>';
                    break;

                case 'D':
                    echo '</tbody></table>';
                    break;
            }

            if ($i !== 0) {
                echo '<div class="func">min(f)=' . round($min, 3) . '</div>';
                echo '<div class="func">max(f)=' . round($max, 3) . '</div>';
                echo '<div class="func">sum(f)=' . round($sum, 3) . '</div>';
                echo '<div class="func">avg(f)=' . round($sum / $i, 3) . '</div>';
            }else{
                echo 'Значение находится за пределами области определения функции';
            }
            ?>

        </div>


    </main>


    <footer class="footer">
        <p class="container">
            &copy; Авторское право данного сайта закрепляется за Гладилиным Алексеем Алексеевичем с 01.01.1970
        </p>
    </footer>

</body>


</html>
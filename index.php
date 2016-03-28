<DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link href="http://allfont.ru/allfont.css?fonts=pt-sans" rel="stylesheet" type="text/css"/>

        <style>
            select {
                width: 135px;
            }
        </style>

        <title>Калькулятор</title>

    </head>
    <body style="background-color: aliceblue">
    <header>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: slategrey; font-weight: bold; font-size: 20pt; margin: 15px;">
                    Калькулятор зарплат</h1>
            </div>
        </div>
    </header>
    <article>
        <div class="container" style="background-color: white">
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
                <div class="col-xs-6 col-md-6">
                    <table class="table table-hover text-left" style="font-size: 10pt;">
                        <tr>
                            <th class="text-center"
                                style="background-color: red; border: 0; font-size: 15pt; color: white;">Финансовый
                                отдел
                            </th>
                        </tr>
                        <tr>
                            <td style="border: 0;">
                                <div class="col-md-5">
                                    <p style="margin: 30px 0">Сотрудник</p>
                                    <p style="margin: 30px 0">Увеличение оклада</p>
                                    <p style="margin: 30px 0">Период</p>
                                </div>
                                <div class="col-md-5">
                                    <?php
                                    require_once __DIR__ . '/calc.php';

                                    if (isset ($_GET ['x'])) {
                                        $x = $_GET ['x'];
                                    } else {
                                        $x = 0;
                                    }

                                    if (isset ($_GET ['y'])) {
                                        $y = $_GET ['y'];
                                    } else {
                                        $y = 0;
                                    }

                                    $increase = $_GET ['increase'];

                                    $res = calc($x, $y, $increase);
                                    ?>

                                    <form action="/index.php" method="get" class="text-center" style="font-size: 10pt;">
                                        <p style="margin: 25px 0"><input type="text" name="x" value="<?php echo $x; ?>"
                                                                         placeholder="Поиск имени" size="15"/></p>
                                        <p style="margin: 25px 0">
                                            <select name="increase">
                                                <option value="0">1</option>
                                                <option value="1">1.1</option>
                                                <option value="2">1.2</option>
                                                <option value="3">1.3</option>
                                                <option value="4">1.4</option>
                                                <option selected value="5">1.5</option>
                                                <option value="6">1.6</option>
                                                <option value="7">1.7</option>
                                                <option value="8">1.8</option>
                                                <option value="9">1.9</option>
                                            </select>
                                        </p>
                                        <p style="margin: 25px 0"><input type="text" name="y" value="<?php echo $y; ?>"
                                                                         placeholder="Введите данные" size="15"/></p>
                                        <p style="font-weight: bold; font-size: 15pt;"><?php echo $res . ' рублей'; ?></p>
                                        <p style="margin: 30px 0 0"><input class="btn btn-default" type="submit"
                                                                           value="Показать результат"/></p>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    <p style="margin: 30px 0">(оклад)</p>
                                    <p style="margin: 30px 0">k</p>
                                    <p style="margin: 30px 0">мес</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-md-6">
                    <table class="table table-hover text-left" style="font-size: 10pt;">
                        <tr>
                            <th class="text-center"
                                style="background-color: blue; border: 0; font-size: 15pt; color: white;">Юридический
                                отдел
                            </th>
                        </tr>
                        <tr>
                            <td style="border: 0;">
                                <div class="col-md-5">
                                    <p style="margin: 30px 0">Сотрудник</p>
                                    <p style="margin: 30px 0">Увеличение оклада</p>
                                    <p style="margin: 30px 0">Период</p>
                                </div>
                                <div class="col-md-5">
                                    <?php
                                    require_once __DIR__ . '/calc.php';

                                    if (isset ($_GET ['a'])) {
                                        $a = $_GET ['a'];
                                    } else {
                                        $a = 0;
                                    }

                                    if (isset ($_GET ['b'])) {
                                        $b = $_GET ['b'];
                                    } else {
                                        $b = 0;
                                    }

                                    $raise = $_GET ['raise'];

                                    $result = calc2($a, $b, $raise);
                                    ?>

                                    <form action="/index.php" method="get" class="text-center" style="font-size: 10pt;">
                                        <p style="margin: 25px 0"><input type="text" name="a" value="<?php echo $a; ?>"
                                                                         placeholder="Поиск имени" size="15"/></p>
                                        <p style="margin: 25px 0">
                                            <select name="raise">
                                                <option value="0">1</option>
                                                <option value="1">1.1</option>
                                                <option value="2">1.2</option>
                                                <option value="3">1.3</option>
                                                <option value="4">1.4</option>
                                                <option value="5">1.5</option>
                                                <option value="6">1.6</option>
                                                <option value="7">1.7</option>
                                                <option value="8">1.8</option>
                                                <option value="9">1.9</option>
                                            </select>
                                        </p>
                                        <p style="margin: 25px 0"><input type="text" name="b" value="<?php echo $b; ?>"
                                                                         placeholder="Введите данные" size="15"/></p>
                                        <p style="font-weight: bold; font-size: 15pt;"><?php echo $result . ' рублей'; ?></p>
                                        <p style="margin: 30px 0 0"><input class="btn btn-default" type="submit"
                                                                           value="Показать результат"/></p>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    <p style="margin: 30px 0">(оклад)</p>
                                    <p style="margin: 30px 0">k</p>
                                    <p style="margin: 30px 0">мес</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <p>
                <hr>
                </p>
                <?php
                require_once __DIR__ . '/calc.php';

                if (isset ($_GET ['res'])) {
                    $res = $_GET ['res'];
                } else {
                    $res = 0;
                }

                if (isset ($_GET ['result'])) {
                    $result = $_GET ['result'];
                } else {
                    $result = 0;
                }


                $result = calc3($res, $result);
                ?>
                <form action="/index.php" method="get" class="text-center" style="font-size: 10pt;">
                    <p style="margin: 30px 0 0"><input class="btn btn-info btn-lg" style="margin: 10px;" type="submit"
                                                       value="Посчитать сумму двух результатов"/></p>
                </form>
            </div>
        </div>
    </article>
    <footer>
    </footer>
    </body>
    </html>
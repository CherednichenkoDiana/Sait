<?php
    $com=$_REQUEST['cm'];
    $name=$_REQUEST['nm'];

    $db=mysqli_connect("127.0.0.1", "root","", "sait");
    mysqli_set_charset($db, "utf8");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>О нас</title>
    <link rel="stylesheet" href="style.css">
    <style>
        p.mes{
            text-align: center;
            padding-left: 33%;
            width: 700px;
            font-size: 24px;
            font-weight: 100;
            color: #242424;
            line-height: 36px;
        }
    </style>
</head>
<body>
<menu>
    <table>
        <tr>
            <td>
                <a href="index.php">Главная</a>
            </td>
            <td>
                <a href="portfolio.php">Порфолио</a>
            </td>
            <td>
                <a href="about_as.php">О нас</a>
            </td>
            <td>
                <a href="contact.php">Заявка</a>
            </td>
        </tr>
    </table>
</menu>
</body>
</html>

<?php
        if ($name != '' && $com != '' ) {
            $pr = mysqli_query($db, "INSERT INTO com(name,com) VALUES ('$name','$com')");
            if ($pr == true) {
                echo "<p class='mes'>Ваш комментарий успешно добавлен </p> ";
            }
            else{
                echo "<p class='mes'>Ошибка. Комментарий не был добавлен</p> <br> ";
            }
        }
        else {
            echo "<p class='mes'>Ошибка ввода данных</p> <br> ";
        }
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>О нас</title>
    <link rel="stylesheet" href="style.css">
    <style>
        comment{
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-wrap: wrap;
        }
        h3{
            padding-left: 25%;
            font-size: 40px;
            font-weight: 200;
            color: #2e353d;
            align-items: flex-end;
        }
        comment input.text{
            margin-left: 25%;
            text-align: center;
            margin-bottom: 1%;
        }
        textarea{
            margin-left: 25%;
            padding-left: 650px;
            padding-bottom: 50px;
            margin-bottom: 1%;
        }
        comment p{
            padding-left: 5%;
        }
        comment div{
            margin-top: 1%;
            margin-left: 25%;
            width: 900px;
            border-radius: 5px;
            border: 1px solid rgba(54,47,35,0.16);
            background-color: rgba(252,252,252,0.66);
        }
        comment input.but{
            margin-left: 25%;
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
<main>
    <img src="Image/дом.jpeg">
    <div class="col" style="width: 20%; height: 320px; border-radius: 5px; background-color: rgba(223, 227, 213, 0.43);">
    <ul>
        <li><p>Телефон: +0(000)-00-00</p></li>
        <li><p>Почта: a@ga.com</p></li>
    </ul>
    </div>
</main>
<comment>
    <form action="com.php" method="post">
    <h3>Комментарии</h3>
    <input type="text" class="text" name="nm" value="Имя">
    <textarea value="" name="cm"></textarea>
    <input type="submit" class="but" value="Отправить">
    </form>
<?php
    $db=mysqli_connect("127.0.0.1", "root","", "sait");
    mysqli_set_charset($db, "utf8");
    $rez = mysqli_query($db, "SELECT * FROM com");

    while ($mas = mysqli_fetch_array($rez)) {
        printf("<div><p><b>%s</b> </p> <p>  %s</p></div>",$mas['name'],$mas['com']);
    }

?>
</comment>
</body>
</html>
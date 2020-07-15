
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Озеленение</title>
    <link rel="stylesheet" href="style.css">
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
    <table>
        <tr>
            <td>
                <img src="Image/2/1.jpg">
            </td>
            <td style="border-radius: 5px; opacity: 0.8; background: rgba(252,252,252,0.89)">
                <?php
                $db=mysqli_connect("127.0.0.1", "root","", "sait");
                mysqli_set_charset($db, "utf8");

                $rez = mysqli_query($db, "SELECT * FROM proekt WHERE id=2");
                echo "<ul>";
                $mas = mysqli_fetch_array($rez);
                foreach ($mas as $key => $value){
                    if(is_int($key)==false && $key!='id') {
                        echo "<p><b>$key :</b> $value </p>";
                    }
                }
                echo "</ul>";
                ?>
            </td>
        </tr>
        <tr align="center">
            <td>
                <img src="Image/2/2.jpg">
            </td>
            <td>
                <img src="Image/2/3.jpg">
            </td>
        </tr>
    </table>
</main>
</body>
</html>
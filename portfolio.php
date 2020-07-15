<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Портфолио</title>
    <link rel="stylesheet" href="style.css">
    <script src="jq.js"></script>
    <script>
        $(document).ready(function(){
                var b=false;
                $('img[class="f"]').hover(
                    function(){
                        if (b==false) {
                            $("div").html('<p class="l">Ландшафт с нуля</p><p class="n">нажми на картинку</p>');
                        }
                        else {
                            $("div").html('');
                        }
                        b=!b;
                    }
                )
                $('img[class="s"]').hover(
                    function(){
                        if (b==false) {
                            $("div").html('<p>Озеленение</p><p class="n">нажми на картинку</p>');
                        }
                        else {
                            $("div").html('');
                        }
                        b=!b;
                    }
                )
                $('img[class="f"]').click(
                    function () {
                        var url = "../1.php";
                        $(location).attr('href',url);
                    }
                )
                $('img[class="s"]').click(
                    function () {
                        var url = "../2.php";
                        $(location).attr('href',url);
                    }
                )
            }
        )

    </script>
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
<main class="img">
    <img class="f" src="Image/1/1.jpg">
    <div style="border-radius: 5px; background-color: rgba(252,252,252,0.66);"></div>
    <img class="s" src="Image/2/1.jpg">
</main>

</body>
</html>
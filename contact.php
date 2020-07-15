<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оставить заявку</title>
    <link rel="stylesheet" href="style.css">

    <script src="jq.js"></script>
    <script>
        $(document).ready(function(){
                var q=true;
                var b=true;
                var c=true;
                $('input[id="nm"]').blur(
                    function(){
                        var nm=document.getElementById("nm");
                        var str=nm.value;

                        var text=String(str);
                        var mask=new RegExp("^[A-Za-zА-яа-я]{2,}$");

                        var pr=mask.test(text);
                        var n = document.getElementById("nm");
                        if (pr===true){
                            n.style.borderColor = "green";
                            b=true;
                        }
                        else {
                            n.style.borderColor = "red";
                            b=false;
                        }
                    }
                );
                $('input[id="ph"]').blur(
                    function () {
                        var p=document.getElementById("ph");
                        var str=p.value;

                        var text=String(str)
                        var mask=new RegExp("^[+][0-9]{11}$");

                        var pr=mask.test(text);
                        var n = document.getElementById("ph");
                        if (pr===true){
                            n.style.borderColor = "green";
                            q=true;
                        }
                        else {
                            n.style.borderColor = "red";
                            q=false;
                        }
                    }
                );

                $('input[id="ma"]').blur(
                    function m() {
                        var m=document.getElementById("ma");
                        var str=m.value;

                        var text=String(str)
                        var mask=new RegExp("^[^\ ]{1,}[@]([a-z]{1,})[.]([a-z]{2,})$");

                        var pr=mask.test(text);
                        var n = document.getElementById("ma");
                        if (pr===true){
                            n.style.borderColor = "green";
                            c=true;
                        }
                        else {
                            n.style.borderColor = "red";
                            c=false;
                        }
                    }
                );

                $('input[class="but"]').click(
                    function () {
                        var l=true;
                        var nm=document.getElementById("nm");
                        var str=nm.value;
                        if (str===''){
                            l=false;
                        }
                        var p=document.getElementById("ph");
                        str=p.value;
                        if (str===''){
                            l=false;
                        }
                        var m=document.getElementById("ma");
                        str=m.value;
                        if (str===''){
                            l=false;
                        }
                        if(q===false || c===false || b===false){
                            l=false;
                        }
                        if(l==true){
                            alert("Ваша заявка была отправленна");
                        }
                        else {
                            alert("Ваша заявка не была отправленна. Проверьте корректность введённых данных");
                        }
                        return l;
                    }
                );

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
<main>
    <form action="contact.php" method="get" name="frm">
        <table>
            <tr>
                <td>
                    <p class="con">Как к Вам обращаться: </p>
                </td>
                <td>
                    <input type="text" class="text" value="" name="nm" id="nm" onfocusout="n();">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="con">Контактный телефон:</p>
                </td>
                <td>
                    <input type="text" class="text" value="" name="ph" id="ph" onfocusout="p();">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="con">Почта:</p>
                </td>
                <td>
                    <input type="text" class="text" value="" name="ma" id="ma" onfocusout="m();">
                </td>
            </tr>
            <tr>
                <td>
                    <p class="con">
                        Комментарий:
                    </p>
                </td>
                <td>
                    <textarea value="" name="cm" id="cm"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" class="but" value="Оставить заявку">
    </form>
</main>
</body>
</html>
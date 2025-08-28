<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potwierdzenie</title>

    <style>
        .div-popup {
            text-align: center;
            width: 80%;
            margin: 100px auto 0 auto;
            padding: 10px 0;
            background-color: #00b7fa;
        }

        a {
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            font-family: "Trebuchet MS", sans-serif;
            border:solid 1px #fff;
            padding-left:5px;
            padding: 8px 5px;
        }
        
    </style>
</head>

<body>

    <div class="div-popup">
        <?php
            $mail = $_POST["mail"];
            $tekst = $_POST["tekst"];

            echo '<p style="font-size: 24px; color: #fff;">🙂Dziękujemy, potwierdzamy rezerwację!.</p>';
            mail("Bogdan20ce@gmail.com","E-mail ze strony", $tekst, "From: $mail");
        ?>
        <p><a href="https://nowaknajpa.wpklikacz.pl/reserve.html">ZAMKNIJ OKNO</a></p>

    </div>

    <script type="text/javascript">
        <!-- <![CDATA[
            setTimeout("window.close()",3000);
        ]]> -->
    </script>

</body>
</html>
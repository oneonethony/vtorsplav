<?php
$current_page = "contacts";

$bg_img = "../media/contacts_bg.jpg";

include '../header.php';

?>
<div id="text-resize" class="container py-5">
    <h1 class="text-center">Связаться с нами</h1>
    <br>
    <div class="row contacts">
        <div id="cont-img" class="col-lg-5 p-0 contacts-img">
            <img id="contact_img" src="../media/contacts_1.jpg" alt="" width="100%">
        </div>
        <div id="cont-text" class="col-lg-7 p-0 contacts-text">
            <div>
                <p class="btext">Адрес:</p>
                <p>Юридический адрес: Россия, 432023, г. Ульяновск, ул. Профсоюзная, д. 68, Офис 1</p>
                <p>Фактический адрес: Россия, 432023, г. Ульяновск, ул. Профсоюзная, д. 68, Офис 1</p>
                <p>E-mail: <a href="mailto:sekretar@vtorsplav.ru"><i class="fas fa-envelope"></i> sekretar@vtorsplav.ru</a></p>
                <br>
                <p class="btext">Телефон:</p>
                <p><a href="tel:+78422361092"><i class="fas fa-phone-alt"></i> +7 (8422) 36-10-92</a></p>
                <br>
                <p class="btext">Отдел сбыта:</p>
                <p>Телефоны: <a href="tel:+79510979816"><i class="fas fa-mobile-alt"></i> +7 (951) 097-98-16</a>, <a href="tel:+78422361115"><i class="fas fa-phone-alt"></i> +7 (8422) 36-11-15</a> </p>
                <p>E-mail: <a href="mailto:sbut@vtorsplav.ru"><i class="fas fa-envelope"></i> sbut@vtorsplav.ru</a></p>
                <br>
                <p class="btext">Отдел снабжения:</p>
                <p>Телефоны: <a href="tel:+79876303750"><i class="fas fa-mobile-alt"></i> +7 (987) 630-37-50</a>, <a href="tel:+78422360245"><i class="fas fa-phone-alt"></i> +7 (8422) 36-02-45</a> <br> <a href="tel:+78422360753"><i class="fas fa-phone-alt"></i> +7 (8422)
                        36-07-53</a></p>
                <p>E-mail: <a href="mailto:sale@vtorsplav.ru"><i class="fas fa-envelope"></i> sale@vtorsplav.ru</a></p>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 p-0">
            <a class="dg-widget-link" href="http://2gis.ru/ulyanovsk/firm/70000001020226642/center/48.29875230789185,54.23622734715663/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
                на карте Ульяновска</a>
            <div class="dg-widget-link"><a href="http://2gis.ru/ulyanovsk/center/48.298742,54.236097/zoom/16/routeTab/rsType/bus/to/48.298742,54.236097??????????, ???????????????? ?????????utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                    проезд до Вторсплав, производственная компания</a></div>
            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">
                new DGWidgetLoader({
                    "width": "100%",
                    "height": "100%",
                    "borderColor": "#a3a3a3",
                    "pos": {
                        "lat": 54.23622734715663,
                        "lon": 48.29875230789185,
                        "zoom": 16
                    },
                    "opt": {
                        "city": "ulyanovsk"
                    },
                    "org": [{
                        "id": "70000001020226642"
                    }]
                });
            </script>
            <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript.
                Включите его в
                настройках вашего браузера.</noscript>
        </div>
        <div class="col-12 col-lg-6 px-5 py-4" style="background: rgba(0, 0, 0, .125); border-top: 1px solid rgba(0, 0, 0, .25)">
            <h4>ЗАДАТЬ ВОПРОС</h4>
            <br>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="person">Ваше имя: </label>
                    <input type="text" class="form-control" id="person" name="person" required>
                </div>
                <div class="form-group">
                    <label for="email">Ваш e-mail адрес:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Ваш вопрос: </label>
                    <textarea class="form-control" id="message" name="message" rows="10" required></textarea>
                </div>
                <?php
                if (isset($_POST['person'])) {
                    $person = $_POST['person'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                    $fio = htmlspecialchars($person);
                    $email = htmlspecialchars($email);
                    $message = htmlspecialchars($message);
                    $fio = urldecode($person);
                    $email = urldecode($email);
                    $message = urldecode($message);
                    $fio = trim($person);
                    $email = trim($email);
                    $message  = trim($message);
                    if (mail("re.vtorsplav@mail.ru", "Заявка с сайта www.vtorsplav.ru", "Имя отправителя: " . $person . "\r\nE-mail отправителя: " . $email . "\r\nСообщение:\r\n " . $message, "From: vtorsplav.ru \r\n")) {
                        echo "<p style='color:green'>Сообщение успешно отправлено!</p>";
                    } else {
                        echo "<p style='color:red'>При отправке сообщения возникли ошибки</p>";
                    }
                }
                ?>
                <button type="submit" class="btn btn-primary">Отправить</button>

            </form>

        </div>
    </div>
</div>

<?php

include '../footer.php'

?>
<script>
    $(window).on('load resize', function() {
        if ($(window).width() > '1182') {
            $('#text-resize').css('font-size', '16pt')

        } else {
            $('#text-resize').css('font-size', '13pt')

        }

        if ($(window).width() > '974') {
            $('img').attr('src', '../media/contacts_1.jpg')

            $('#cont-text').removeClass('contacts-img')
            $('#cont-img').addClass('contacts-img')
        } else {
            $('img').attr('src', '')
            $('#cont-text').addClass('contacts-img')
            $('#cont-img').removeClass('contacts-img')
        }
    })
</script>
</body>

</html>
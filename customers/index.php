<?php
$current_page = "customers";

$bg_img = "../media/customers_bg.jpg";

include '../header.php';
?>

<div id="text-resize" class="container py-5">
    <h1 class="text-center">Информация для покупателей</h1>
    <br>
    <div class="about-content p-4">
        <p style="text-indent: 20px;">Основной продукцией АО «Вторсплав» являются алюминиевые сплавы собственного производства, согласно
            ГОСТ1583-93 и его зарубежных аналогов. Также мы производим алюминиевые сплавы:
        </p>
        <ul>
            <li>ГОСТ30620-97 (Алюминиевые сплавы для производства поршней)</li>
            <li>ГОСТ4784-97 (Алюминиевые деформируемые сплавы)</li>
            <li>ГОСТ295-98 (Алюминий для раскисления и алюмотермии)</li>
            <li>ГОСТ14113-78 (Алюминиевые антифрикционные сплавы)</li>
        </ul>
        <p>и, конечно, специальные алюминиевые сплавы по техническим условиям ЗАКАЗЧИКА.</p>
    </div>
    <div class="p-4" style="border: 1px solid rgba(0,0,0,.125);">
        <p style="text-indent: 20px;">Производство лигатур на алюминиевой основе и на основе других цветных металлов позволяет производить широкий
            ассортимент различных легированных алюминиевых сплавов в том числе с элементами микролегирования.
        </p>

        <p style="text-indent: 20px;">АО «Вторсплав» располагает различным оборудованием и гибким производственным процессом, позволяющим
            производить цинк и цинковые сплавы, сплавы на медной основе, а также сплавы на основе свинца.
        </p>

        <p style="text-indent: 20px;">Нашим ПОКУПАТЕЛЯМ мы гарантируем индивидуальный подход, четкое и полное выполнение договоренных обязательств,
            разумную ценовую политику и высокое качество поставляемой продукции на уровне лучших мировых стандартов.
        </p>
    </div>
    <div class="p-4" style="border-left: 1px solid rgba(0,0,0,.125); border-right:  1px solid rgba(0,0,0,.125); border-bottom: 1px solid rgba(0,0,0,.125); background-color:rgba(0,0,0,.05); ">
        <p class="text-center" style="font-size: 22pt;">НАШИ ПРЕИМУЩЕСТВА:</p>
        <ul>
            <li>Мы готовы взяться за заказ <span style="font-weight: bold;">абсолютно любой</span> сложности и объёма;
            </li>
            <li>Изготавливаем сплавы по предварительному заказу в <span style="font-weight: bold;">короткие
                    сроки</span>;
            </li>
            <li>Осуществляем <span style="font-weight: bold;">доставку</span> до заказчика;</li>
            <li>Сотрудничаем с компаниями <span style="font-weight: bold;">по всему миру</span>;</li>

            <li>Наша компания соответствует <span style="font-weight: bold;">международным стандартам качества</span>
                ISO 9001:2015;</li>
            <li>Четверть века на рынке (работаем с <span style="font-weight: bold;">1994 года</span>);</li>
        </ul>
    </div>
    <br>
    <div class="contacts-panel">
        <p>По вопросам приобретения сплавов обращайтесь в отдел сбыта:</p>
        <p>Телефоны: <a href="tel:+79510979816"><i class="fas fa-mobile-alt"></i> +7 (951)
                097-98-16</a>, <a href="tel:+78422361115"><i class="fas fa-phone-alt"></i> +7 (8422) 36-11-15</a></p>
        <p>E-mail: <a href="mailto:sbut@vtorsplav.ru"><i class="fas fa-envelope"></i> sbut@vtorsplav.ru</a></p>
    </div>
</div>

<?php

include '../footer.php'

?>
<script>
    $(window).on('load resize', function() {
        if ($(window).width() > '1182') {
            $('#text-resize').css('font-size', '18pt')
        } else {
            $('#text-resize').css('font-size', '14pt')
        }
    })
</script>

</body>

</html>
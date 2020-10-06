<?php
$current_page = "about";

$bg_img = "../media/about_bg.jpg";

include '../header.php';
?>

<div class="container py-5">
    <h1 class="text-center mb-5">АО "Вторсплав"</h1>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="../media/about.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <p class="card-text text-right" style="font-size: 18pt;"><b>История компании начинается в 1994г.</b>, когда было основано предприятие «Вторсплав», занимающееся сбором,
                        сортировкой, реализацией лома и отходов цветных металлов.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text" style="font-size: 18pt;"><b>В 1998г. было принято решение об организации литейного участка по переработке алюминиевого сырья</b>, а в 2000
                        году был запущен первый плавильный комплекс на базе итальянской двухкамерной отражательной печи.</p>
                    <p class="card-text" style="font-size: 18pt;">В настоящее время АО «Вторсплав» г.Ульяновск – многопрофильное металлургическое предприятие, имеющее в своем
                        оснащении различные типы современного плавильного оборудования , высокотехнологичные сортировочные и
                        подготовительные линии, а так же современное аналитическое оборудование, которое позволяет контролировать
                        химический состав , проводить металлографические исследования и контролировать физические свойства продукта.</p>
                </div>

            </div>
            <div class="col-md-4">
                <img src="../media/about2.jpg" class="card-img" alt="...">
            </div>
        </div>
    </div>
    <div class="p-4 about-content">
        <p style="font-size: 18pt;">На сегодняшний день деятельность предприятия развивается в следующих основных направлениях:</p>

        <ul style="font-size: 18pt;">
            <li>Производство и реализация алюминиевых сплавов</li>
            <li>Производство и реализация лигатур на алюминиевой основе и на основе других цветных металлов</li>
            <li>Производство и реализация различных сплавов на основе цветных металлов</li>
            <li>Заготовка, переработка, реализация ломов и отходов цветных и черных металлов</li>
        </ul>

        <br>
        <p style="font-size: 18pt;">Производственные мощности АО «Вторсплав» составляют 15 тыс. тонн в год.</p>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../media/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../media/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../media/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="fas fa-arrow-circle-left fa-2x"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fas fa-arrow-circle-right fa-2x"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <p style="font-size: 18pt;">На предприятии производятся алюминиевые сплавы высокого качества и любой сложности Потребителям как на
        внутренний рынок, так и на экспорт.</p>
    <p style="font-size: 18pt;">АО Вторсплав располагает высококвалифицированными специалистами, которые обладают
        большими опытом и знаниями в технологическом процессе производства продукции. Управление компанией
        осуществляется командой, которая была сформирована еще при создании предприятия и практически не изменилась
        до настоящего времени. Решения принимаются исключительно самостоятельно и в короткие сроки. За это время
        накоплен огромный опыт и предприятие заработало репутацию, как одного из самых стабильных и универсальных в своей отрасли по
        РФ.</p>
    <div style="clear: left;"></div>
</div>

<?php

include '../footer.php'

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
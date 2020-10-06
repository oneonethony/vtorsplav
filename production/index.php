<?php
$current_page = "production";

$bg_img = "../media/production_bg.jpg";

include '../header.php';
?>

<div class="container py-5">
    <h1 class="text-center mb-5">Мы производим</h1>
    <br>
    <div class="row">
        <div class="col-4">
            <div class="accordion product_menu" id="accordionExample">
                <div class="card">
                    <div class="card-header bg-dark" id="heading1">
                        <h5 class="mb-0">
                            <button id="btn1" class="btn text-white list-header collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Алюминий и алюминиевые сплавы
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse " aria-labelledby="heading1" data-parent="#accordionExample">
                        <div class="card-body p-0">


                            <div class="prodmenu-link active-link" id="link1_1" style="padding-top: 20px;">
                                1. Алюминиевые литейные сплавы ГОСТ 1583-93
                            </div class="prodmenu-link">
                            <div class="prodmenu-link" id="link1_2">
                                2. Алюминиевые сплавы для производства поршней ГОСТ 30620-97
                            </div class="prodmenu-link">
                            <div class="prodmenu-link" id="link1_3">
                                3. Алюминиевые деформируемые сплавы ГОСТ 4784-97
                            </div class="prodmenu-link">
                            <div class="prodmenu-link" id="link1_4">
                                4. Алюминий для раскисления и алюмотермии ГОСТ 295-98
                            </div class="prodmenu-link">
                            <div class="prodmenu-link" id="link1_5">
                                5. Алюминиевые антифрикционные сплавы ГОСТ 14113-78
                            </div class="prodmenu-link">
                            <div class="prodmenu-link" id="link1_6" style="padding-bottom: 20px;">
                                6. Другие алюминиевые сплавы
                            </div class="prodmenu-link">

                        </div>


                    </div>
                </div>
                <div class="card ">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button id="btn2" class="btn list-header collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Лигатуры
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body p-0">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                            <button id="btn3" class="btn list-header collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Цинк и цинковые сплавы
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body p-0">

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading4">
                        <h5 class="mb-0">
                            <button id="btn4" class="btn list-header collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Сплавы на медной основе
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body p-0">

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading5">
                        <h5 class="mb-0">
                            <button id="btn5" class="btn list-header collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Свинцовые сплавы и баббиты
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body p-0">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h3 id="header1_1">Алюминиевые литейные сплавы ГОСТ 1583-93</h3>
            <h3 id="header1_2" class="hidden">Алюминиевые сплавы для производства поршней ГОСТ 30620-97</h3>
            <h3 id="header1_3" class="hidden">Алюминиевые деформируемые сплавы ГОСТ 4784-97</h3>
            <h3 id="header1_4" class="hidden">Алюминий для раскисления и алюмотермии ГОСТ 295-98</h3>
            <h3 id="header1_5" class="hidden">Алюминиевые антифрикционные сплавы ГОСТ 14113-78</h3>
            <h3 id="header1_6" class="hidden">Другие алюминиевые сплавы</h3>
            <h3 id="header2_1" class="hidden">Лигатуры</h3>
            <h3 id="header3_1" class="hidden">Цинк и цинковые сплавы</h3>
            <h3 id="header4_1" class="hidden">Сплавы на медной основе</h3>
            <h3 id="header5_1" class="hidden">Свинцовые сплавы и баббиты</h3>
            <hr style="border: 1px solid black;">
            <table id="tb1_1" class="table table-bordered">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col" style="text-align: center;">Группа сплава</th>
                        <th scope="col" style="text-align: center;">Марки</th>
                        <th scope="col" style="text-align: center;">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Al-Si</td>
                        <td>АК12оч, АК12пч, АК12ч, АК13, АК12, АК12п, АК12ж</td>
                        <td rowspan="7" style="text-align: center; vertical-align: middle;">Чушка вес 6-8 кг <br>
                            Чушка вес 10-12 кг </td>
                    </tr>
                    <tr>
                        <td>Al-Si-Mg</td>
                        <td>АК9пч, АК9ч, АК9с, АК9п, АК9, АК8л, АК7пч, АК7ч, АК7п, АК7, АК10Су</td>

                    </tr>
                    <tr>
                        <td>Al-Si-Cu</td>
                        <td>АК5Мч, АК5М, АК5М2, АК5М2п, АК5М7, АК6М2, АК8М, АК5М4, АК8М3ч, АК8М3, АК9М2, АК12М2</td>

                    </tr>
                    <tr>
                        <td>Al-Si-Cu-Mg-Ni</td>
                        <td>АК12ММгН, АК12М2МгН, АК21М2.5Н2.5</td>

                    </tr>
                    <tr>
                        <td>Al-Cu</td>
                        <td>АМ5 (АЛ19), АМ4.5Кд (ВАЛ10)</td>

                    </tr>
                    <tr>
                        <td>Al-Mg</td>
                        <td>АМг5К, АМг5Мц, АМг6л, АМг10, АМг10ч, АМг11</td>

                    </tr>
                    <tr>
                        <td>Al-Si-Zn</td>
                        <td>АК7Ц9 (АЛ11), АК9Ц6</td>

                    </tr>
                </tbody>
            </table>

            <table id="tb1_2" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Марка сплава</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>КС740</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>КС741</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>АК18</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ЖЛС</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>АК10М2Н</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <table id="tb1_3" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Марка сплава</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>АМг5</td>
                        <td rowspan="9" style="text-align: center; vertical-align: middle;">Чушка вес 6-8 кг <br> Чушка вес 10-12 кг
                        </td>
                    </tr>
                    <tr>
                        <td>АМг2</td>

                    </tr>
                    <tr>
                        <td>АД31</td>

                    </tr>
                    <tr>
                        <td>АД33</td>

                    </tr>
                    <tr>
                        <td>АД35</td>

                    </tr>
                    <tr>
                        <td>8011</td>

                    </tr>
                    <tr>
                        <td>1105</td>

                    </tr>
                    <tr>
                        <td>3104</td>

                    </tr>
                    <tr>
                        <td>Д16 (EN2024)</td>

                    </tr>
                </tbody>
            </table>

            <table id="tb1_4" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Марка сплава</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>АВ97</td>
                        <td rowspan="3" style="text-align: center; vertical-align: middle;">Чушка вес 6-8 кг <br> Чушка вес 10-12 кг
                        </td>
                    </tr>
                    <tr>
                        <td>АВ91</td>

                    </tr>
                    <tr>
                        <td>АВ87</td>

                    </tr>
                </tbody>
            </table>

            <table id="tb1_5" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Марка сплава</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>АО9-2</td>
                        <td rowspan="6" style="text-align: center; vertical-align: middle;">Чушка вес 6-8 кг <br> Чушка вес 10-12 кг
                        </td>
                    </tr>
                    <tr>
                        <td>АО3-7</td>

                    </tr>
                    <tr>
                        <td>АО9-1</td>

                    </tr>
                    <tr>
                        <td>АО20-1</td>

                    </tr>
                    <tr>
                        <td>АМ-2.5</td>

                    </tr>
                </tbody>
            </table>

            <table id="tb1_6" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Марки</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2" style="vertical-align: middle;">Первичный алюминий ГОСТ 11069-2001</td>
                        <td>А8, А7, А7Е</td>
                        <td style="text-align: center;">Производство РУСАЛ <br> Чушка вес 16-20 кг</td>
                    </tr>
                    <tr>

                        <td>А6, А5, А35, А0</td>
                        <td rowspan="2" style="text-align: center; vertical-align: middle;">Чушка вес 6-8 кг <br> Чушка вес 10-12 кг
                        </td>
                    </tr>
                    <tr>
                        <td>Протекторные алюминиевые сплавы</td>
                        <td>АП1, АП2, АП3, АП4</td>

                    </tr>
                </tbody>
            </table>

            <table id="tb2_1" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Марка по стандарту</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Алюминиевые лигатуры ГОСТ 53777-2010 <br> DIN EN575:1995-09</td>
                        <td>AlBi3, AlCo10, AlCr5, AlCr10, AlCu33, AlFe10, AlFe20, AlMg10, AlMn10, AlNi10, AlNi20,
                            AlSi20, AlTi5, AlTi5B1, AlV5, AlV10, AlZr2.5, AlZr5, AlNi20Cu10, AlNi20Cr5, AlBe5,
                            AlSn50, AlZn30, AlZn50</td>
                        <td style="text-align: center; vertical-align: middle;">Вафельный слиток 10-12 кг <br> Чушка вес 10-12 кг</td>
                    </tr>
                    <tr>

                        <td>Лигатуры на медной основе</td>
                        <td>CuAl15, CuFe10, CuNi30, CuNi50, CuMn30</td>
                        <td style="text-align: center;">Вафельный слиток 25 кг<br> Чушка вес 25-30 кг </td>
                    </tr>
                </tbody>
            </table>

            <table id="tb3_1" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Марка по стандарту</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Цинк ГОСТ 36400-94</td>
                        <td>Ц1, Ц2, Ц3, Ц2С, Ц3С</td>
                        <td style="text-align: center; vertical-align: middle;"></td>
                    </tr>
                    <tr>

                        <td>Сплавы цинковые литейные в чушках ГОСТ 19424-97</td>
                        <td>ЦАМ 4-1, ЦА4, ЦАМ4-1в</td>
                        <td style="text-align: center;"></td>
                    </tr>
                    <tr>

                        <td>Сплавы цинковые антифрикционные ГОСТ 21437-95</td>
                        <td>ЦАМ9-1.5, ЦАМ10-5</td>
                        <td style="text-align: center;"></td>
                    </tr>
                </tbody>
            </table>

            <table id="tb4_1" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Марка по стандарту</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Латуни литейные в чушках ГОСТ 1029-97</td>
                        <td>ЛС, ЛСд, ЛК, ЛК1, ЛКС, ЛАЖМц</td>
                        <td style="text-align: center; vertical-align: middle;"></td>
                    </tr>
                    <tr>

                        <td>Бронзы литейные в чушках ГОСТ 614-97</td>
                        <td>Бр05Ц6С5, Бр03Ц13С4, Бр010Ф1, Бр08Ц4, Бр010С10</td>
                        <td style="text-align: center;"></td>
                    </tr>
                    <tr>

                        <td>Бронза безоловянная литейная</td>
                        <td>БрА10Ж3, БрА10Ж3р, БрА10Ж3Мц2, БрА10Ж4Н4Л</td>
                        <td style="text-align: center;"></td>
                    </tr>
                </tbody>
            </table>

            <table id="tb5_1" class="table table-bordered hidden">
                <col class="col1">
                <col class="col2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Марка по стандарту</th>
                        <th scope="col">Примечание</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Свинец ГОСТ 3778-98</td>
                        <td>С2, С2С, С3, С3С</td>
                        <td style="text-align: center; vertical-align: middle;"></td>
                    </tr>
                    <tr>

                        <td>Сплавы свинцово-сурьмянистые ГОСТ 1292-81</td>
                        <td>ССу, ССу2, ССу3, ССуА</td>
                        <td style="text-align: center;"></td>
                    </tr>
                    <tr>

                        <td>Баббиты оловянные и свинцовые ГОСТ 1320-74</td>
                        <td>Б83, Б83С, Б16, БС6</td>
                        <td style="text-align: center;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="contacts-panel">
        <br>
        <p>По вопросам приобретения сплавов обращайтесь в отдел сбыта:</p>
        <p>Телефоны:<span id="replaceText"></span> <a href="tel:+79510979816"><i class="fas fa-mobile-alt"></i> +7 (951)
                097-98-16</a>, <a href="tel:+78422361115"><i class="fas fa-phone-alt"></i> +7 (8422) 36-11-15</a></p>
        <p>E-mail: <a href="mailto:sbut@vtorsplav.ru"><i class="fas fa-envelope"></i> sbut@vtorsplav.ru</a></p>
    </div>
</div>



<?php

include '../footer.php'

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(".product_menu").find(".card-header").click(function() {
        $(".product_menu").find(".card-header").removeClass("bg-dark");
        $(this).addClass('bg-dark');

        $(".product_menu").find(".btn").removeClass("text-white");
        $(this).find(".btn").addClass('text-white');

        $(".prodmenu-link").removeClass('active-link');
        $("#link" + $(this).attr("id")[$(this).attr("id").length - 1] + "_1").addClass("active-link");

        $("table").hide();
        $("h3").hide();
        $("#tb" + $(this).attr("id")[$(this).attr("id").length - 1] + "_1").show();
        $("#header" + $(this).attr("id")[$(this).attr("id").length - 1] + "_1").show();
        
        if ($(this).attr("id") == "heading2") {
            $("#replaceText").html(" <a href='tel:+79510973629'><i class='fas fa-mobile-alt'></i> +7 (951) 097-36-29,</a>");
        } else {
            $("#replaceText").html("");
        }
    });

    $(".prodmenu-link").click(function() {
        $(".prodmenu-link").removeClass('active-link');
        $(this).addClass('active-link');

        $("table").hide();
        $("h3").hide();
        $("#tb" + $(this).attr("id").slice($(this).attr("id").length - 3)).show();
        $("#header" + $(this).attr("id").slice($(this).attr("id").length - 3)).show();
    });

    $(document).ready(function() {

        $("#btn" + <?php if (isset($_GET["prod"])) {
                        echo $_GET["prod"];
                    } else {
                        echo 1;
                    } ?>).trigger("click");

    });
</script>
</body>

</html>
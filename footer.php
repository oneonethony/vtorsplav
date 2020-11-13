<div class="container-fluid footer" style="background: #333; color: white;">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 pb-5">
                <div class="text-center text-md-right">
                    <p class="footer-head"><i class="far fa-copyright"></i>1994-2020 АО
                        "Вторсплав"</p>

                    432023, г. Ульяновск, ул. Профсоюзная, д. 68, Офис 1
                    <br>
                    <a href="mailto:sekretar@vtorsplav.ru">sekretar@vtorsplav.ru</a>
                    <br>
                    <a href="tel:+78422361092">+7 (8422) 36-10-92</a>
                </div>
            </div>
            <div class="col-md-4 pl-sm-5 text-center text-md-left pb-5">
                <p class="footer-head">Каталог продукции</p>

                <a href="<?php if ($current_page != "main") {
                                echo "../";
                            } ?>production">Алюминий и алюминиевые сплавы</a>

                <br>
                <a href="<?php if ($current_page != "main") {
                                echo "../";
                            } ?>production?prod=2">Лигатуры</a>

                <br>
                <a href="<?php if ($current_page != "main") {
                                echo "../";
                            } ?>production?prod=3">Цинк и цинковые сплавы</a>

                <br>
                <a href="<?php if ($current_page != "main") {
                                echo "../";
                            } ?>production?prod=4">Сплавы на медной основе</a>

                <br>
                <a href="<?php if ($current_page != "main") {
                                echo "../";
                            } ?>production?prod=5">Свинцовые сплавы и баббиты</a>

            </div>
            <div class="col-md-4 text-center text-md-left">
                <p class="footer-head">Меню сайта</p>

                <a href="<?php if ($current_page != "main") {
                                echo "../";
                            } ?>">Главная</a>

                <br>
                <a href="<?php if ($current_page != "main" && $current_page != "about") {
                                echo "../";
                            }
                            if ($current_page != "about") {
                                echo "about";
                            } ?>">
                    О компании</a>
                <br>
                <a href="<?php if ($current_page != "main" && $current_page != "production") {
                                echo "../";
                            }
                            if ($current_page != "production") {
                                echo "production";
                            } ?>">Продукция</a>

                <br>
                <a href="<?php if ($current_page != "main" && $current_page != "customers") {
                                echo "../";
                            }
                            if ($current_page != "customers") {
                                echo "customers";
                            } ?>">Покупателям</a>

                <br>
                <a href="<?php if ($current_page != "main" && $current_page != "purcashe") {
                                echo "../";
                            }
                            if ($current_page != "purcashe") {
                                echo "purcashe";
                            } ?>">Закупка сырья</a>

                <br>
                <a href="<?php if ($current_page != "main" && $current_page != "contacts") {
                                echo "../";
                            }
                            if ($current_page != "contacts") {
                                echo "contacts";
                            } ?>">Контакты</a>


            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script>
    $(window).on('load resize', function() {
        if ($(window).width() > '974') {
            $('#toggler').addClass('toggle-menu-button')

            $('.headlinks').css('float', 'right')

            $('#header-button1').removeClass('order-2')
            $('#header-button1').addClass('order-4')
            $('#header-button2').removeClass('order-2')
            $('#header-button2').addClass('order-4')

            $('#equalizer').removeClass('col-2')

            $('.head-title').css('font-size', '40pt')
            $('.head-subtitle').css('font-size', '30pt')
        } else if ($(window).width() > 450) {
            $('#toggler').removeClass('toggle-menu-button')

            $('.headlinks').css('float', 'none')

            $('#header-button1').removeClass('order-4')
            $('#header-button1').addClass('order-2')
            $('#header-button2').removeClass('order-4')
            $('#header-button2').addClass('order-2')
            $('#header-button1').removeClass('col-6')
            $('#header-button2').removeClass('col-6')
            $('#header-button1').removeClass('text-right')

            $('#equalizer').addClass('col-2')

            $('.head-title').css('font-size', '27pt')
            $('.head-subtitle').css('font-size', '22pt')
            $('.logo').css('font-size', '30pt')
        } else {
            $('.head-title').css('font-size', '18pt')
            $('.head-subtitle').css('font-size', '15pt')
            $('.logo').css('font-size', '21pt')
            $('#header-button1').addClass('col-6')
            $('#header-button2').addClass('col-6')
            $('#header-button1').addClass('text-right')

            $('#equalizer').addClass('col-2')
            $('.headlinks').css('float', 'none')
            $('#header-button1').removeClass('order-4')
            $('#header-button1').addClass('order-2')
            $('#header-button2').removeClass('order-4')
            $('#header-button2').addClass('order-2')
            $('#toggler').removeClass('toggle-menu-button')
            
        }
    })

    $('#header-button2').click(function() {
        $('.head-subcontent').toggle();
    })
</script>
<?php
$current_page = "main";

$bg_img = "media/bg.jpg";

include 'header.php';
?>




<div class="container py-5">
    <h1 class="text-center">НАША ПРОДУКЦИЯ</h1>

    <div class="card-deck mt-5 text-center">
        <div id="1" class="card text-white bg-dark">
            <img src="media/aluminium.jpg" class="card-img-top" alt="aluminium">
            <div class="card-body">
                <h4 class="card-title">Алюминий и алюминиевые сплавы</h4>
            </div>
        </div>


        <div id="2" class="card text-white bg-dark">
            <img src="media/ligatur.jpg" class="card-img-top" alt="ligatur">
            <div class="card-body">
                <h4 class="card-title">Лигатуры</h4>
            </div>
        </div>
    </div>

    <div class="card-deck mt-5 text-center">
        <div id="3" class="card text-white bg-dark">
            <img src="media/zink.jpg" class="card-img-top" alt="zink">
            <div class="card-body py-2">
                <h5 class="card-title">Цинк и цинковые сплавы</h5>
            </div>
        </div>
        <div id="4" class="card text-white bg-dark">
            <img src="media/bronza.jpg" class="card-img-top" alt="bronza">
            <div class="card-body py-2">
                <h5 class="card-title">Сплавы на медной основе</h5>
            </div>
        </div>
        <div id="5" class="card text-white bg-dark">
            <img src="media/babbit.jpg" class="card-img-top" alt="babbit">
            <div class="card-body py-2">
                <h5 class="card-title">Свинцовые сплавы и баббиты</h5>
            </div>
        </div>
    </div>
</div>

<?php

include 'footer.php'

?>

<script>
    $(".card")
        .mouseenter(function() {
            $(this).css("opacity", "0.6");
            $(this).addClass("animate");
        })
        .mouseleave(function() {
            $(this).css("opacity", "1");
            $(this).removeClass("animate");
        })
        .click(function() {
            location.href = "production?prod=" + $(this).attr("id");
        });
</script>
</body>

</html>
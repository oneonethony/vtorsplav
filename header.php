<?php
$listOfTitles = array(
    "main" => "ВТОРСПЛАВ",
    "about" => "О компании",
    "production" => "Продукция",
    "customers" => "Покупателям",
    "purcashe" => "Закупка сырья",
    "contacts" => "Контакты"
);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $listOfTitles[$current_page] ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <style>
        .bg {
            background: url("<?php echo $bg_img; ?>") no-repeat bottom center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: <?php if ($current_page == "main") {
                        echo "100vh";
                    } else {
                        echo "400px";
                    } ?>;
        }
    </style>

    <link rel="stylesheet" href="<?php if ($current_page != "main") {
                                        echo "../";
                                    } ?>styles.css">
</head>

<body>
    <div class="bg">

        <div class="row header">
            <div id="equalizer" class=""></div>

            <div class="col-8 col-lg-7 text-center text-lg-left">
                <a class="logo" href="<?php if ($current_page != "main") {
                                            echo "../";
                                        } ?>">АО ВТОРСПЛАВ</a>
            </div>

            <div class="col-12 col-lg-4 order-3 pt-2">
                <div class="headlinks text-center text-lg-left">
                    <a href="tel:+78422361092"><i class="fas fa-phone-volume"></i> +7 (8422) 36-10-92</a>
                    <br>
                    <a href="mailto:sekretar@vtorsplav.ru"><i class="fas fa-envelope"></i> sekretar@vtorsplav.ru</a>
                </div>
            </div>

            <div id="header-button1" class="col-1 order-4">
                <div class="dropdown pt-3">
                    <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe fa-lg" style="color: white; font-size: 26px;"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">RU</a>
                        <a class="dropdown-item disabled" href="#">ENG (work in progess)</a>
                    </div>
                </div>
            </div>


            <div id="header-button2" class="col-1 order-4" style="padding-top: 18px;">
                <button id="toggler" class="navbar-toggler toggle-menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars fa-lg" style="color: white;"></i>
                </button>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg p-0 top-menu-panel">


            <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if ($current_page != "main" && $current_page != "about") {
                                                        echo "../";
                                                    }
                                                    if ($current_page != "about") {
                                                        echo "about";
                                                    } ?>">О компании </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if ($current_page != "main" && $current_page != "production") {
                                                        echo "../";
                                                    }
                                                    if ($current_page != "production") {
                                                        echo "production";
                                                    } ?>">Продукция </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if ($current_page != "main" && $current_page != "customers") {
                                                        echo "../";
                                                    }
                                                    if ($current_page != "customers") {
                                                        echo "customers";
                                                    } ?>">Покупателям </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if ($current_page != "main" && $current_page != "purcashe") {
                                                        echo "../";
                                                    }
                                                    if ($current_page != "purcashe") {
                                                        echo "purcashe";
                                                    } ?>">Закупка сырья </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if ($current_page != "main" && $current_page != "contacts") {
                                                        echo "../";
                                                    }
                                                    if ($current_page != "contacts") {
                                                        echo "contacts";
                                                    } ?>">Контакты </a>
                    </li>
                </ul>
            </div>
        </nav>

        <hr class="hr-head">

        <?php include $current_page . '_subheader.html'; ?>
    </div>
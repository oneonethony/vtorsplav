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
            <div class="col-7">
                <a class="logo" href="<?php if ($current_page != "main") {
                                            echo "../";
                                        } ?>">АО ВТОРСПЛАВ</a>
            </div>

            <div class="col-4 justify-content-end">
                <div class="headlinks">
                    <a href="tel:+78422361092"><i class="fas fa-phone-volume"></i> +7 (8422) 36-10-92</a>
                    <br>
                    <a href="mailto:sekretar@vtorsplav.ru"><i class="fas fa-envelope"></i> sekretar@vtorsplav.ru</a>
                </div>
            </div>


            <div class="dropdown pt-2">
                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe fa-lg" style="color: white; font-size: 26px;"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">RU</a>
                    <a class="dropdown-item" href="#">ENG</a>
                </div>
            </div>

        </div>

        <ul class="nav justify-content-center">
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
        <hr class="hr-head">

        <?php include $current_page . '_subheader.html'; ?>
    </div>
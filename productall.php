<?php

include_once "lib/php/print_o.php";
include_once "db_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Shop - Bones of Scent</title>

    <?php include "partials/head.html"; ?>

    <link rel="icon" type="image/gif" href="image/b_logo_black1.png"/>
    <link type="text/css" rel="stylesheet" href="css/gallerycss.css"/>
    <link type="text/css" rel="stylesheet" href="css/common.css"/>
    <link type="text/css" rel="stylesheet" href="css/theme.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-compat-git.js"></script>
<!--    <script type="text/javascript" src="https://code.jquery.com/jquery-1.6.4.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/lodash/4.17.4/lodash.min.js"></script>
    <script src="js/products.js"></script>
    <script type="text/javascript" src="js/galleryJQ.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Parisienne|Cormorant+Garamond" rel="stylesheet">

    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->

</head>
<body>




<?php include "partials/header.html"; ?>


<div id="jssor_1" align="center">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-004-double-tail-spin">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="image/b_logo_black1.png"/>
    </div>

    <div data-u="slides"
         style="cursor:default;position:relative;top:0;left:0;width:2000px;height:600px;overflow:hidden;">
        <div>
            <img data-u="image" src="image/f3.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f13.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f1.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f4.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f10.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f6.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f7.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f14.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f9.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f5.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f11.png"/>
        </div>
        <div>
            <img data-u="image" src="image/f2.png"/>
        </div>
        <a data-u="any" href="https://www.jssor.com" style="display:none">html carousel</a>
    </div>

    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>











<div class="content" align="center">


<!---->
<!--                <button class="js-sortdata" data-sort="date_create" data-order="DESC">-->
<!--            Latest first-->
<!--        </button>-->
<!---->
<!--        <button class="js-sortdata" data-sort="date_create" data-order="ASC">-->
<!--            oldest first-->
<!--        </button>-->
<!--        <button class="js-sortdata" data-sort="price" data-order="DESC">Highest Price</button>-->
<!--        <button class="js-sortdata" data-sort="price" data-order="ASC">Lowest Price</button>-->




    <div class="center" align="center">
        <div class="sort" align="right">
            Sort by:
            <label>
                <select class="js-sortdata">
                    <option data-sort="date_create" data-order="">Relevance</option>
                    <option data-sort="date_create" data-order="DESC">Time: now to old</option>
                    <option data-sort="date_create" data-order="ASC">Time: old to now</option>
                    <option data-sort="price" data-order="DESC">Price high to low</option>
                    <option data-sort="price" data-order="ASC">Price low to high</option>
                </select>
            </label>
        </div>

        <div class="brief">

<!--            --><?php
//
//            $query_string = "SELECT * FROM `products` ORDER BY `date_create` LIMIT 12";
//            $result = $conn->query($query_string);
//
//            if($conn->errno) die($conn->error);
//
//            while($row = $result->fetch_object()){
//
//            // print_o($row);
//            ?>
<!---->
<!--            <div class="card">-->
<!---->
<!--            </div>-->
<!--                --><?php
//            }
//            ?>

        </div>

        <script type="text/template" id="product-item-template">

        <div class="card">
            <div class="toggle toggle-fav">
                <input type="checkbox" id="favorite<%= id %>">
                <label for="favorite<%= id %>">&#10084</label>
            </div>


            <a href="product1.php?id=<%= id %>">
                <img src="<%= image %>" alt="flower1">
            </a>
            <div class="overlay">
                <div class="text">
                    <img src="image/dotsB_white1.png" alt="">
                </div>
            </div>
            <h3><a href="product1.php?id=<%= id %>"> <%= name %> </a></h3>
            <p>&starf;&starf;&starf;&starf;&star;
                <br>$<%= price %>
            </p>
        </div>
        </script>

        <div class="total-toggles">&nbsp;</div>



        <br>

        <br>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#"class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>

        <br><br><br><br><br><br><br>

        <?php include "partials/footer.html"; ?>


    </div>
</div>

<script type="text/javascript"  src="js/nav.js"></script>

</body>
</html>
<?php

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;
use Carbon\Carbon;
use App\ContentBackgroundModel;

$allfon = App\ContentBackgroundModel::all();
$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
$workers = App\workers::all();
$blog = App\Blog::all();

foreach ($allfon as $fon) {
    if ($fon->id_image == 1) {
        $background = $fon->name;
    }
}
?>

@include('blog/layout/header')
@include('blog/layout/social')
<div class="d-none d-md-block">
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $uri = explode("/", $url);
    echo "<div class='url '>";
    echo $uri[2];
    echo "</div>";


    foreach ($blog as $bloginfor) {
        if ($bloginfor->http == $uri[2]) {
            echo "<div class='blogfullinfo'>";
            echo "<div class='blogfullinfoimg'>";
            echo "<img src='../$bloginfor->photo_uri'></img>";
            echo "</div>";
            echo "<div class='blogfullinfotext'>";
            echo "<p>$bloginfor->Fulltextblog</p>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>

</div>

@include('blog/layout/menu')
@include('blog/layout/mobilemenu')
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri[2];
        ?>
    </div>

    <?php
    foreach ($blog as $bloginfor) {
        if ($bloginfor->http == $uri[2]) {
            echo "<div class='blogfullinfo' style='left:0px;'>";
            echo "<div class='blogfullinfoimg' style='width:50%;'>";
            echo "<img src='../$bloginfor->photo_uri'></img>";
            echo "</div>";
            echo "<div class='blogfullinfotext' style='width:48%;'>";
            echo "<p>$bloginfor->Fulltextblog</p>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>



</div>


@include('blog/layout/footer')



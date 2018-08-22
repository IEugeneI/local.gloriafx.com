<?php
$url = substr($_SERVER['REQUEST_URI'], 1);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;
use Carbon\Carbon;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
$workers = App\workers::all();
$blog = App\Blog::all();
$uri = App\SecondMenu::where('http', $url)
        ->pluck('name')
        ->all();

$background = 'new-york-city.jpg';
?>

@include('blog/layout/header')
@include('blog/layout/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $uri['0'];
    echo "</div>";
    ?>

    <div class='content' style='padding-top:20px;'>
        <?php
        foreach ($blog as $bloginfor) {
            echo "<div class='blogmd'>";
            echo "<a href='{$_SERVER['REQUEST_URI']}/$bloginfor->http'>";
            echo "<div class='blogmdimg'>";
            echo "<img src='$bloginfor->photo_uri'></img>";
            echo "</div>";
            echo "<div class='blogmdtext'>";
            echo "<div class='pdateblog'>";
            $k = date('Y-m-d', strtotime($bloginfor->Dateadd));
            echo "<p>$k</p>";
            echo "</div>";
            echo "<p style='padding-top:10px;color:green;'>$bloginfor->name</p>";
            echo "<p>$bloginfor->text</p>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>

@include('blog/layout/menu')
@include('blog/layout/mobilemenu')
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri['0'];
        ?>
    </div>


    <?php
    foreach ($blog as $bloginfor) {
        echo "<div class='blogmd' style='width:48%;'>";
        echo "<a href='{$_SERVER['REQUEST_URI']}/$bloginfor->http'>";
        echo "<div class='blogmdimg'>";
        echo "<img src='$bloginfor->photo_uri'></img>";
        echo "</div>";
        echo "<div class='blogmdtext'>";
        echo "<div class='pdateblog'>";
        $k = date('Y-m-d', strtotime($bloginfor->Dateadd));
        echo "<p>$k</p>";
        echo "</div>";
        echo "<p style='padding-top:10px;color:green;'>$bloginfor->name</p>";
        echo "<p>$bloginfor->text</p>";
        echo "</div>";
        echo "</a>";
        echo "</div>";
    }
    ?>


</div>


@include('blog/layout/footer')



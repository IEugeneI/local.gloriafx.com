<?php
$url = substr($_SERVER['REQUEST_URI'], 1);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();

$uri = App\SecondMenu::where('http', $url)
        ->pluck('name')
        ->all();
$idmenu = App\SecondMenu::where('http', $url)
        ->pluck('id')
        ->all();
$background = 'new-york-city.jpg';
?>
@include('ContentViews/layouts/header')
@include('ContentViews/layouts/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $uri['0'];
    echo "</div>";
    ?>
</div>
<div class="content d-none d-md-block" id="content">
    <?php
    foreach ($content as $contex) {
        if ($contex->id_secondmenu == $idmenu[0]) {
            echo "<a href='{$_SERVER['REQUEST_URI']}/$contex->http'>";
            echo "<div class='contentdiv'>";
            echo "<div class='footercontent'>";
            echo "$contex->name";
            echo"<p></p>";
            echo "Director:$contex->director";
            echo "</div>";
            echo "<img src='$contex->img_caption'></img>";
            echo "</div>";
            echo "</a>";
        }
    };
    ?>
</div>
@include('ContentViews/layouts/menu')
@include('ContentViews/layouts/mobilemenu')
<div class="mobileurl d-md-none">
    <?php
    echo $uri['0'];
    ?>
</div>
<div class="d-md-none">
    <?php
    foreach ($content as $contex) {
        if ($contex->id_secondmenu == $idmenu[0]) {
            echo "<a href='{$_SERVER['REQUEST_URI']}/$contex->http' class='contenturl'>";
            echo "<div class='contentmobile'>";
            echo "<div class='imagecontent'>";
            echo "<img src='$contex->img_caption'></img>";
            echo "</div>";
            echo "<div class='textcontent'>";
            echo "$contex->name";
            echo "</div>";
            echo "</div>";
            echo "</a>";
        }
    };
    ?>
</div>
@include('ContentViews/layouts/footer')



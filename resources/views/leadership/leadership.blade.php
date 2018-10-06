<?php
$url = substr($_SERVER['REQUEST_URI'], 1);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;
use App\ContentBackgroundModel;

$allfon = ContentBackgroundModel::all();
$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
$workers = App\workers::all();

$uri = App\SecondMenu::where('http', $url)
        ->pluck('name')
        ->all();
foreach ($allfon as $fon) {
    if ($fon->id_image == 1) {
        $background = $fon->name;
    }
}
;
?>

@include('leadership/layout/header')
@include('leadership/layout/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $uri['0'];
    echo "</div>";
    ?>
    <div class='content' style='padding-top:20px;'>
        <?php
        foreach ($workers as $worker) {
            echo "<div class='leadershipmd'>";
            echo "<a href='{$_SERVER['REQUEST_URI']}/$worker->http'>";

            echo "<div class='footerleadership'>";
            echo "<p>$worker->name</p>";
            echo "</div>";
            echo "<img src='$worker->photo'></img>";

            echo "</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>

@include('leadership/layout/menu')
@include('leadership/layout/mobilemenu')
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri['0'];
        ?>
    </div>

    <?php
    foreach ($workers as $worker) {
        echo " <div class='leadershipmd' style='width:40%;padding-left:10%;'>";
        echo "<a href='{$_SERVER['REQUEST_URI']}/$worker->http'>";

        echo "<div class='footerleadership' >";
        echo "<p>$worker->name</p>";
        echo "</div>";
        echo "<img src='$worker->photo'></img>";

        echo "</a>";
        echo "</div>";
    }
    ?>


</div>


@include('leadership/layout/footer')



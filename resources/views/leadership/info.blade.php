
<?php
$url = substr($_SERVER['REQUEST_URI'], 1);
$uri = explode("/", $url);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
$workers = App\workers::all();

$background = 'new-york-city.jpg';
?>
@include('leadership/layout/header')
@include('leadership/layout/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo "LEADERSHIP";
    echo "</div>";
    foreach ($workers as $worker) {
        if ($worker->http == $uri[1]) {
            echo "<div class='workersinfo'>";
            echo"<img src='../$worker->photo'></img>";
            echo "</div>";
            echo "<div class='workersinfo'>";
            echo "<p>$worker->name</p>";
            echo "</div>";
        }
    };
    ?>
</div>

@include('leadership/layout/menu')
@include('leadership/layout/mobilemenu')
<div class = "d-md-none">
    <div class="mobileurl ">
        <?php
        echo "LEADERSHIP";
        ?>
    </div>
    <?php
    foreach ($workers as $worker) {
        if ($worker->http == $uri[1]) {
            echo "<div class='workersinfomobile'>";
            echo"<img src='../$worker->photo'></img>";
            echo "</div>";
            echo "<div class='workersinfomobiletext'>";
            echo "<p>$worker->name</p>";
            echo "</div>";
        }
    };
    ?>
</div>


@include('leadership/layout/footer')

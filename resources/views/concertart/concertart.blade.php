<?php
$url = substr($_SERVER['REQUEST_URI'], 1);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
$workers = App\workers::all();

$uri = App\SecondMenu::where('http', $url)
        ->pluck('name')
        ->all();

$background = 'new-york-city.jpg';
?>
@include('concertart/layout/header')
@include('concertart/layout/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $uri['0'];
    echo "</div>";
    ?>
    <div class="content">
        <div class="concertartimg">
            <img src='../public/image/concertart/123.jpg'></img>";
        </div>
        <div class="concertartp">
            <p><h1>Something About Us</h1></p>
            <p><h3> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h3></p>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>


        </div>
    </div>
</div>
@include('concertart/layout/menu')
@include('concertart/layout/mobilemenu')
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri['0'];
        ?>
    </div>
    <div class="concertartmd">
        <img src='../public/image/concertart/123.jpg'></img>";
    </div>
    <div class="concertartmd">
        <p><h1>Something About Us</h1></p>
        <p><h3> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h3></p>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
    </div>
</div>
@include('concertart/layout/footer')
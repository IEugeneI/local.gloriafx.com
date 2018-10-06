<?php
$url = substr($_SERVER['REQUEST_URI'], 1);

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;
use App\workers;
use App\ContentBackgroundModel;

$allfon = App\ContentBackgroundModel::all();
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
?>

@include('contact/layout/header')
@include('contact/layout/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $uri['0'];
    echo "</div>";
    ?>
    <div class="content" style="position: absolute;">
        <img src='../public/image/contact/map-2018.png' style="padding-top:50px;"></img>";
        <p style="color:white;font-size:0.8em;padding:0px;">5937 Willoughby ave. st. 1</p>
        <p style="color:white;font-size:0.8em;padding:0px;">Los Angeles</p>
        <p style="color:white;font-size:0.8em;padding:0px;">CA 90038 United States</p>
        <p ><a href="" style="color:green;text-decoration: none;">+1 323 813 8839</a></p>
        <p ><a href="" style="color:green;text-decoration: none;"> +1 424 278 0941</a></p>
    </div>
    <div class="contactadress">
        <p> Verhnia str. 7</p>
        <p>Dnipro 49000</p>
        <p>Ukraine</p>
    </div>
    <div class="contactsemails">
        <h2 > Chef Executive Officer</h2>
        <p >Sergii Mashevskyi</p>
        <p>ceo@gloriafx.com</p>

        <h2> Chef Creative Officer</h2>
        <p>Anatolii Kuzmitskyi</p>
        <p>tomash@gloriafx.com</p>

        <h2> Executive Producer</h2>
        <p>Max Colt</p>
        <p>max@gloriafx.com</p>

        <h2> Chef Financial Officer</h2>
        <p>Julia Lysenko</p>
        <p>cfo@gloriafx.com</p>

        <h2> Project Manager</h2>
        <p>Dimas Nekrassov</p>
        <p>pm@gloriafx.com</p>
    </div>
</div>


@include('contact/layout/menu')
@include('contact/layout/mobilemenu')
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri['0'];
        ?>
    </div>
    div class="content" style="position: absolute;">
    <img src='../public/image/contact/map-2018.png' style="padding-top:50px;"></img>";
    <p style="color:white;font-size:0.8em;padding:0px;">5937 Willoughby ave. st. 1</p>
    <p style="color:white;font-size:0.8em;padding:0px;">Los Angeles</p>
    <p style="color:white;font-size:0.8em;padding:0px;">CA 90038 United States</p>
    <p ><a href="" style="color:green;text-decoration: none;">+1 323 813 8839</a></p>
    <p ><a href="" style="color:green;text-decoration: none;"> +1 424 278 0941</a></p>
</div>
<div class="contactadress">
    <p> Verhnia str. 7</p>
    <p>Dnipro 49000</p>
    <p>Ukraine</p>
</div>
<div class="contactsemails">
    <h2 > Chef Executive Officer</h2>
    <p >Sergii Mashevskyi</p>
    <p>ceo@gloriafx.com</p>

    <h2> Chef Creative Officer</h2>
    <p>Anatolii Kuzmitskyi</p>
    <p>tomash@gloriafx.com</p>

    <h2> Executive Producer</h2>
    <p>Max Colt</p>
    <p>max@gloriafx.com</p>

    <h2> Chef Financial Officer</h2>
    <p>Julia Lysenko</p>
    <p>cfo@gloriafx.com</p>

    <h2> Project Manager</h2>
    <p>Dimas Nekrassov</p>
    <p>pm@gloriafx.com</p>
</div>



</div>


@include('contact/layout/footer')



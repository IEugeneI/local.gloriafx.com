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

@include('careers/layout/header')
@include('careers/layout/social')
<div class="d-none d-md-block">
    <?php
    echo "<div class='url '>";
    echo $uri['0'];
    echo "</div>";
    ?>
    <div class="careerscontent" style="padding-top:30px;">
        <form action="" method="POST">
            {{csrf_field()}}
            <div class="careers">
                <p>Your Name (required)</p>
                <input type="text" size="45" name="name">
            </div>
            <div class="careers">
                <p>Your Email (required)</p>
                <p><input type="email" size="45" name="EMAIL"></p>
            </div>
            <div class="careers">
                <p>Your Tel number (required)</p>
                <p><input type="tel" size="45" name="telephone" pattern="[0-9]{5,15}"></p>
            </div>
            <div class="careers">
                <p> Please write a few words about yourself
                    and your skills (required)</p>
                <p><textarea rows="9" cols="45" name="text" name="text"></textarea></p>
            </div>
            <div class="careers">
                <p> Social network if you have:</p>
                <p><input type="url" size="45" placeholder="Facebok" name="fb"></p>
                <p><input type="url" size="45" placeholder="VK" name="vk"></p>
                <p><input type="url" size="45" placeholder="ODNOKLASNIKI" name="odnokl"></p>
                <p><input type="url" size="45" placeholder="Instagram" name="inst"></p>
                <p><input type="url" size="45" placeholder="Youtube" name="youtube"></p>
            </div>
            <div class="careers">
                <p> We will get back to you as soon as possible</p>
                <button type="submit" class="btn btn-secondary btn-lg" name="userinfo">Send</button>
            </div>
        </form>
    </div>

</div>

@include('careers/layout/menu')
@include('careers/layout/mobilemenu')
<div class="d-md-none">
    <div class='mobileurl '>
        <?php
        echo $uri['0'];
        ?>
    </div>


    <form action="" method="POST">
        <div class="careersmd">
            <p>Your Name (required)</p>
            <input type="text" size="45" name="name">
        </div>
        <div class="careersmd">
            <p>Your Email (required)</p>
            <p><input type="text" size="45" name="EMAIL"></p>
        </div>
        <div class="careersmd">
            <p>Your Tel number (required)</p>
            <p><input type="text" size="45" name="telephone"></p>
        </div>
        <div class="careersmd">
            <p> Please write a few words about yourself
                and your skills (required)</p>
            <p><textarea rows="9" cols="45" name="text" name="text"></textarea></p>
        </div>
        <div class="careersmd">
            <p> Social network if you have:</p>
            <p><input type="text" size="45" placeholder="Facebok" name="fb"></p>
            <p><input type="text" size="45" placeholder="VK" name="vk"></p>
            <p><input type="text" size="45" placeholder="ODNOKLASNIKI" name="odnokl"></p>
            <p><input type="text" size="45" placeholder="Instagram" name="inst"></p>
            <p><input type="text" size="45" placeholder="Youtube" name="youtube"></p>
        </div>
        <div class="careersmd">
            <p> We will get back to you as soon as possible</p>
            <button type="submit" class="btn btn-secondary btn-lg">Send</button>
        </div>
    </form>



</div>


@include('leadership/layout/footer')



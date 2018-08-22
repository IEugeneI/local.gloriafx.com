<?php

use App\MenuModel;
use App\SecondMenu;
use App\ContentModel;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$content = App\ContentModel::all();
?>
@include('fullcontent/layouts/header')

@include('fullcontent/layouts/mobilemenu')

<?php
$url = $_SERVER['REQUEST_URI'];
$uri = explode("/", $url);
foreach ($content as $contex) {
    if ($contex->http == $uri[2]) {
        ?>

        <div id='absolute' class="d-none d-lg-block">
            <div id="slide" class="carousel slide" data-ride="carousel" >

                <div class="carousel-inner">
                    <div class="carousel-item active" >
                        <div id ="placeholder" >
                            <img src="../<?= $contex->background_image1 ?>" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id ="placeholder" >
                            <img src="../<?= $contex->background_image2 ?>" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div id ="placeholder" >
                            <img src="../<?= $contex->background_image3 ?>"  class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fullcontentmd" class="d-lg-none">
            <div id='absolute1' >
                <div id="slide" class="carousel slide" data-ride="carousel" >

                    <div class="carousel-inner">
                        <div class="carousel-item active" >
                            <div id ="placeholder" >
                                <img src="../<?= $contex->background_image1 ?>" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id ="placeholder" >
                                <img src="../<?= $contex->background_image2 ?>" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id ="placeholder" >
                                <img src="../<?= $contex->background_image3 ?>"  class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mdcontent" >
                <h3 style="color:green;"><?= $contex->name ?></h3>
                <p >Director:<?= $contex->director ?></p>
                <p >Producer:<?= $contex->producer ?></p>
                <p >Our Work:<?= $contex->OUR_WORK ?></p>
                <p class='midbuttonvideo'><button class="videobutton" style="width: 100%;height:100%;"><i class="fa fa-play-circle" aria-hidden="true" style='position:absolute;color:white;padding-left:42%;padding-top:20%;'></i><img src='../<?= $contex->video_caption ?>' alt='' style="width: 95%;height: 20%;padding-left:3%;"></button></p>
            </div>

            <?php
            for ($i = 1; $i <= 6; $i++) {
                echo "<div class='imgdiv' style='height:30%;width:48%;'>";
                echo "<a href='' data-toggle='modal' data-target='#myModal'>";
                $k = 'img' . $i;
                $f = $contex->$k;
                echo "<img src='../$f'   alt=''>";
                echo "</a>";
                echo "</div>";
            };
            ?>

        </div>
        @include('fullcontent/layouts/menu')

        <div id="rightblock" class="d-none d-lg-block">
            @include('fullcontent/layouts/social')
            <h3 class='hfullinfo'><?= $contex->name ?></h3>
            <p class='pfullinfo'>Director:<?= $contex->director ?></p>
            <p class='pfullinfo'>Producer:<?= $contex->producer ?></p>
            <p class='pfullinfo'>Our Work:<?= $contex->OUR_WORK ?></p>
            <p class='pvideo' >  <button class="videobutton" style="width: 100%;height:100%;"><i class="fa fa-play-circle" aria-hidden="true" style='position:absolute;padding-left: 35%;padding-top:18%;color:white;'></i><img src='../<?= $contex->video_caption ?>' alt=''></button></p>
            <?php
            for ($i = 1; $i <= 6; $i++) {
                echo "<div class='imgdiv'>";
                echo "<a href='' data-toggle='modal' data-target='#myModal'>";
                $k = 'img' . $i;
                $f = $contex->$k;
                echo "<img src='../$f'   alt=''>";
                echo "</a>";
                echo "</div>";
            };
            ?>


        </div>
        <?php $src = $contex->video_url; ?>
        <?php
    }
};
?>
<div id="myModal" class="modal fade " tabindex="-1">
    <div class="modal-dialog ">
        <img src="" id="ima">
    </div>
</div>

<div class="mymodaldialogvideo">
    <?php
    echo "<script>var a = '$src';</script>";
    ?>

    <iframe id='video' width="100%" height="100%" src='' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>



<div id="leftbutton">
    @include('fullcontent/layouts/button')
</div>



@include('fullcontent/layouts/footer')

<div class="containter">
    <div class="row">
        <div class = "col offset-lg-11 offset-xl-11 offset-md-10 d-none d-md-block media">

            <a class = "fa fa-instagram fa-2x " href = "https://www.instagram.com/gloriafx/" target = "_blank"></a>
            <a class = "fa fa-facebook fa-2x " href = "https://www.facebook.com/gloriafx" target = "_blank"></a>
        </div>
    </div>
</div>
<div class="d-none d-md-block">
    <div id="box" >
        <a href="<?= url('/'); ?>">
            <img  id="boximage" src="public/image/logo.png" alt="" ></img>
        </a>
    </div>
    <?php
    foreach ($mainmenu as $flight) {
        echo "<div class='menu' >";
        echo " <ul >$flight->name ";

        foreach ($secondmenu as $second) {

            if ($second->mainmenu_id == $flight->id) {
                echo"<li >";
                echo "<a href='$second->http'>$second->name</a>";
                echo"</li>";
            }
        }
        echo "</div>";
        echo "</ul>";
    }
    ?>

</div>



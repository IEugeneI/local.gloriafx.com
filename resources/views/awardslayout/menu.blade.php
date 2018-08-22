
<div class="showhide">
    <div class="d-none d-md-block ">
        <div id="box" >
            <a href="<?= url('/'); ?>">
                <img  id="boximage" src="../../public/image/logo.png" alt="" ></img>
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

            echo "</ul>";
            echo "</div>";
        }
        ?>

    </div>

</div>
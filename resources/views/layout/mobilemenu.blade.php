
<div class="d-md-none">
    <div class="navbar navbar-dark bg-dark  ">
        <div class="navbar-header">
            <a class="navbar-brand mylogo" href="#">
                <img  id="brand-image" src="../../public/image/logo.png" alt="" ></img>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" id="buttonhor"  >
            <span class="navbar-toggler-icon"></span>
        </button>



    </div>

    <?php
    foreach ($mainmenu as $flight) {
        echo "<div class='menuhor' >";
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

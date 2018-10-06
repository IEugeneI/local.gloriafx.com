<div id="main" class="adminrightblock" style="padding-top: 10px;">
    <div class="previewimage">
        <div class="loadbutton">
            <p style='text-align:center;'>Введите номер картинки,которую хотите установить на фон:</p>

            <form action='/admin/main' method="post">
                {{csrf_field()}}
                <p style='text-align:center;'><input type="text" name="idbackground" ><input type ="submit" value="Установить" name='backgr'/></p>
            </form>
            <?php
            if (isset($backgroundstatus) && !empty($backgroundstatus)) {
                echo "<div style='color:red;text-align:center;'>$backgroundstatus</div>";
            };
            ?>
        </div>


        <?php
        if (isset($mass) && !empty($mass)) {
            foreach ($mass as $back) {
                echo "<div class='photo'>";
                echo $back->id;
                echo "<img src='../public/image/mainpagebackground/$back->name'> </img>";
                echo "</div>";
            }
            ;
        };
        ?>
    </div>

</div>
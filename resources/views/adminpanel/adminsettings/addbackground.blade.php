<div id="mainbackround" class="adminrightblock" style="padding-top: 10px;">
    <div class="addimagemainpage" style="border:1px solid black;padding:10px;">
        <p style="text-align: center;color:blue;">Загрузка картинки</p><br />
        <form action="/admin/mainbackround" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="image" size="9"/>
            Введите желаемое имя картинки:
            <input type="text" name="name" />
            <input type ="submit" value="Загрузить" name="uploadimage"/>
        </form>
        <div style="color:red;text-align:center;">
            <?php
            if (isset($test) && !empty($test)) {
                echo $test;
            };
            ?>
        </div>
    </div>
</div>

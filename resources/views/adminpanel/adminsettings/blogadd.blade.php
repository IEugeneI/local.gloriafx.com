<div id="blogadd" class="adminrightblock" >
    <div class="blogadddiv">

        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="fulltextblog">
                <p>Введите полный текс новости:</p>
                <textarea rows="10" cols="45" name="fulltext"></textarea>
            </div>
            <p></p>
            <input type="file" name='image' size="9"/>
            Введите желаемое имя картинки:
            <input type="text" name="nameimage" />
            <p></p>
            <p>Введите имя новости:</p>
            <input type="text" size="30" name="name">
            <p></p>
            <p>Введите текст новости:</p>
            <input type="text" size="70" name="text">
            <p></p>
            <p>Введите http:</p>
            <input type="text" size="30" name="http">
            <?php
            if (isset($status) && !empty($status)) {
                echo "<p style='color:red;text-align:center;'>$status</p>";
            }
            ?>
            <p></p>
            <input type ="submit" value="Добавить" name="blogadd" style="margin-top:5%;" class="btn btn-success butt"/>
        </form>
    </div>
</div>
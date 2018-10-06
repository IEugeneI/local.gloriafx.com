<div id="content" class="adminrightblock" style="padding-top: 10px;">
    <div class="contentadd" >
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="addimgvideo">
                <p>Name:</p>
                <input type="text" size="30" name="name">
                <p>Director:</p>
                <input type="text" size="30" name="director">
                <p>Producer:</p>
                <input type="text" size="30" name="producer">
                <p>Our Work:</p>
                <input type="text" size="30" name="work">
                <p>Http:</p>
                <input type="text" size="30" name="http">
            </div>

            <p></p>
            <input type="file" name="caption" size="9"/>
            Введите  имя картинки caption:
            <input type="text" name="captionname" size="10"/>
            <p></p>
            <input type="file" name="video" size="9"/>
            Введите желаемое имя видео:
            <input type="text" name="videoname"  size="10"/>
            <p></p>
            <input type="file" name="videocaption" size="9"/>
            Введите  имя видео caption:
            <input type="text" name="videocaptionname" size="10" />
            <p></p>
            <input type="file" name="image1" size="9"/>
            Введите  имя первой картинки:
            <input type="text" name="nameimage1" size="10" />
            <p></p>
            <input type="file" name="image2" size="9"/>
            Введите  имя второй картинки:
            <input type="text" name="nameimage2"  size="10"/>
            <p></p>
            <input type="file" name="image3" size="9"/>
            Введите  имя третьей картинки:
            <input type="text" name="nameimage3" size="10"/>
            <p></p>
            <input type="file" name="image4" size="9"/>
            Введите  имя четвертой картинки:
            <input type="text" name="nameimage4" size="10"/>
            <p></p>
            <input type="file" name="image5" size="9"/>
            Введите  имя пятой картинки:
            <input type="text" name="nameimage5" size="10"/>
            <p></p>
            <input type="file" name="image6" size="9"/>
            Введите  имя шестой картинки:
            <input type="text" name="nameimage6" size="10"/>
            <p></p>
            <p></p>
            <input type="file" name="imagecaption1" size="9"/>
            Введите  имя картинки фона1:
            <input type="text" name="nameimagecaption1" size="10" />
            <p></p>
            <p></p>
            <input type="file" name="imagecaption2" size="9"/>
            Введите  имя картинки фона2:
            <input type="text" name="nameimagecaption2" size="10"/>
            <p></p>
            <p></p>
            <input type="file" name="imagecaption3" size="9"/>
            Введите  имя имя картинки фона3:
            <input type="text" name="nameimagecaption3" size="10"/>
            <p></p>
            <p></p>
            <p>Выбери пункт меню к которому относится данный контент:
                <select name="secondmenuid">
                    <?php
                    if ((isset($secondmenu)) && (!empty($secondmenu))) {
                        foreach ($secondmenu as $m) {
                            echo "<option>$m->name</option>";
                        }
                    }
                    ?>
                </select></p>
            <?php
            if ((isset($status)) && (!empty($status))) {
                echo "<p style='color:red;text-align:center;'>$status</p>";
            }
            ?>
            <input type ="submit" value="Загрузить" name="addcont" class="btn btn-success butt"/>
        </form>
    </div>
</div>


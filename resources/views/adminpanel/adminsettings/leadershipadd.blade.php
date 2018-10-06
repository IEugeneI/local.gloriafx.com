<div id="leadershipadd" class="adminrightblock" >
    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="addleader">
            <p>Введите имя:</p>
            <p><input type="text" name="name"></p>
            <p>Введите должность:</p>
            <p><input type="text" name="position"></p>
            <p>Введите http:</p>
            <p><input type="text" name="http"></p>
            <input type="file" name='image' size="9"/>
            Введите желаемое имя картинки:
            <input type="text" name="nameimage" />
            <?php
            if (isset($status) && !empty($status)) {
                echo "<p style='color:red;text-align:center;'>$status</p>";
            }
            ?>
            <p>  <input type ="submit" value="Добавить" name="blogadd" style="margin-top:5%;" class="btn btn-success butt"/></p>
        </div>
    </form>
</div>
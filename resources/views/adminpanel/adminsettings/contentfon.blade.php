<div id="contentfon" class="adminrightblock" >
    <div class="contentfon">
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="addfoncontent">
                <h1 style="color:red;">Добавление картинки: </h1>
                <p>Выберите картинку:</p>
                <input type="file" name="image">
                <br>  </br>
                <p>Введите имя картинки:</p>
                <input type="text" name="imagename">
                <input type="submit" name="addimage" class="btn btn-success" value="Сохранить">
            </div>
            <div class="changeimage">
                <h1 style="color:red;">Установка фона:</h1>
                <p>Введите ID картинки которую хотите поставить на фон</p>
                <input type="text" name="imagebackground">
                <input type="submit" name="changeimage" class="btn btn-primary" value="Установить">
                <?php
                if (isset($status) && !empty($status)) {
                    echo "<p style='color:blue;text-align:center;'>$status</p>";
                }
                ?>
            </div>
        </form>
        <table>
            <tr>
                <td>ID:</td>
                <td>PHOTO:</td>
            </tr>
            <?php
            if (isset($background) && !empty($background)) {
                foreach ($background as $bg) {
                    echo "<tr>";
                    echo "<td>$bg->id</td>";
                    echo "<td><img src='../public/image/BackgroundContent/$bg->name' width='200px' height='200px'></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>

    </div>
</div>
<div id="mainmenu" class="adminrightblock">
    <div class='menuadmin'>
        <p style="text-align: center;color:green;">Изменение пунктов меню:</p>
        <?php
        if (isset($allmenu) && !empty($allmenu)) {
            echo "<table>";
            foreach ($allmenu as $menu) {
                echo "<tr>";
                echo "<td>";
                echo $menu->name;
                echo "</td>";
                echo "<td>";
                echo "<button type='button' class='btn btn-primary changemenu' id='$menu->name' data='$menu->id'>Изменить</button>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>

        <div class="saveinfoadmin">
            <?php
            if ((isset($info) && (!empty($info)))) {
                echo "<p style='color:red;text-align:center;'>$info</p>";
            }
            ?>
            <form action="" method="post">
                {{csrf_field()}}
                <input type="text" size="10" class="idmenu" name="idmenu" readonly>
                <input type="text" size="40" class="changename" name="changename">
                <input type ="submit"  class='btn btn-success' value="Сохранить" name='savebutton'/>
            </form>
        </div>
    </div>

    <div class="addmenuadmin">
        <form action="" method="post">
            {{csrf_field()}}
            <p style="text-align: center;color:green;">Добавить пункт меню:</p>
            <?php
            if ((isset($status)) && (!empty($status))) {
                echo "<p style='color:red;'>$status</p>";
            }
            ?>
            <p>Введите название пункта меню:</p><input type="text" size="40" name="addmenu">
            <button type='submit' class='btn btn-success' name='addmenuadmin'>Добавить</button>
        </form>
    </div>

    <div class="deletemenu">
        <p style="text-align: center;color:green;">Удаление меню:</p>
        <?php
        if (isset($allmenu) && !empty($allmenu)) {
            echo "<table>";
            foreach ($allmenu as $menu) {
                echo "<tr>";
                echo "<form action='' method='post'>";
                ?>
                {{csrf_field()}}
                <?php
                echo "<td>";
                echo " <input type='text' size='10' class='idmenu' name='idmenu' value='{$menu->id}' readonly>";
                echo "</td>";
                echo "<td>";
                echo $menu->name;
                echo "</td>";
                echo "<td>";
                echo "<button type='submit' class='btn btn-primary '  name='deletemenu'>Удалить</button>";
                echo "</td>";
                echo"</form>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</div>

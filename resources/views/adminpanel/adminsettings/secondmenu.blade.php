<div id="secondmenu" class="adminrightblock">
    <div class='menuadmin'>

        <div class="secondmenuchange">
            <p style="text-align: center;color:green;">Изменение пунктов меню:</p>
            <form action="" method="post">
                {{csrf_field()}}
                <p>ID: <input type="text" size="10" class="secondidmenu" name="idsecondmenu" readonly></p>
                <p>Name <input type="text" size="40" class="changenamesecondmenu" name="changenamesecond"></p>
                <p>http <input type="text" size="40" class="changehttpmenuclass" name="changehttpmenu"></p>
                <p>MainMenu Name: <select class="changenamemainmenu" name="changemainmenu">
                        <?php
                        if ((isset($allmainmenu)) && (!empty($allmainmenu))) {
                            foreach ($allmainmenu as $m) {
                                echo "<option>$m->name</option>";
                            }
                        }
                        ?>
                    </select></p>

                <p><input type ="submit"  class='btn btn-success' value="Сохранить" name='savesecondmenubutton'/></p>
            </form>
        </div>
        <div class="secondmenuadd">
            <form action="" method="post">
                {{csrf_field()}}
                <p style="text-align: center;color:green;">Добавить пункт меню:</p>
                <p><input type="checkbox" name="a" value="eeeboy"> Если это контент меню</p>
                <p>Введите название пункта меню:<input type="text" size="40" name="addsecondmenu"></p>
                <p>Введите http пункта меню:<input type="text" size="40" name="httpseconmenu"></p>
                <p>Выберите главное меню к которому этот пункт относится :
                    <select name="selectsecondmenu">
                        <?php
                        if ((isset($allmainmenu)) && (!empty($allmainmenu))) {
                            foreach ($allmainmenu as $m) {
                                echo "<option>$m->name</option>";
                            }
                        }
                        ?>
                    </select>
                </p>
                <button type='submit' class='btn btn-success' name='addsecondmenuadmin'>Добавить</button>
            </form>
        </div>
        <div class="deletesecondmenu">
            <form action="" method="post">
                {{csrf_field()}}
                <p style="text-align: center;color:green;">Удалить меню:</p>
                <p>Введите ID пункта меню:<input type="text" size="40" name="deletesecondmenu"></p>
                <button type='submit' class='btn btn-primary '  name='deletesecondmenubutton'>Удалить</button>
            </form>
        </div>
        <?php
        if (isset($allmenu) && !empty($allmenu)) {
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo "Номер";
            echo "</td>";
            echo"<td>";
            echo "Подменю ";
            echo "</td>";
            echo"<td>";
            echo "Основное  меню";
            echo "</td>";
            echo "</tr>";
            foreach ($allmenu as $menu) {
                echo "<tr>";
                echo "<td>";
                echo $menu->id;
                echo "</td>";
                echo "<td>";
                echo $menu->name;
                echo "</td>";

                echo "<td>";
                if ((isset($allmainmenu)) && (!empty($allmainmenu))) {
                    foreach ($allmainmenu as $m) {
                        if ($m->id == $menu->mainmenu_id) {
                            echo "$m->name";

                            echo "</td>";
                            echo "<td>";
                            echo "<button type='button' class='btn btn-primary changesecondmenu' id='$menu->name' data='$menu->id' name='$m->name' data-http='$menu->http'>Изменить</button>";
                            echo "</td>";
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>

    </div>

</div>

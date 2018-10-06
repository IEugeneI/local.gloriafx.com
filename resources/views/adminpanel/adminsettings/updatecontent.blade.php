<div id="updatecontent" class="adminrightblock" style="padding-top: 10px;">
    <div class="updatecontent">
        <table>
            <?php
            if (isset($content) && !empty($content)) {
                echo"<tr>";
                echo "<td>";
                echo "id";
                echo "</td>";
                echo "<td>";
                echo"Name";
                echo "</td>";
                echo "<td>";
                echo "Director";
                echo "</td>";
                echo "<td>";
                echo "Producer";
                echo "</td>";
                echo "<td>";
                echo "Our Work";
                echo "</td>";
                echo "<td>";
                echo "Menu";
                echo "</td>";
                echo "</tr>";
                foreach ($content as $cont) {
                    echo "<tr>";
                    echo"<td>";
                    echo $cont->id;
                    echo"</td>";
                    echo"<td>";
                    echo $cont->name;
                    echo"</td>";
                    echo"<td>";
                    echo $cont->director;
                    echo"</td>";
                    echo"<td>";
                    echo $cont->producer;
                    echo"</td>";
                    echo"<td>";
                    echo $cont->OUR_WORK;
                    echo"</td>";
                    echo"<td>";
                    if ((isset($allmenu)) && (!empty($allmenu))) {
                        foreach ($allmenu as $m) {
                            if ($m->id == $cont->id_secondmenu) {
                                echo $m->name;

                                echo"</td>";
                                echo "<td>";
                                echo "<button type='button' class='btn btn-primary changecontent' data-id='$cont->id' data-name='$cont->name' data-director='$cont->director' data-producer='$cont->producer' data-word='$cont->OUR_WORK' data-menu='$m->name'>Изменить</button>";
                                echo "</td>";
                                echo"</tr>";
                            }
                        }
                    }
                }
            }
            ?>
        </table>
    </div>
    <br>
    <form action="" method="post">
        {{csrf_field()}}
        <input type="text" class="id"  name ="id" size="2" readonly/>
        <input type="text" class="name" name="name"  size="27"/>
        <input type="text" class="director" name="director" size="26"/>
        <input type="text" class="producer"  name="producer" size="15"/>
        <input type="text" class="work"  name="work" size="33"/>
        <select class="updatecontent" name="selectupdatecontent">
            <?php
            if ((isset($allmenu)) && (!empty($allmenu))) {
                foreach ($allmenu as $m) {
                    echo "<option>$m->name</option>";
                }
            }
            ?>
        </select>
        <p style="text-align:center;padding-top: 10px;">
            <input type ="submit" value="Сохранить" name="addcont" class="btn btn-success"/></p>
    </form>

</div>



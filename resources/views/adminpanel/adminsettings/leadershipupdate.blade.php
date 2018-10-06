<div id="leadershipupdate" class="adminrightblock" >
    <div class="delleadership">
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>position</th>
                <th>photo</th>
                <th>http</th>
            </tr>
            <?php
            if (isset($workers) && !empty($workers)) {
                foreach ($workers as $people) {
                    echo "<tr>";
                    echo "<td>$people->id</td>";
                    echo "<td>$people->name</td>";
                    echo"<td>$people->position</td>";
                    echo "<td><img src='../$people->photo' width='200px' height='200px'></td>";
                    echo "<td>$people->http</td>";
                    echo "<td><button type='button' class='btn btn-primary updateleadership'  name='updateleadership' data-id='$people->id' data-name='$people->name' data-position='$people->position' data-http='$people->http'>Редактировать</button></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
        <form action="" method="post">
            {{csrf_field()}}
            ID:
            <input type="text" class="id"  name ="id" size="2" readonly/>
            Имя:
            <input type="text" class="name" name="name"  size="27"/>
            Должность:
            <input type="text" class="position"  name="position" size="15"/>
            http:
            <input type="text" class="http" name="http">
            <?php
            if (isset($status) && !empty($status)) {
                echo "<p style='color:red;text-align:center;'>$status</p>";
            }
            ?>
            <input type ="submit" value="Сохранить" name="leadershipupdate" class="btn btn-success butt"/>
        </form>
    </div>
</div>
<div id="leadershipdel" class="adminrightblock" >
    <div class="delleadership">
        <?php
        if (isset($status) && !empty($status)) {
            echo "<p style='color:red;text-align:center;'>$status</p>";
        }
        ?>
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
                    echo "<form action='' method='post'>";
                    ?>
                    {{csrf_field()}}
                    <?php
                    echo "<td><input type='text' name='id' size='2' value ='$people->id' readonly/></td>";
                    echo "<td>$people->name</td>";
                    echo"<td>$people->position </td>";
                    echo "<td><img src='../$people->photo' width='200px' height='200px'><input type='hidden' value='$people->photo' name='photo'></td>";
                    echo "<td>$people->http</td>";
                    echo "<td><button type='submit' class='btn btn-primary '  name='deleteleadership'>Удалить</button></td>";
                    echo "</form>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</div>

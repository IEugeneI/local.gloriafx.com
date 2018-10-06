<div id="deletecontent" class="adminrightblock" style="padding-top: 10px;">
    <div class="deletecontent">
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
                    echo "$cont->OUR_WORK";
                    echo"</td>";
                    echo"</tr>";
                }
            }
            ?>
        </table>
    </div>
    <div class="deleteform">
        <form action="" method="post">
            {{csrf_field()}}
            <p style="color:red;">Введите id пункта который хотите удалить:</p>
            <p><input type="text" name="contentiddelete" size="10"/></p>
            <p><button type='submit' class='btn btn-primary '  name='deletecontent'>Удалить</button></p>
        </form>
        <?php
        if (isset($status) && !empty($status)) {
            echo "<p style='color:red;'>$status</p>";
        }
        ?>
    </div>
</div>


<div id="blogdelete" class="adminrightblock" >
    <div class="deleteblog">
        <?php
        if (isset($status) && !empty($status)) {
            echo "<p style='color:red;text-align:center;'>$status</p>";
        }
        ?>
        <table>
            <?php
            if (isset($blog) && !empty($blog)) {
                echo "<tr>";
                echo "<td>";
                echo "id";
                echo "</td>";
                echo"<td>";
                echo "Имя";
                echo "</td>";
                echo "<td>";
                echo "Текст";
                echo "</td>";
                echo "<td>";
                echo "Дата";
                echo "</td>";
                echo "<td>";
                echo "http";
                echo "</td>";
                echo "<td>";
                echo "Полный текст";
                echo "</td>";
                echo "</tr>";
                foreach ($blog as $bg) {
                    echo "<tr>";
                    echo "<form action='' method='post'>";
                    ?>
                    {{csrf_field()}}
                    <?php
                    echo "<td> <input type='text' name='id' size='2' value ='$bg->id' readonly/><input type='hidden' value='$bg->photo_uri' name='photo'></td>";
                    echo "<td>$bg->name</td>";
                    echo "<td>$bg->text</td>";
                    echo "<td>$bg->Dateadd</td>";
                    echo "<td>$bg->http</td>";
                    echo "<td>$bg->Fulltextblog</td>";
                    echo "<td><button type='submit' class='btn btn-primary '  name='deleteblog'>Удалить</button></td>";
                    echo "</form>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
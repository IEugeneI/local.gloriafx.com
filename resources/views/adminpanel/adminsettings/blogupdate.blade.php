<div id="blogupdate" class="adminrightblock" >
    <div class="deleteblog">
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
                    echo "<td> $bg->id</td>";
                    echo "<td>$bg->name</td>";
                    echo "<td>$bg->text</td>";
                    echo "<td>$bg->Dateadd</td>";
                    echo "<td>$bg->http</td>";
                    echo "<td class='data-fulltext'>$bg->Fulltextblog</td>";
                    echo "<td><button  type='button' class='btn btn-primary  updateblog'  name='updateblog' data-id='$bg->id' data-name='$bg->name' data-text='$bg->text' data-date='$bg->Dateadd' data-http='$bg->http'>Редактировать</button></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    <form action="" method="post">
        {{csrf_field()}}
        ID:
        <input type="text" class="id"  name ="id" size="2" readonly/>
        Имя:
        <input type="text" class="name" name="name"  size="27"/>
        http:
        <input type="text" class="http"  name="http" size="15"/>
        Дата:
        <input type="date" class="calendar" name="calendar">
        <p></p>
        <div class="area">
            Текст новости:
            <textarea class="text" name="text" rows="10" cols="40"></textarea>
        </div>
        <div class="area">
            Полный текст:
            <textarea type="text" class="fulltext"  name="fulltext" rows="10" cols="40"></textarea>
        </div>
        <?php
        if (isset($status) && !empty($status)) {
            echo "<p style='color:red;text-align:center'>$status</p>";
        }
        ?>
        <input type ="submit" value="Сохранить" name="updateblog" class="btn btn-success butt"/>
    </form>
</div>

<div id="usersinfo" class="adminrightblock" >
    <div class="users">
        <table>
            <tr>
                <td>ID:</td>
                <td>Name:</td>
                <td>Email:</td>
                <td>Telephone</td>
                <td>About User</td>
                <td>FB</td>
                <td>VK</td>
                <td>Одноклассники</td>
                <td>Instagram</td>
                <td>Youtube</td>
            </tr>
            <?php
            if (isset($usersinfo) && !empty($usersinfo)) {
                foreach ($usersinfo as $info) {
                    echo "<tr>";
                    echo "<form action='' method='post'>";
                    ?>
                    {{csrf_field()}}
                    <?php
                    echo "<td> <input type='text' name='id' size='3' value ='$info->id' readonly/></td>";
                    echo "<td>$info->Name</td>";
                    echo "<td>$info->Email</td>";
                    echo "<td>$info->Telephone</td>";
                    echo "<td>$info->yourself</td>";
                    echo "<td>$info->FB</td>";
                    echo "<td>$info->VK</td>";
                    echo "<td>$info->odnoklasniki</td>";
                    echo "<td>$info->Inst</td>";
                    echo "<td>$info->Youtube</td>";
                    echo "<td><button type='submit' name='deleteusersinfo' class='btn btn-primary '>Удалить</button</</td>";
                    echo "</form>";
                    echo"</tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
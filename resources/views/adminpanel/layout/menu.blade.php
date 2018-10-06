<body>
    <div class="adminpannellheader">
        <div class="Eugene">
            <img src="../public/image/Eugene.png" width="30px" height="30px">
        </div>
        <form action="/exit" method="post">
            {{csrf_field()}}
            <div class="exitadm">
                <button style="float:right;" type="submit" ><a href="" ><i class="fa fa-window-close-o  fa-2x" aria-hidden="true" "></i></a></button>
            </div>
        </form>
    </div>

    <div class="adminleftblock">
        <p style="text-align:center;">Админ Панель</p>
        <ul>
            <li ><a href="#" class='secondmenusmain' name='main'>Главная</a></li>
            <ul class="twonmenumain">
                <li ><a href="/admin/main" class='admmenu' name='mainmenu' >Бэкграунд</a></li>
                <li ><a href="/admin/mainbackround" class='admmenu' name='secondmenu'>Загрузить картинку</a></li>
            </ul>
            </li>
            <li  class="secondmenus"><a href="#" class='admmenu' >Меню</a> </li>
            <ul class="twonmenu">
                <li ><a href="/admin/mainmenu" class='admmenu' name='mainmenu' >Главное меню</a></li>
                <li ><a href="/admin/secondmenu" class='admmenu' name='secondmenu'>Подменю</a></li>
            </ul>

            <li ><a href="#" class='menucontent' >Контент</a></li>
            <ul class="twomenucontent">
                <li><a href="/admin/content" class='admmenu' name='mainmenu' >Добавить</a></li>
                <li><a href="/admin/deletecontent" class='admmenu' name='mainmenu' >Удалить</a></li>
                <li><a href="/admin/updatecontent" class='admmenu' name='mainmenu' >Редактировать</a></li>
                <li><a href="/admin/contentfon" class='admmenu' name='mainmenu' >Фон</a></li>
            </ul>
            <li ><a href="#" class='blogm' >Блог</a></li>
            <ul class="blogmenu">
                <li><a href="/admin/blogadd" class="adminblog" name="blogadmin">Добавить</a></li>
                <li><a href="/admin/blogdelete" class="adminblog" name="blogadmin">Удалить</a></li>
                <li><a href="/admin/blogupdate" class="adminblog" name="blogadmin">Редактировать</a></li>
            </ul>
            <li ><a href="#" class='leadership' >Лидеры</a></li>
            <ul class="leadershipadm">
                <li><a href="/admin/leadershipadd" class="admleadership" name="leader">Добавить</a></li>
                <li><a href="/admin/leadershipdel" class="admleadership" name="leader">Удалить</a></li>
                <li><a href="/admin/leadershipupdate" class="admleadership" name="leader">Редактировать</a></li>
            </ul>
            <li><a href="/admin/usersinfo" class="usersinfo" name="usersinfo">Обратная связь с пользователем</a></li>
        </ul>
    </div>
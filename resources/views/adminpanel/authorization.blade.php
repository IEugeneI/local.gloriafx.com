<?php

use App\AdminLogin;

$login = App\AdminLogin::all();
?>

<form method="post" action="">
    {{ csrf_field() }}
    <p style="margin:0 auto;padding-left: 40%;">Enter your name:</p>
    <br><input type="text" id="name" name="name" required
               minlength="4" maxlength="8" style="margin-left: 40%;"></br
    <br></br>
    <p style="margin:0 auto;padding-left: 40%;">  Enter your password:</p>
    <br> <input type="text" id="pass" name="pass" required
                minlength="4" maxlength="8" style="margin-left: 40%;"></br>
    <button id ="try" type="submit" value="Submit" style="margin-left: 40%; margin-top:2%;">TryToGo</button>
</form>

<?php 
    function FormularzLogowania(){
       echo '
        <div class = "logowanie">
        <h1 class = "heading">Panel CMD:</h1>
        <div class = "logowanie">
             <form method = "POST" name = "LoginForm" enctype="multipart/form-data" action = "'.$_SERVER['REQUEST_URI'].'">
                  <table class = "logowanie">
                       <tr><td class = "log4_t">[email]</td><td><input type = "text" name = "login_email" class = "logowanie"></td></tr>
                       <tr><td class = "log4_t">[haslo]</td><td><input type = "password" name = "login_pass" class = "logowanie"></td></tr>
                       <tr><td>&nbsp;</td><td><input type = "submit"  name = "x1_submit" class = "logowanie" value = "Zaloguj"></td></tr>
                  </table>
             </form>
        <div>
    </div>
        ';
        
    }
    // function ListaPodstron(){
    //     pass;
    // }


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/stylegeneral.css" />
    <link rel="stylesheet" href="style/index.css" />
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" href="style/wrld.css" />
    <link rel="stylesheet" href="style/premiery.css" />
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" href="style/lista.css" />
    
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Michał Janicki">
    <title>Popularne Polskie Gry</title>
</head>
<body>

   <div id = "header">
    <a href ="index.php"><img src="image/logo.png" class="logo">
    <h1 class="title">Popularne Polskie Gry</h1></a>
      <a href="index.php?idp=listy" >  <div class="list">
           LISTA WSZYSTKICH POLSKICH GIER
           </div></a>
    <a href="index.php?idp=premiery">  <div class="list">
           PREMIERY 2023r
            </div></a>
    <a href="index.php?idp=worldGames">  <div class="list">
            NAJLEPSZE GRY NA ŚWIECIE
            </div></a>
      <a href="suppage/kontakt.html"> <div class="list">
            KONTAKT
           </div></a>
      <a href="index.php?idp=login"> <div class="login">
            Zaloguj się
        </div></a>

   </div>
   <div id = "main">
   <div class="mid">

    <?php
     error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
     /* po tym komentarzu będzie kod do dynamicznego ładowania stron */
     if($_GET['idp'] == '') $strona = 'html/glowna.html';
     if($_GET['idp'] == 'worldGames') $strona = 'html/worldGames.html';
     if($_GET['idp'] == 'premiery') $strona = 'html/premiery.html';
     if($_GET['idp'] == 'login') $strona = 'html/login.html';
     if($_GET['idp'] == 'filmy') $strona = 'html/filmy.html';
     if($_GET['idp'] == 'listy') $strona = 'html/listy.html';
     include ($strona);
     ?>
    </div> 
   </div>
   <div id = "footer">
    <a href="mailto:testowyemail@test.pl" class = "fo">email: testowyemail@test.pl</a>
    <?php
     $nr_indeksu = '164389';
     $nrGrupy = 'ISI 3';
     echo 'Autor: Michał Janicki '.$nr_indeksu.' grupa '.$nrGrupy.' <br /><br />';
?>

</div>
</body>
</html>
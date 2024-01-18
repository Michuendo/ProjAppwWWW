<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/stylegeneral.css" />
    <link rel="stylesheet" href="style/index.css" />   
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Michał Janicki">
    <meta name="Version" content="v1.5">
    <title>Popularne Polskie Gry</title>
</head>
<body>
      
     <?php

     
     include('cfg.php');
     include('php/kategorie.php');
     include('php/produkty.php');


     ?>
   <div id = "header">
    <a href ="index.php"><img src="image/logo.png" class="logo">
    <h1 class="title">Popularne Polskie Gry</h1></a>
       <a href="index.php?idp=listy" >  <div class="list">
                     POLSKIE GRY
              </div></a>
       <a href="index.php?idp=premiery">  <div class="list">
                     PREMIERY 2023r
              </div></a>
       <a href="index.php?idp=world_games">  <div class="list">
                     NAJLEPSZE GRY NA ŚWIECIE
              </div></a>
       <a href="index.php?idp=kontakt" >  
              <div class="list">
                     Kontakt
              </div>
       </a>
       <?php
       session_start();
       
              if(isset($_SESSION['login'])){
                     echo '<a href="php/logout.php" >  
                            <div class="list log t" >
                                   Wyloguj
                             </div>
                             </a>';
                     echo '<a href = "index.php?idp=admin_panel"><span class ="hello">Witaj '.$_SESSION['login'].'</span>></a>';
                     
              }
              else{                   
                     echo '<a href="index.php?idp=zaloguj" >  
                              <div class="list log t" >
                                   Zaloguj
                             </div>
                            </a>';
              }
       ?>
       <!-- <a href="index.php?idp=zaloguj" >  
              <div class="list log t" >
                     Zaloguj
              </div>
       </a> -->
       <!-- <a href="index.php.php?idp=koszyk" >  
              <div class="list log">
                     Koszyk
              </div>
       </a> -->
       <a href = "index.php?idp=sklep">
              <div class ="shop">
                     Sklep
              </div>
       </a>
       <a href = "index.php?idp=zaj">
              <div class = "zaj">
                     PHP
              </div>
       </a>   
   </div>
   <div id = "main">
   <div class="mid">
    <?php


     include('admin/admin.php');

     include('php/showpage.php');
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
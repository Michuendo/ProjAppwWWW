<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    /* po tym komentarzu będzie kod do dynamicznego ładowania stron */
    if($_GET['idp'] == '') $strona = 'strona_glowna';
    if($_GET['idp'] == 'premiery') $strona = 'world_games';
    if($_GET['idp'] == 'world_games') $strona = 'premiery';
    if($_GET['idp'] == 'filmy') $strona = 'filmy';
    if($_GET['idp'] == 'listy') $strona = 'listy';
    if($_GET['idp'] == 'zaj') $strona = 'zaj';
    if($_GET['idp'] == 'zaloguj') $strona = 'zaloguj';
    
    if($strona == 'zaj'){
        include ('suppage/zaj.html');
    }
    elseif($strona == "zaloguj"){
        FormularzLogowania();
    }
    else{
        $query="SELECT * FROM $strona";
        $result = mysqli_query($link, $query);
        
        if(!$result){
           echo 'Nie mozna znalesc polecenia'.mysql_error();
           exit;
        }
        else{
            if($strona == 'strona_glowna'){
                echo "<h1>10 Najlepszych polskich gier</h1>
                <img src='image/bb.png' width='1100px'>";
                while($row = mysqli_fetch_array($result)){                   
                    echo '<h2>'.$row[2].'</h2>';
                    echo '<span>'.$row[3].'</span>';
                    echo "<img src = './image/".$row[1]."' class='games'>";
                }
            }
            elseif($strona == 'world_games'){
                echo "<h1 class='l'>7 najciekawszych polskich premier w 2023 r.</h1>";
                while($row = mysqli_fetch_array($result)){                    
                    echo '<h2>'.$row[1].'</h2>';
                    echo '<span>'.$row[2].'</span>';
                    echo "<img src = './image/".$row[3]."' class='games'>";
                }
            }
            elseif($strona == 'premiery'){
                while($row = mysqli_fetch_array($result)){                    
                    echo '<h2>'.$row[1].'</h2>';
                    echo "<img src = './image/".$row[2]."' class='games'>";
                }
            }
            elseif($strona == 'filmy'){
                while($row = mysqli_fetch_array($result)){                    
                    echo '<h2>'.$row[1].'</h2>';
                    echo "<iframe  src='".$row[2]."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                }
            }
            elseif($strona == 'listy'){
                include ('html/listy.html');
            }
        }

        

    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['x1_submit']))
    {
        rejestracja();
    }
    
    function rejestracja()
    {
        $login = "admin";
        $pass = "admin";

        if(!empty($_POST['login_email'] && !empty($_POST['login_pass']))){
            if($login == $_POST['login_email'] && $pass == $_POST['login_pass']) {
                echo "Pomyślne logowanie";
            }
            else{
                echo "Niepoprawne dane";
            }
        }
       
    }
    
?>
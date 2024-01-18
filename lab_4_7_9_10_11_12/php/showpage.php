<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    /* po tym komentarzu będzie kod do dynamicznego ładowania stron */
    if($_GET['idp'] == '') $strona = 'strona_glowna';
    if($_GET['idp'] == 'premiery') $strona = 'world_games';
    if($_GET['idp'] == 'world_games') $strona = 'premiery';
    if($_GET['idp'] == 'filmy') $strona = 'filmy';
    if($_GET['idp'] == 'listy') $strona = 'listy';
    if($_GET['idp'] == 'zaj') $strona = 'zaj';
    if($_GET['idp'] == 'sklep') $strona = 'sklep';
    if($_GET['idp'] == 'kontakt') $strona = 'kontakt';
    if($_GET['idp'] == 'koszyk') $strona = 'koszyk';
    if($_GET['idp'] == 'zaloguj') $strona = 'zaloguj';
    // if($_GET['idp'] == 'rejestracja') $strona = 'rejestracja';
    if($_GET['idp'] == 'admin_panel') $strona = 'admin_panel';
    if($_GET['idp'] == 'przyp') $strona = 'przyp';
    


    if($strona == 'zaj'){
        include ('suppage/zaj.html');
    }
    if($strona == 'zaloguj'){
        FormularzLogowania();

        echo "
            <a href = 'index.php?idp=przyp'>Przypomnij haslo</a>
        ";
        
    }

    elseif($strona == 'sklep'){
        header("location:php/koszyk.php");
    }
    elseif($strona == 'kontakt'){
        include('contact.php');
     

    }
    elseif($strona=="przyp"){
        
        PrzypHaslo();
    }
    elseif($strona == 'admin_panel'){
        ListaPodstron();
        echo '<h1>Admin Panel</h1>
            <form method = "POST" name = "admin_p" enctype="multipart/form-data" action = "'.$_SERVER['REQUEST_URI'].'">         
            <h2>Kategorie</h2>
            <table>                
                  <tr>
                  <td class = "admin_in"">Matka</td>
                  <td class = "admin_in"><input type = "text" placeholder = "0" name = "matka_d"></td>
                  <td class = "admin_in">Nazwa</td>
                  <td class = "admin_in"><input type = "text" placeholder = "name" name="nazwa_d"></td>     
                  <td class = "admin_in"><input type = "submit"  name = "dod_kat"  value = "Dodaj Kategorie"></td></tr>

                  <tr>
                  <td class = "admin_in">id</td>
                  <td class = "admin_in"><input type = "text" placeholder = "id" name = "id_e"></td>     
                  <td class = "admin_in">Nazwa</td>
                  <td class = "admin_in"><input type = "text" placeholder = "nazwa" name ="nazwa_e"> </td>   
                  <td class = "admin_in"><input type = "submit"  name = "edy_kat"  value = "Edytuj Kategorie"></td></tr>

                  <tr>
                  <td class = "admin_in">Id</td>
                  <td class = "admin_in"><input type = "text" placeholder = "id" name= "id_u"> </td>     
                  <td class = "admin_in"></td> 
                  <td class = "admin_in"></td> 
                  <td class = "admin_in"><input type = "submit"  name = "usu_kat"  value = "Usuń Kategorie"></td></tr>
            </table>   
            <h2>Produkty</h2>

            <table>
            <tr>
            <td class = "admin_in"">Tytul</td>
            <td class = "admin_in"><input type = "text" placeholder = "title" name = "tytul_d"></td>
            <td class = "admin_in"">opis</td>
            <td class = "admin_in"><input type = "text" placeholder = "opis" name = "opis_d"></td>

            </tr><tr><td class = "admin_in"">data_wygasniecia</td>
            <td class = "admin_in"><input type = "text" placeholder = "data_wygasniecia" name = "data_wygasniecia_d"></td>
            <td class = "admin_in"">cena_netto</td>
            <td class = "admin_in"><input type = "text" placeholder = "cena_netto" name = "cena_netto_d"></td>
            </tr><tr><td class = "admin_in"">podatek_vat</td>
            
            <td class = "admin_in"><input type = "text" placeholder = "podatek_vat" name = "podatek_vat_d"></td>
            <td class = "admin_in"">ilosc_dostepnych_sztuk</td>
            <td class = "admin_in"><input type = "text" placeholder = "ilosc_dostepnych_sztuk" name = "ilosc_dostepnych_sztuk_d"></td>
            
            </tr><tr><td class = "admin_in"">kategoria</td>
            <td class = "admin_in"><input type = "text" placeholder = "kategoria" name = "kategoria_d"></td>
            <td class = "admin_in"">gabaryt_produktu</td>
            <td class = "admin_in"><input type = "text" placeholder = "gabaryt_produktu" name = "gabaryt_produktu_d"></td>
            </tr><tr><td class = "admin_in"">zdjecie_link</td>
            <td class = "admin_in"><input type = "text" placeholder = "zdjecie_link" name = "zdjecie_link_d"></td>

            </tr><tr><td class = "admin_in"><input type = "submit"  name = "dod_prod"  value = "Dodaj Produkt"></td></tr>
            </tr>

            <tr>
            <td class = "admin_in""><strong>ID</strong></td>
            <td class = "admin_in"><input type = "text" placeholder = "id" name = "id_ed_pr"></td>
            <td class = "admin_in"">Tytul</td>
            <td class = "admin_in"><input type = "text" placeholder = "title" name = "tytul_ed_pr"></td>
            </tr><tr><td class = "admin_in"">opis</td>
            <td class = "admin_in"><input type = "text" placeholder = "opis" name = "opis_ed_pr"></td>

            <td class = "admin_in"">data_wygasniecia</td>
            <td class = "admin_in"><input type = "text" placeholder = "data_wygasniecia" name = "data_wygasniecia_ed_pr"></td>
            </tr><tr><td class = "admin_in"">cena_netto</td>
            <td class = "admin_in"><input type = "text" placeholder = "cena_netto" name = "cena_netto_ed_pr"></td>
            <td class = "admin_in"">podatek_vat</td>
            
            <td class = "admin_in"><input type = "text" placeholder = "podatek_vat" name = "podatek_vat_ed_pr"></td>
            </tr><tr><td class = "admin_in"">ilosc_dostepnych_sztuk</td>
            <td class = "admin_in"><input type = "text" placeholder = "ilosc_dostepnych_sztuk" name = "ilosc_dostepnych_sztuk_ed_pr"></td>
            
            <td class = "admin_in"">kategoria</td>
            <td class = "admin_in"><input type = "text" placeholder = "kategoria" name = "kategoria_ed_pr"></td>
            </tr><tr><td class = "admin_in"">gabaryt_produktu</td>
            <td class = "admin_in"><input type = "text" placeholder = "gabaryt_produktu" name = "gabaryt_produktu_ed_pr"></td>
            <td class = "admin_in"">zdjecie_link</td>
            <td class = "admin_in"><input type = "text" placeholder = "zdjecie_link" name = "zdjecie_link_ed_pr"></td>

            </tr><tr><td class = "admin_in"><input type = "submit"  name = "edy_prod"  value = "Edytuj Produkt"></td>     
            </tr>

            <tr>
            <td class = "admin_in">Id</td>
            <td class = "admin_in"><input type = "text" placeholder = "id" name= "id_us_p"> </td>     
            <td class = "admin_in"></td> 
            <td class = "admin_in"><input type = "submit"  name = "usu_prod"  value = "Usuń Produkt"></td></tr>
      </table>       
            </form>        

           ';
    }

    else{
        $query="SELECT * FROM `page_list` WHERE `page_title` = '$strona'";
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
                    echo '<h2>'.$row[3].'</h2>';
                    echo '<span>'.$row[4].'</span>';
                    echo "<img src = './image/".$row[2]."' class='games'>";
                }
            }
            elseif($strona == 'world_games'){
                echo "<h1 class='l'>7 najciekawszych polskich premier w 2023 r.</h1>";
                while($row = mysqli_fetch_array($result)){                    
                    echo '<h2>'.$row[3].'</h2>';
                    echo '<span>'.$row[4].'</span>';
                    echo "<img src = './image/".$row[2]."' class='games'>";
                }
            }
            elseif($strona == 'premiery'){
                echo "<h1 class='l'>Najpopularniejsze gry na świecie</h1>";

                while($row = mysqli_fetch_array($result)){                    
                    echo '<h2>'.$row[3].'</h2>';
                    echo "<img src = './image/".$row[2]."' class='games'>";
                }
            }
            elseif($strona == 'filmy'){
                while($row = mysqli_fetch_array($result)){                    
                    echo '<h2>'.$row[3].'</h2>';
                    echo "<iframe  src='".$row[2]."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                }
            }
            elseif($strona == 'listy'){
                include ('html/listy.html');
            }
        }
    }

        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dod_kat'])){
            $matka_d = $_POST['matka_d'];
            $nazwa_d = $_POST['nazwa_d'];
            DodajKategorie($matka_d,$nazwa_d);
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['edy_kat'])){
            $id_e = $_POST['id_e'];
            $nazwa_e = $_POST['nazwa_e'];
            EdytujKategorie($id_e,$nazwa_e);
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['usu_kat'])){
            $id_u = $_POST['id_u'];
            UsunKategorie($id_u);
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dod_prod'])){
            $tytul = $_POST['tytul_d'];
            $opis = $_POST['opis_d'];
            $data_wygasniecia = $_POST['data_wygasniecia_d'];
            $cena_netto = $_POST['cena_netto_d'];
            $podatek_vat = $_POST['podatek_vat_d'];
            $ilosc_dostepnych_sztuk = $_POST['ilosc_dostepnych_sztuk_d'];
            $kategoria = $_POST['kategoria_d'];
            $gabaryt_produktu = $_POST['gabaryt_produktu_d'];
            $zdjecie = $_POST['zdjecie_link_d'];

            DodajProdukt($tytul, $opis, $data_wygasniecia, $cena_netto, $podatek_vat, $ilosc_dostepnych_sztuk, $kategoria, $gabaryt_produktu, $zdjecie);
        }
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['edy_prod'])){
            $id = $_POST['id_ed_pr'];
            $tytul = $_POST['tytul_ed_pr'];
            $opis = $_POST['opis_ed_pr'];
            $data_wygasniecia = $_POST['data_wygasniecia_ed_pr'];
            $cena_netto = $_POST['cena_netto_ed_pr'];
            $podatek_vat = $_POST['podatek_vat_ed_pr'];
            $ilosc_dostepnych_sztuk = $_POST['ilosc_dostepnych_sztuk_ed_pr'];
            $kategoria = $_POST['kategoria_ed_pr'];
            $gabaryt_produktu = $_POST['gabaryt_produktu_ed_pr'];
            $zdjecie = $_POST['zdjecie_ed_pr'];
            

            
            EdytujProdukt($id, $title, $opis, $data_wygasniecia, $cena_netto, $podatek_vat, $ilosc_dostepnych_sztuk, $kategoria, $gabaryt_produktu, $zdjecie);
        }
        
        elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['usu_prod'])){
            $id_produktu = $_POST['$id_us_p'];
            
            UsunProdukt($id_produktu);
        }
        
      
?>
<?php 
    function FormularzLogowania(){
       echo '
     <div class = "logowanie">
          <h1 class = "heading">Panel CMD:</h1>
          <div class = "">
               <form method = "POST" name = "LoginForm" enctype="multipart/form-data" action = "'.$_SERVER['REQUEST_URI'].'">
                    <table class = "">
                         <tr><td class = "log4_t">[email]</td><td><input type = "text" name = "login_email" class = "inp"></td></tr>
                         <tr><td class = "log4_t">[haslo]</td><td><input type = "password" name = "login_pass" class = "inp"></td></tr>
                         <tr><td>&nbsp;</td><td><input type = "submit"  name = "x1_submit" class = "login_but" value = "Zaloguj"></td></tr>
                    </table>
               </form>
               
          <div>
     </div>
        ';
        // <a href = "index.php?idp=rejestracja" style = "text-align:center;">Zarejestruj się</a>
    }

  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['x1_submit']))
  {
     $login = $_POST['login_email'];
     $pass = $_POST['login_pass'];

     $select = mysqli_query($link, "SELECT * FROM `admin` WHERE `Login` = '$login' AND `Pass` = '$pass'");
     $ro = mysqli_fetch_array($select);

     if(is_array($ro)){
          $_SESSION["login"] = $ro['Login'];
          $_SESSION["pass"] = $ro['Pass'];
     }else{
          echo '<script type = "text/javascript">';
          echo 'alert("Bład przy logowaniu")';
          echo '</script>';
     }
     if(isset($_SESSION['login'])){
          // echo '<script type = "text/javascript">';
          // echo 'alert("Udało ci się zalogować")';
          // echo '</script>';
          header("Location:index.php");
     }    
  }

  function ListaPodstron(){
     global $link;
     $result = mysqli_query($link, "SELECT * FROM `page_list` GROUP BY `page_title`");

     echo '<table>';     
     echo "<form method = 'POST' action ='".$_SERVER['REQUEST_URI']."'>";
     while($row = mysqli_fetch_array($result)){  
          echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td><input type = 'submit' value = 'usuń' ></td><td><input type = 'submit' value = 'Edytuj' name='".$row[1]."'></td></tr>";
     }
     echo '</table>';
     echo "</form>";




  }

  function EdytujPodstrone($podstrona){

     echo "<form method = 'POST' action ='".$_SERVER['REQUEST_URI']."'>
               Page_title: <input type='text' name = 'page_title'>
               Page_img <input type='text' name = 'page_img'>
               Page_h2<textarea row ='4' cols='50' name = 'Page_h2'>
               page_content<textarea row ='4' cols='50' name = 'page_content'>
               Aktywna<input type='checkbox' name='active'>
          </form>";
  }
 

  function DodajNowaPodstrone(){

     echo "<form method = 'POST' action ='".$_SERVER['REQUEST_URI']."'>
               Page_title: <input type='text' name = 'page_title'>
               Page_img <input type='text' name = 'page_img'>
               Page_h2<textarea row ='4' cols='50' name = 'Page_h2'>
               page_content<textarea row ='4' cols='50' name = 'page_content'>
               Aktywna<input type='checkbox' name='active'>
               <input type = 'submit' name = 'x2_submit' >
          </form>";
     
  }
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['x2_submit']))
  {
     $title = $_POST['page_title'];
     $img = $_POST['page_img'];
     $h2 = $_POST['Page_h2'];
     $content = $_POST['page_content'];
     
     $quer = "INSERT INTO `page_list`(`id`, `page_title`, `page_img`, `page_h2`, `page_content`) VALUES ('','$title','$img','$h2','$content') LIMIT 1";
     if(mysqli_query($link, $quer)){
          echo "New record created successfully";
     }
     else{
          echo "Error: " .$quer. "<br>" . mysqli_error($link);
     }


  }
  function UsunPodstrone($podstrona)
  {
     global $link;
     mysqli_query($link, "DELETE * FROM `page_list` WHERE `page_title` = '$podstrona' LIMIT 1");
     
  }

  function PrzypHaslo()
  {
      echo'
      <div class="Kontakt">
          <h1 class="heading">Przypomnij haslo:</h1>
          <div class="formularz">
              <form class="formularz" method="post" name="mail" enctype="multipart/form-data" action="' . $_SERVER['REQUEST_URI'] . '">
                  <table class="formularz">
                      <tr><td class="kon4_t">Podaj login:</td><td><input type="text" name="email" class="formularz" /></td></tr>
                      <tr><td>&nbsp;</td><td><input type="submit" name="haslo_submit" class="kontakt" value="wyslij" /></td></tr>
                  </table>
              </form>
          </div>
      </div>
      ';
  
  }
  if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['haslo_submit']))  {
      $email = $_REQUEST['email'];
      $quer="SELECT * FROM `admin` WHERE `Login` = '$email'";
      $res = $link->query($quer);

           // Sprawdzenie, czy zapytanie zwróciło 0 wyników
          if ($res->num_rows == 0) {
          echo "Brak loginus w bazie danych.";
          } else {
          // Przetwarzanie wyników zapytania
          while ($row = $res->fetch_assoc()) {
               // Tutaj możesz przetwarzać dane zwrócone przez zapytanie
          

  
               //komunikat potwierdzający
               echo "Hasło zostało wysłane na email!";
          }
     }
  }

?>
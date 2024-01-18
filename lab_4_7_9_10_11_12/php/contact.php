<?php 

function PokazKontakt()
{
    echo'
    <div class="Kontakt">
        <h1 class="heading">poczta:</h1>
        <div class="formularz">
            <form class="formularz" method="post" name="mail" enctype="multipart/form-data" action="' . $_SERVER['REQUEST_URI'] . '">
                <table class="formularz">
                    <tr><td class="kon4_t">Temat:</td><td><input type="text" name="kontakt" class="formularz" /></td></tr>
                    <tr><td class="kon4_t">Wiadomość:</td><td><input type="text" name="wiadomosc" class="formularz" /></td></tr>
                    <tr><td class="kon4_t">Nadawca:</td><td><input type="text" name="email" class="formularz" /></td></tr>
                    <tr><td>&nbsp;</td><td><input type="submit" name="x4_submit" class="kontakt" value="wyslij" /></td></tr>
                </table>
            </form>
        </div>
    </div>
    ';

}





//jeżeli zmienna "email" została wypełniona, wysyłamy wiadomość
  if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['x4_submit']))  {
  
  //Informację o emailu, na który będzie wysyłana wiadomość
  $admin_email = "";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //wysyłamy email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //komunikat potwierdzający
  echo "Dziękujemy za kontakt z nami!";
  }
  
  //jeżeli zmienna z wartością "email" nie została wypełniona pokazujemy ponownie formularz
  else  {
    PokazKontakt();

  }

  function WyslijMailKontakt(){
    global $login;
    if(empty($_POST['temat'])||empty($_POST['tresc']||empty($_POST['email'])))
    {
        echo '[nie_wypelniles_pola';
        echo PokazKontakt();
    }
    else{
        $mail['subject'] = $_POST['temat'];
        $mail['body'] = $_POST['tresc'];
        $mail['sender'] = $_POST['email'];
        $mail['reciptient'] = $login;

        $header = "From: Formularz kontaktowy<".$mail['sener'].">\n";
        $header .= "MIME-Version: 1.0\nContent-Type: text/plain; charset=urf-8\nContent-Transfer-Encoding";
        $header .= "X-Sender: <".$mail['sender']."?\n";
        $header .= "X-Mailer: PrapWWW mail 1.2\n";
        $header .= "X-Priority: 3\n";
        $header .= "Return-Path: <".$mail['sender'].">\n";

        mail($mail['reciptient'],$mail['subject'],$mail['body'].$header);

        echo "[Wiadomosc_wyslana]";
    }
}



?>

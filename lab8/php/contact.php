<?php 
function PokazKontakt(){
    $wynik = '
    <div class = "kontakt">
        <h1 class = "heading">Kontakt:</h1>
             <form method = "POST" name = "Kont" enctype="multipart/form-data" action = "">
                 <input type = "text" name = "temat">
                 <input type = "text" name = "tresc">
                 <input type = "text" name = "email"> 
                 <input type = "submit" name = "email"> 

             </form>
        <div>
    </div>
    ';
}
function WyslijMailKontakt(){
    if(empty($_POST['temat'])||empty($_POST['tresc']||empty($_POST['email'])))
    {
        echo '[nie_wypelniles_pola';
        echo PokazKontakt();
    }
    else{
        $mail['subject'] = $_POST['temat'];
        $mail['body'] = $_POST['tresc'];
        $mail['sender'] = $_POST['email'];
        $mail['reciptient'] = $odbiorca;

        $header = "From: Formularz kontaktowy<".$mail['sener'].">\n";
        $header .= "MIME-Version: 1.0\nContent-Type: text/plain; charset=urf-8\nContent-Transfer-Encoding";
        $header .= "X-Sender: <".$mail['sender']."?\n";
        $header .= "X-Mailer: PrapWWW mail 1.2\n";
        $header .= "X-Priority: 3\n";
        $header .= "Return-Path: <".$mail['sender'].">\n";

        mail($mail['reciptient'],$mail['subject'],$mail['body'].$header);

        echo "[Wiadomosc_wyslana";
    }
}
function PrzypomnijHaslo(){
    if(empty($_POST['email'])) {
        echo '[nie_podano_adresu_email]';
    } else {
        

        // Przygotowanie maila
        $mail['subject'] = 'Przypomnienie hasła';
        $mail['body'] = 'Twoje : ' . $pass;
        $mail['sender'] = 'noreply@example.com';
        $mail['recipient'] = $_POST['email'];

        $header = "From: Formularz przypomnienia hasła <" . $mail['sender'] . ">\n";
        $header .= "MIME-Version: 1.0\nContent-Type: text/plain; charset=utf-8\nContent-Transfer-Encoding: 8bit\n";
        $header .= "X-Sender: <" . $mail['sender'] . ">\n";
        $header .= "X-Mailer: PrapWWW mail 1.2\n";
        $header .= "X-Priority: 3\n";
        $header .= "Return-Path: <" . $mail['sender'] . ">\n";

        
        mail($mail['recipient'], $mail['subject'], $mail['body'], $header);

        echo "[Wiadomosc_wyslana]";
    }
}
?>
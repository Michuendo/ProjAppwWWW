

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/stylegeneral.css" />
    <link rel="stylesheet" href="../style/login.css" />
    <link rel="icon" type="image/x-icon" href="../image/favicon.ico">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Michał Janicki">
    <title>Popularne Polskie Gry</title>
</head>
<body>

   <div id = "header">
    <a href ="../index.html"> 
        <img src="../image/logo.png" class="logo">
        <h1 class="title">Popularne Polskie Gry</h1>
    </a>
      <a href="listy.html">  <div class="list">
           LISTA WSZYSTKICH POLSKICH GIER
           </div></a>
    <a href="premiery.html">  <div class="list">
           PREMIERY 2023r
            </div></a>
    <a href="worldGames.html">  <div class="list">
            NAJLEPSZE GRY NA ŚWIECIE
            </div></a>
      <a href="kontakt.html"> <div class="list">
            KONTAKT
           </div></a>
           <a href="login.html"> <div class="login">
            Zaloguj się
        </div></a>

   </div>
   <div id = "main">
    <div class="mids">
        
<?php
    $nr_indeksu = '164389';
    $nrGrupy = 'ISI 3';
    echo 'Michał Janicki '.$nr_indeksu.' grupa '.$nrGrupy.' <br /><br />';
    echo 'Zastosowanie metody include() <br /><br />';

    $i = '2';
    switch ($i) {
        case 0:
            echo "i = 0";
            break;
        case 1:
            echo "i = 1";
            break;
        case 2:
            echo "i = 2";
            break;
    }
    echo "<br /><br />";
    if ($i == 0) {
        echo "i = 0";
    } elseif ($i == 1) {
        echo "i = 1";
    } elseif ($i == 2) {
        echo "i = 2";
    }
    echo "<br /><br />";
    echo 'Zastosowanie warunki if, else, elseif, switch <br />';
    echo "<br /><br />";
    for($j = 1;$j <= 4; $j++){
        echo $j.', ';
    }
    echo "<br /><br />";
    $x = 4;
    while($x >= 1){
        echo $x.', ';
        $x--;
    }
    echo "<br /><br />";
    echo 'Zastosowanie pętle for() i while() <br />';

    echo '    
    <form method="POST" action = "">
        <input type = "text" name = "AA">

        <input type = "submit">
    </form><br />';
    if (!empty($_POST['AA'])) {
        echo $_POST['AA'];
    }
    echo "<br />";
    echo 'zastosowanie metody POST <br />';

    echo '<form method="GET" action = "">
        <input type = "number" name = "NUM">
        <input type = "submit">
    </form><br />';
    
    if (!empty($_GET['NUM'])) {
        echo $_GET['NUM'];
    }
    echo "<br />";
    echo 'zastosowanie metody GET <br />';
    echo "<br />";
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo $_SESSION["favcolor"].' '.$_SESSION["favanimal"];
    echo "<br /><br />";
    echo 'zastosowanie metody SESSION <br />';

?>
    </div>


   </div>
   <div id = "foot">
    <a href="mailto:testowyemail@test.pl" class = "fo">email: testowyemail@test.pl></a>
   </div>
</body>
</html>
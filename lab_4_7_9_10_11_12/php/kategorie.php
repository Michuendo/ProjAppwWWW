<?php
    function DodajKategorie($matka, $nazwa){
        global $link;

        $sql = "INSERT INTO kategorie (matka, nazwa) VALUES ('$matka', '$nazwa')";
        $link->query($sql);
    }

    function UsunKategorie($id) {
        global $link;
    
        $sql = "DELETE FROM kategorie WHERE id = '$id'";
        $link->query($sql);
    }
    
    function EdytujKategorie($id, $nazwa) {
        global $link;
    
        $sql = "UPDATE kategorie SET nazwa = '$nazwa' WHERE id = '$id'";
        $link->query($sql);
    }
    function PokazKategorie() {
        global $link;
    
        $sql = "SELECT * FROM kategorie";
        $result = $link->query($sql);
    
        if ($result === false) {
            die("Error in query: " . $link->error);
        }
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['matka'] == 0) {
                    echo "<strong>" . $row['nazwa'] . "</strong><br>";
    
                    // Pobranie i wyświetlenie podkategorii
                    $subSql = "SELECT * FROM kategorie WHERE matka = '{$row['id']}'";
                    $subResult = $link->query($subSql);
    
                    if ($subResult === false) {
                        die("Error in subquery: " . $link->error);
                    }
    
                    if ($subResult->num_rows > 0) {
                        while ($subRow = $subResult->fetch_assoc()) {
                            echo "&nbsp;&nbsp;&nbsp;" . $subRow['nazwa'] . "<br>";
                        }
                    }
                }
            }
        } else {
            echo "Brak kategorii.";
        }
    }


    
?>
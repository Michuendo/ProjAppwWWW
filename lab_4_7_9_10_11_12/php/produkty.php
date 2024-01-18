<?php
// Dodaj produkt do bazy danych
function DodajProdukt($tytul, $opis, $data_wygasniecia, $cena_netto, $podatek_vat, $ilosc_dostepnych_sztuk, $kategoria, $gabaryt_produktu, $zdjecie_link) {
    global $link;

    $sql = "INSERT INTO produkty (tytul, opis, data_wygasniecia, cena_netto, podatek_vat, ilosc_dostepnych_sztuk, kategoria, gabaryt_produktu, zdjecie) VALUES ('$tytul', '$opis', '$data_wygasniecia', '$cena_netto', '$podatek_vat', '$ilosc_dostepnych_sztuk', '$kategoria', '$gabaryt_produktu', '$zdjecie_link')";
    $link->query($sql);
}

// Usuń produkt z bazy danych
function UsunProdukt($id_produktu) {
    global $link;

    $sql = "DELETE FROM produkty WHERE id = '$id_produktu'";
    $link->query($sql);
}

// Edytuj informacje o produkcie w bazie danych
function EdytujProdukt($id_produktu, $tytul, $opis, $data_wygasniecia, $cena_netto, $podatek_vat, $ilosc_dostepnych_sztuk, $kategoria, $gabaryt_produktu, $zdjecie) {
    global $link;

    $sql = "UPDATE produkty SET `tytul` = '$tytul', `opis` = '$opis',`data_wygasniecia` = '$data_wygasniecia', `cena_netto` = '$cena_netto', `podatek_vat` = '$podatek_vat',  `ilosc_dostepnych_sztuk` = '$ilosc_dostepnych_sztuk', `kategoria` = '$kategoria', `gabaryt_produktu` = '$gabaryt_produktu', `zdjecie` = '$zdjecie' WHERE id = '$id_produktu'";
    $link->query($sql);

}

// Pobierz listę produktów z bazy danych
function PokazProdukty() {
    global $link;

    $sql = "SELECT * FROM produkty";
    $result = $link->query($sql);

    $produkty = array();
    while ($row = $result->fetch_assoc()) {
        $produkty[] = $row;
    }

    return $produkty;
}

?>
<?php

class clsFunctions {

    public static function procitajSlikeIzFoldera($folder) {
        $slike = array();
        $putanjaDoFoldera = __DIR__ . '/../' . $folder; // Prilagodite putanju ako je potrebno

        // Provera da li je folder validan
        if (is_dir($putanjaDoFoldera)) {
            $datoteke = scandir($putanjaDoFoldera); // Učitava sve datoteke iz foldera
            
            // Iteracija kroz sve datoteke
            foreach ($datoteke as $datoteka) {
                $putanjaDoDatoteke = $putanjaDoFoldera . '/' . $datoteka;
                
                // Provera da li je datoteka slika
                if (is_file($putanjaDoDatoteke) && preg_match("/\.(jpg|jpeg|png|gif)$/", $datoteka)) {
                    $slike[] = 'images/galerija/' . $datoteka;
                }
            }
        }

        return $slike;
    }

    public static function procitajLinkoveIzFajla($fajl) {
        $linkovi = array();
        $fajl = __DIR__ . '/../' . $fajl; // Prilagodite putanju ako je potrebno

        // Provera da li je fajl dostupan za čitanje
        if (file_exists($fajl)) {
            $sadrzaj = file_get_contents($fajl); // Čitanje sadržaja fajla

            // Razdvajanje linkova po zarezu
            $linkovi = explode(',', $sadrzaj);
    
            // Uklanjanje belina i suvišnih razmaka sa svakog linka
            $linkovi = array_map('trim', $linkovi);
        }

        return $linkovi;
    }
}

?>
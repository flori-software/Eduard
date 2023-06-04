<?php

class r2d2 {
    public $pdo;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=eduard";
        $username = "eduard";
        $password = "PentruRugaciunileParinteluiSergiuDoamneMiluieste";
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            #echo "Verbindung zur Datenbank hergestellt!";
        } catch (PDOException $e) {
            echo "Fehler bei der Verbindung zur Datenbank: " . $e->getMessage();
        }         
    }

    public function lese_einzelwert(String $wert, String $tabelle, $gesuchter_wert = NULL, $gesuchtes_feld = NULL) {
        // Diese Funktion verwenden wir nur um einen einzigen Wert zu lesen, da nur das letzte Ergebnis zurückgegeben wird
        $sql = "SELECT * FROM $tabelle";
        if(!is_null($gesuchter_wert)) {
            $sql .= " WHERE `".$gesuchtes_feld."` = '".$gesuchter_wert."'";
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        while($row = $stmt -> fetch()) {
            $antwort = $row[$wert];
        }
        return $antwort;
    }

    public function lese_objekt() {

    }
}






?>
<?php

class Eduard {
    public bool   $mobile;
    public string $text; // Willkommenstext
    public array  $patenschaften; // Objekte des Typs Einzelfall
    private       $r2d2;

    public function __construct(bool $mobile = true) {
        // Wichtig für die Darstellung der Seite:
        $this->mobile = $mobile;
        $this->r2d2   = new r2d2();
        $this->ui();   
    }

    private function lese_willkommenstext() {
        $this->text = $this->r2d2->lese_einzelwert(wert: "text", tabelle: "willkommenstext");
    }

    private function ui() {
        $this->lese_willkommenstext();
        echo '<html lang="de">
        <head>
        <meta charset="utf-8">
        <title>Werde Pate!</title>';
        if($this->mobile) {
            // Style für mobile Geräte

        } else {

        }
        echo $this->text;

    }

    private function alle_lesen() {

    }

    private function lesen() {

    }
}

class Einzelfall {
    public int    $ID;
    public string $name;
    public string $beschreibung;
    public float  $mntl_bedarf;
    public float  $summe_mntl_patenschaften;
    public array  $patenschaften;
}

class Patenschaften {
    public int   $ID;
    public int   $id_pate;
    public float $summe;
}

class Kontaktdaten {
	public $strasse;
	public $plz;
	public $ort;
	
	public $telefonnummer;
	public $mobil;
	public $email;

}

?>
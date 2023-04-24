<?php

abstract class bangun_datar {
    abstract function luas();
}



/**
 * Menghitung bangun datar Persegi
 *
 * @param $sisi
 *
 */
class Persegi extends bangun_datar {
    private float $sisi;

    function __construct($sisi){
        $this->sisi = $sisi;
    }
    function luas(){
        echo "Luas ". get_class(). " : ". ($this->sisi * $this->sisi). "\n";
    }

}



/**
 * Menghitung bangun datar Persegi Panjang
 *
 * @param $panjang
 * @param $lebar
 *
 */
class PersegiPanjang extends bangun_datar {
    private float $panjang;
    private float $lebar;
    
    function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function luas(){
        echo "Luas ".get_class(). " : ".($this->panjang*$this->lebar). "\n";
    }

}




/**
 * Menghitung bangun datar Jajar Genjang
 *
 * @param $alas
 * @param $tinggi
 *
 */
class JajarGenjang extends bangun_datar {
    private float $alas;
    private float $tinggi;
    
    function __construct($alas,$tinggi){
        $this->tinggi = $tinggi;
        $this->alas = $alas;
    }
    function luas(){
        echo "Luas ".get_class(). " : ".($this->alas*$this->tinggi). "\n";
    }

}




/**
 * Menghitung bangun datar Lingkarang
 *
 * @param $jari2
 *
 */
class Lingkaran extends bangun_datar {
    private float $jari2;
    function __construct($jari2){
        $this->jari2 = $jari2;
    }
    function luas(){
        echo "Luas ". get_class(). " : ". (pi() * pow($this->jari2,2)). "\n";
    }

}

/**
 * Menghitung bangun datar segitiga
 *
 * @param $alas
 * @param $tinggi
 *
 */
class Segitiga extends bangun_datar {
    private float $tinggi;
    private float $alas;
    function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    function luas(){
        echo "Luas ". get_class(). " : ". (($this->alas * $this->tinggi) * .5). "\n";
    }
}

// alas = 4
// tinggi = 5 
$segitiga = new Segitiga(10,10);

// jari jari = 10
$lingkaran = new Lingkaran(10);

// sisi = 10
$persegi = new Persegi(10);

// panjang = 10
// lebar = 5
$persegi_panjang = new PersegiPanjang(10,5);

// panjang = 10
// lebar = 5
$jajargenjang = new JajarGenjang(20,2);


$segitiga->luas();
$lingkaran->luas();
$persegi->luas();
$persegi_panjang->luas();
$jajargenjang->luas();
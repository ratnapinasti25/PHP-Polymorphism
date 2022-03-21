<?php

interface Tanah
{
    public function hitungLuas();
}

abstract class Bibit
{
    abstract public function ditanami();
}

class Lingkaran extends Bibit implements Tanah
{
    private $jariJari;
    private $pi = 3.14;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return $this->jariJari * $this->jariJari * $this->pi;
    }

    public function ditanami() {
        return "ditanami Sawi";
    }
}

class PersegiPanjang extends Bibit implements Tanah {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function ditanami() {
        return "ditanami Kangkung";
    }
}

$tanahBudi = new Lingkaran(5);
$tanahWahyu = new PersegiPanjang(4,8);

echo "\n-----Data Kepemilikan Tanah-----\n\n";
echo "Tanah Budi seluas " . $tanahBudi->hitungLuas() . " m2\n";
echo $tanahBudi->ditanami() . "\n\n";
echo "Tanah Wahyu seluas " . $tanahWahyu->hitungLuas() . " m2\n";
echo $tanahWahyu->ditanami() . "\n\n";
?>
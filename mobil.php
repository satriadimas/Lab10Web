<?php 
/** program sederhana pendefinisian class dan pemanggilan class */

class mobil
{
  private $warna;
  private $merk;
  private $harga;

  public function __construct()
  {
    $this->warna = "biru";
    $this->merk = "BMW";
    $this->harga = "10000000";
  }

  public function gantiwarna ($warnaBaru)
  {
    $this->warna = $warnaBaru;
  }

  public function tampilWarna ()
  {
    echo "warna mobilnya : " . $this->warna;
  }
}

// membuat objek mobil
$a = new mobil();
$b = new mobil();

// memanggil objek 1
echo "<b>Mobil Pertama</b><br>";
$a->tampilWarna();

echo "<br>Mobil Pertama ganti warna<br>";
$a->gantiwarna("merah");
$a->tampilWarna();

// memanggil objek 2
echo "<br><b>Mobil kedua</b><br>";
$b->gantiwarna("hijau");
$b->tampilWarna();

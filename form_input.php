<?php

/**
 * Program memanfaatkan program 10.2 untuk membuat form inputan sederhana.
 */

include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "input form");
$form->addField("txtnim", "NIM");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";

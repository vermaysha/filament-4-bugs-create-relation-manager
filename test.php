<?php

class Pelanggan
{
    public function getNama()
    {
        return "Budi Santoso";
    }

    public function getEmail()
    {
        return "budi@example.com";
    }
}

$pelanggan = new Pelanggan();

// Nama method disimpan dalam variabel
$namaMethod = "getNama";

// Memanggil method secara dinamis
echo $pelanggan->$namaMethod(); // Output: Budi Santoso

echo "\n";

$namaMethod2 = "getEmail";
echo $pelanggan->$namaMethod2(); // Output: budi@example.com

?>

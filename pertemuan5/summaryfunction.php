<?php
/*

Belajar Fungsi / Functional dalam PHP 
- Function adalah kode program yang di buat khusus untuk mempersingkat
sebuah akssi yang ingin di lakukan di dalam sebuah penulisan kode program. 
- Function dapat di panggil berkali-kali untuk melakukan tugas tertentu.
misal. print () , var_dump(), dll.
- FUnction juga dapat kita buat sendiri untuk melakukan sebuah aksi.
- Penulisan : function nama_fungsi() {instruksi kita....}

*/

//membuat fungsi / function
    function perkenalan(){
        echo "Assalamualaikum, <br>";
        echo "Perkenalan, nama saya Amelia Cahyani <br>";
        echo "<hr>";
    }

//memnanggil fungsi yang sudah dibuat 
    perkenalan();

//memanggil kembali fungsi 
    perkenalan();

//menggunakan parameter untuk memasukkan sebuah nilai ke dalam function
    function pesan($salam, $nama)
    {
        echo $salam . ", <br>";
        echo "Perkenalan, nama saya" . $nama . " <br>";
        echo "<hr>";
    }

    pesan("Hai", " Amel");

    $salam = "Selamat pagi";
    $nama = " Amelia Cahyani";
    pesan($salam, $nama);

//mengembalikan nilai dengan return
    function hitungUmur($thn_Lahir)
    {
    $umur = date ('Y') - $thn_Lahir;
    return $umur;
    }

    echo "Umur saya adalah " . hitungUmur(2007) . " tahun";
    echo "<hr>";

//memanggil function dalam function 
    function biodata($nama, $gender, $tahun_lahir)
    {
        echo "Nama :". $nama ."<br>";
        echo "Gender :". $gender . "<br>";
        //memanggil fungsi lain 
        echo "Umur : " . hitungUmur($tahun_lahir)." tahun <br>";
        echo "<hr>";
    }

    biodata("Amelia Cahyani", "Perempuan", 2007);
    biodata("Davin Kurniawan", "Laki-laki", 2010);

?>
<?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
    }
    echo "<br>";
    for ($i=10; $i >= 0; $i--) { 
        echo $i;
    }
    echo "<br>";
    $ganjil=7%2;
    echo $ganjil;

    echo"<br>";
    for ($i=1; $i < 100; $i++) { 
        $ganjil=$i % 2;
        // echo $ganjil;
        if ($ganjil==0) {
            echo $i;
        }
    }
    echo "<br>";
    $kkm = 80;
    $nilai = 90;
    if ($nilai > $kkm) {
        echo "Lulus";
    }
    else{
        echo "tidak lulus";
    }

    echo "<br>";
    $status = "tidak lulus";
    if ($nilai > $kkm) {
        $status = "lulus";
    }
    echo $status;

    echo "<br>";
    $raport = 0;
    $tugas = 1;
    if ($tugas == 1) {
        $raport = 80;
        
    }
    echo $raport;
    echo "<br>";

    $bulan = 1; 
    $tanggal = 19; 
    $tanggal1 = 30;
    $keterangan = "salah";
    if ($bulan > 0 && $bulan < 13) { 
        $keterangan = "benar";
        if ($tanggal > 0 && $tanggal <   32) {
             $keterangan = "benar";
            if ($bulan == 1 && $tanggal > 0 && $tanggal <20 ) {
                $keterangan = "aquarius";
            }
            if ($bulan == 1 && $tanggal1 > 19 && $tanggal1 < 32) {
                $keterangan1 = "capricon";
            }
    }
}
    echo $keterangan;
    echo "<br>";
    echo $keterangan1;
        
    
?>
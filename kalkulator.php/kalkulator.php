<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Mas Saka sederhana</title>
</head>
<body>
    <h2>Kalkulator Mas Saka sederhana</h2>
    <form method="post">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        <br><br>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <br><br>
        <select name="operasi" required>
            <option value="tambah">Penjumlahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (*)</option>
            <option value="bagi">Pembagian (/)</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch($operasi){
            case 'tambah':
                $hasil = $angka1 + $angka2;
                echo "<h3>Hasil: $angka1 + $angka2 = $hasil</h3>";
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                echo "<h3>Hasil: $angka1 - $angka2 = $hasil</h3>";
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                echo "<h3>Hasil: $angka1 * $angka2 = $hasil</h3>";
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                    echo "<h3>Hasil: $angka1 / $angka2 = $hasil</h3>";
                } else {
                    echo "<h3>Error: Pembagian dengan nol tidak diperbolehkan!</h3>";
                }
                break;
            default:
                echo "<h3>Operasi tidak valid.</h3>";
                break;
        }
    }
    ?>
</body>
</html>
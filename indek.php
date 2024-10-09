<?php
    $hasilOperasi = 0;
    $hasilPenjumlahan = 0;
    
    if (isset($_POST['submit'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        // Penjumlahan
        $hasilPenjumlahan = $angka1 + $angka2;

        // Operasi sesuai tombol yang diklik
        if ($_POST['submit'] == 'Tambah') {
            $hasilOperasi = $angka1 + $angka2;
        } elseif ($_POST['submit'] == 'Kurang') {
            $hasilOperasi = $angka1 - $angka2;
        } elseif ($_POST['submit'] == 'Kali') {
            $hasilOperasi = $angka1 * $angka2;
        } elseif ($_POST['submit'] == 'Bagi') {
            if ($angka2 != 0) {
                $hasilOperasi = $angka1 / $angka2;
            } else {
                $hasilOperasi = 'Tidak bisa dibagi nol';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 320px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .hasil {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .input-group {
            text-align: center;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 140px;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        table tr td {
            text-align: center;
        }
        button {
            width: 70px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kalkulator<h1>
    <form method="post" action="">
        <div class="hasil">
            <p>Hasil 1: <strong><?php echo $hasilOperasi; ?></strong></p>
            <p>Hasil 2 (Penjumlahan): <strong><?php echo $hasilPenjumlahan; ?></strong></p>
        </div>

        <div class="input-group">
            <input type="number" name="angka1" placeholder="Angka 1" required>
            <input type="number" name="angka2" placeholder="Angka 2" required>
        </div>

        <table>
            <tr>
                <td><button type="submit" name="submit" value="Tambah">Tambah</button></td>
                <td><button type="submit" name="submit" value="Kurang">Kurang</button></td>
                <td><button type="submit" name="submit" value="Kali">Kali</button></td>
                <td><button type="submit" name="submit" value="Bagi">Bagi</button></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>
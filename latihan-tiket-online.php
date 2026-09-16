<?php
$nama = "Dzmar Rauhillah";
$kode = "GRD";
$kelas = "Eksekutif";
$jumlah = 2;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tiket Online Jakarta - Malaysia</title>
    <style>
        body {
            font-family: "Courier New", monospace;
            font-size: 13px;
        }

        .kotak {
            width: 250px;
            height: 165px;
            border: 1px solid #4d86d9;
            margin: 16px auto;
            padding: 10px 20px;
        }

        .judul {
            text-align: center;
            font-weight: bold;
            margin-bottom: 48px;
        }

        .baris {
            display: flex;
            align-items: flex-start;
            margin: 0;
        }

        .label {
            width: 108px;
        }

        .kelas {
            margin-left: 108px;
        }

        .tombol {
            margin-top: 8px;
        }

        input[type="text"] {
            width: 98px;
            height: 17px;
            box-sizing: border-box;
        }

        select {
            font-family: "Courier New", monospace;
            font-size: 13px;
            height: 19px;
        }

        button {
            font-size: 11px;
            padding: 2px 10px;
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="kotak">
    <div class="judul">TIKET ONLINE JAKARTA - MALAYSIA</div>

    <form>
        <div class="baris">
            <div class="label">Nama</div>
            <input type="text" value="<?= $nama ?>">
        </div>

        <div class="baris">
            <div class="label">Pilih Kode<br>Pesawat</div>
            <select>
                <option selected>GRD</option>
                <option>MPT</option>
                <option>BTV</option>
            </select>
        </div>

        <div class="baris">
            <div class="label">Pilih Kelas</div>
        </div>

        <div class="kelas">
            <label><input type="radio" name="kelas" checked>Eksekutif</label><br>
            <label><input type="radio" name="kelas">Bisnis</label><br>
            <label><input type="radio" name="kelas">Ekonomi</label>
        </div>

        <div class="baris">
            <div class="label">Jumlah Tiket</div>
            <select>
                <option>1</option>
                <option selected>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class="tombol">
            <button type="button">SIMPAN</button>
            <button type="button">BATAL</button>
        </div>
    </form>
</div>

</body>
</html>

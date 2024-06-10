<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("expires: 0");
?>

<h3>
    <center>Laporan Data Buku Perpustakaan Online</center>
</h3>
<br>
<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Penerbit</th>
            <th>ISBN</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $genap = "#CCCCCC";
        $ganjil = "#FFFFFF";
        $no = 1;
        foreach ($buku as $b) {
            if ($no % 2 == 0) {
                $warna = $genap;
            } else {
                $warna = $ganjil;
            }
            echo "<tr bgcolor = '$warna'>";
        ?>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $b['judul_buku']; ?></td>
            <td><?= $b['pengarang']; ?></td>
            <td><?= $b['penerbit']; ?></td>
            <td><?= $b['tahun_terbit']; ?></td>
            <td><?= $b['isbn']; ?></td>
            <td><?= $b['stok']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    <?php
    $tglcetak = date('Y-m-d');
    echo "<br>";
    echo "<div align='right'> Tanggal Cetak : $tglcetak</div>";
    ?>
</table>
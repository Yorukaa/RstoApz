<?php
    $aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
    if($aksi=='bayar'){
        extract($_POST);
        $pajak = $total * 11/100;
        $diskon = 0;
        $kembalian = intval($bayar) - intval($total);
        $update = $dbo->update("tblorder","total=$total, diskon=$diskon, pajak=$pajak, bayar='$bayar', kembali=$kembalian","idorder=".$_GET['idorder']);
        if($update){
            ?>
            <script>
                alert('Pembayaran Berhasil');
                location.href='?hal=transaksi';
            </script>
            <?php
        }
    }
?>
<div class="judul">
    <div class="keterangan">Pembayaran</div>
</div>
<?php
if($id==""){
    header('location:?hal=transaksi');
}
?>
<div class="data">
    <table style="width:60%; margin:auto; margin-top:100px" cellspacing="0" cellpadding="0">
    <tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Sub Total</th>
    </tr>
    <?php
    $datamenu = $dbo->select("tblorderdetail a, tblmenu b where a.idmenu = b.idmenu","a.*,b.nama_menu");
    $no=1;
    $total=0;
    foreach($datamenu as $row){
        $total += $row['harga']*$row['jumlah'];
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['nama_menu']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['harga']*$row['jumlah']?></td>
        </tr>
        <?php
    }
    ?>
    <form method="post" action="?hal=bayar&aksi=bayar&idorder=<?=$id?>">


    <tr>
        <td colspan="4">Total</td>
        <td>
            <input type="hidden" name="total" id="total" value="<?=$total?>">
        </td>
    </tr>

    <tr>
        <td colspan="4">Uang Bayar</td>
        <td>
            <input type="number" name="bayar" id="bayar">
        </td>
    </tr>

    <tr>
        <td colspan="4">Kembali</td>
        <td>
            <input type="number" name="kembali" id="kembali">
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <button type="submit" name="bayar">Bayar</button>
            <button onclick="history.back();">Batal</button>
        </td>
        <td>

        </td>
    </tr>
    </form>
    </table>
</div>
<?php
    if(isset($_POST['simpan'])){
        extract($_POST);
        $ins = $dbo->insert("tblkategori","null,'$kategori'");
        if($ins){
            ?>
                <script>
                    alert('Simpan Berhasil !');
                    location.href='?hal=kategori';
                </script>
            <?php
        }
    }
?>
<div class="judul">
    <a href="?hal=kategori" class="btn-add"><i class="fa fa-list"></i> Lihat Data Data</a>
    <div class="keterangan">Data Kategori</div>
</div>
<div class="data-input">
    <form action="?hal=add_kategori" method="post">
    <table>
    <tr>
        <td>Nama Kategori</td>
        <td>:</td>
        <td>
            <input type="text" name="kategori" placeholder="Nama Kategori" required>
        </td>
    </tr>
    <tr>
        <td>
            <button class="btn-add" type="submit" name="simpan" value="simpan"><i class="fa fa-save"></i> Simpan</button>
        </td>
    </tr>
    </table>
    </form>
</div>
<?php
    if($id != ""){
        $sel = $dbo->select("tblkategori where idkategori=$id");
        foreach($sel as $data){
            $kategori = $data['kategori'];
            $idkategori = $data['idkategori'];
        }
    }
    if(isset($_POST['simpan'])){
        extract($_POST);
        $up = $dbo->update('tblkategori', "kategori='$kategori'", "idkategori=$idkategori");
        if($up){
            ?>
            <script>
                    alert('Update Berhasil !');
                    location.href='?hal=kategori';
            </script>
        <?php
        }
    }
?>
<div class="judul">
    <a href="?hal=kategori" class="btn-add"><i class="fa fa-list"></i> Lihat Data Data</a>
    <div class="keterangan">Edit Kategori</div>
</div>
<div class="data-input">
    <form action="?hal=edit_kategori" method="post">
    <table>
        <input type="hidden" name="idkategori" value="<?=$idkategori?>">
    <tr>
        <td>Nama Kategori</td>
        <td>:</td>
        <td>
            <input type="text" value="<?=$kategori?>" name="kategori" placeholder="Nama Kategori" required>
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
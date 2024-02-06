<?php
    if($id != ""){
        $del = $dbo->delete("tblmenu", "idmenu=$id");
        if($del){
            ?>
                <script>
                    alert('Hapus Berhasil ! ')
                    location.href='?hal=menu';
                </script>
            <?php 
        }
    }
?>
<div class="judul">
    <a href="?hal=add_menu"><i class="fa fa-plus"></i> Tambah Data</a>
    <div class="keterangan">Data Menu</div>
</div>
<div class="data">
    <table cellspacing="0" cellpadding="0">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama Menu</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        <?php
            $no=1;
            $data = $dbo->select("tblmenu a, tblkategori b where a.idkategori=b.idkategori","a.*, b.kategori");
            foreach($data as $row){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$row['kategori']?></td>
                    <td><?=$row['nama_menu']?></td>
                    <td><?=$row['deskripsi']?></td>
                    <td><?=$row['harga']?></td>
                    <td>
                        <img src="../img/<?=$row['foto']?>" alt="" width="100" height="100">
                    </td>
                    <td>
                        <a class="btn-edit" href="?hal=edit_menu&id=<?=$row['idmenu']?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <a class="btn-hapus" href="?hal=menu&id=<?=$row['idmenu']?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</div>
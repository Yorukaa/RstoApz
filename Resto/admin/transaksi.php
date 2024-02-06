<div class="judul">
    <div class="keterangan">Data Transaksi</div>
</div>
<div class="data">
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama pelanggan</th>
            <th>total bayar</th>
            <th>status</th>
        </tr>
        <?php
            $no=1;
            $data= $dbo->select("tblorder a, tblpelanggan b where a.idpelanggan = b.idpelanggan","a.*, b.nama_pelanggan");
            foreach($data as $row){
                $datatotal = $dbo->select("tblorderdetail where idorder= ".$row['idorder']);
                $total = 0;
                foreach($datatotal as $rowtotal){
                    $total += $rowtotal['jumlah'] * $rowtotal['harga'];
                }
                ?>
                  <tr>
                      <td><?=$no++?></td>
                      <td><?=$row['tglorder']?></td>
                      <td><?=$row['nama_pelanggan']?></td>
                      <td><?=$total?></td>
                      <td>
                         <?php
                           if($row['total']==null){
                              echo "<a href='?hal=bayar&id=$row[idorder]'>Bayar</>";
                           }else{
                            echo"Lunas";
                           }
                         ?>
                      </td>
                  </tr>
                <?php
            }
        ?>
    </table>
</div>  
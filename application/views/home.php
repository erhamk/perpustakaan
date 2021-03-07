<div class="content-wrapper">
<table border="1">
      <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Penerbit</th>
      </tr>
      <tr>
      <?php foreach ($buku as $bk): ?>
      <tr>
        <td><?php echo $bk->judul; ?></td>
        <td><?php echo $bk->kategori; ?></td>
        <td><?php echo $bk->pengarang; ?></td>
        <td><?php echo $bk->tahun; ?></td>
        <td><?php echo $bk->penerbit; ?></td>
      </tr>
      <?php endforeach;?> 
  </table>
  </div>
<div class="content-wrapper">
<h1></h1>
<div class="container mt-4">
<div class="card bg-dark">
<div class="card-body">

<table class="table table-datatable">
      <thead>
      <tr>
      
      <th>no</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Penerbit</th>
      </tr>
      </thead>
      <tbody>
      
      <?php
      $i = 1;
      foreach ($buku as $bk): ?>
      <tr>
      <td><?=$i++?></td>
        <td><?php echo $bk->judul; ?></td>
        <td><?php echo $bk->kategori; ?></td>
        <td><?php echo $bk->pengarang; ?></td>
        <td><?php echo $bk->tahun; ?></td>
        <td><?php echo $bk->penerbit; ?></td>
      </tr>
      <?php endforeach;?> 
      </tbody>
  </table>
</div>
</div>
</div>
  </div>
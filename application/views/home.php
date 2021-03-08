<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan</title>
</head>
<body>
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
  
</body>
</html>
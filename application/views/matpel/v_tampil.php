<html>
  <head>
    <title>Data Mata Pelajaran User</title>
  </head>
  <body>
    <h1>Data Mata Pelajaran User Terdaftar</h1>
    <hr>
    <table border="1" cellpadding="7">
      <tr>
        <th>No</th>
		<th>ID</th>
        <th>Nama Mata Pelajaran</th>
        <th>Tinggat</th>
        <th>Jenis Kelas</th>
        <th>Dari Tanggal</th>
        <th>Sampail Tanggal</th>
      </tr>
      <?php
		$no = 1;
        foreach($matpel as $m){
      ?>  
	  <tr>
		  <td><?php echo $no++ ?></td>
          <td><?php echo $m->id_user?></td>
          <td><?php echo $m->pelajaran?></td>
          <td><?php echo $m->tingkat?></td>
          <td><?php echo $m->kelas?></td>
          <td><?php echo $m->dari_tgl?></td>
          <td><?php echo $m->sampai_tgl?></td>
      </tr>
      <?php }?>
    </table>
  </body>
</html>
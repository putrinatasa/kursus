<html>
  <head>
    <title>Data User</title>
  </head>
  <body>
    <h1>Data Mata Pelajaran User</h1>
    <hr>
    <table border="1" cellpadding="7">
      <tr>
        <th>ID User</th>
        <th>Nama Mata Pelajaran</th>
        <th>Tingkat</th>
        <th>Kelas</th>
        <th>Dari Tanggal</th>
		<th>Sampai Tanggal</th>
      </tr>
      <?php
      if( ! empty($data_user)){
        foreach($data_user as $d){
          echo "<tr>
          <td>".$d->id."</td>
		  <td>".$d->matpel."</td>
          <td>".$d->tingkat."</td>
          <td>".$d->kelas."</td>
          <td>".$d->dari_tgl."</td>
          <td>".$d->sampai_tgl."</td>
          </tr>";
        }
      }else{
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>
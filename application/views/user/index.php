<html>
  <head>
    <title>Data User</title>
  </head>
  <body>
    <h1>Data User Terdaftar</h1>
    <hr>
    <td><a href='<?php echo base_url("user/tambah"); ?>'><input type="button" value="Tambah User"></a></td>
    <td><a href='<?php echo base_url("user/tambahmatpel");?>'><input type="button" value="Tambah Mata Pelajaran"></a></td>
    <td><a href='<?php echo base_url("user/tampil"); ?>'><input type="button" value="Liat Data User"></a></td><br><br>
	<table border="1" cellpadding="7">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th colspan="3">Aksi</th>
      </tr>
      <?php
      if( ! empty($user)){
        foreach($user as $data){
          echo "<tr>
          <td>".$data->id."</td>
          <td>".$data->nama."</td>
          <td>".$data->alamat."</td>
          <td>".$data->telepon."</td>
          <td>".$data->email."</td>
          <td><a href='".base_url("user/ubah/".$data->id)."'>Ubah</a></td>
          <td><a href='".base_url("user/hapus/".$data->id)."'>Hapus</a></td>
          </tr>";
        }
      }else{
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Data User</title>
  <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
  <div class="row">
   <div style="width:600px;margin:50px;">
    <h4>Data User</h4>
    <table class="table table-striped table-bordered">
     <tr><td><strong>Id User</strong></td><td><strong>Nama</strong></td><td><strong>Mata Pelajaran</strong></td><td><strong>Tingkat Kelas</strong></td><td><strong>Jenis Kelas</strong></td><td><strong>Dari Tanggal</strong></td><td><strong>Sampai Tanggal</strong></td></tr> 
     <?php foreach($datauser as $da){?>
     <tr><td><?=$da->id;?></td><td><?=$da->nama;?></td><td><?=$da->pelajaran;?></td><td><?=$da->tingkat;?></td><td><?=$da->kelas;?></td><td><?=$da->dari_tgl;?></td><td><?=$da->sampai_tgl;?></td></tr>     
        <?php }?>  
    </table>
   </div> 
  </div> 
 </body>
</html>

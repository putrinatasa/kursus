<html>
  <head>
    <title>Form Ubah</title>
  </head>
  <body>
    <h1>Form Ubah Data User</h1>
    <hr>

    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("user/ubah/".$user->id); ?>
      <table cellpadding="8">
        <tr>
          <td>ID</td>
          <td><input type="text" name="input_id" value="<?php echo set_value('input_id', $user->id); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $user->nama); ?>"></td>
        </tr>
         <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat', $user->alamat); ?></textarea></td>
        </tr>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp', $user->telepon); ?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="input_email" value="<?php echo set_value('input_email', $user->email); ?>"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>

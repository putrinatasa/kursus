<html>
<head>
    <title>Form Input</title>
</head>
<body>
	<center>
		<h1>Form Tambah User Baru</h1>
		<hr>
		
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		
		<?php echo form_open('user/tambah'); ?>
		
		<table cellpadding="8">
			<tr>
				<td>ID</td>
				<td><input type="int" name="input_id" value="<?php echo set_value('input_id'); ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="input_alamat" value="<?php echo set_value('input_alamat'); ?>"></textarea></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="input_telp" value="<?php echo set_value('input_telp'); ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="input_email" value="<?php echo set_value('input_email'); ?>"></td>
			</tr>
		</hr>
		<td><input type="submit" name="submit" value="Simpan"></td>
		<td><a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a></td>
		
		<?php echo form_close(); ?>
</body>

</html>

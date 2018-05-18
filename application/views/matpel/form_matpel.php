<html>
<head>
    <title>Form Input Mata Pelajaran</title>
</head>
<body>
	<center>
		<h1>Form Tambah Mata Pelajaran User Baru</h1>
		<hr>
		
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		
		<?php echo form_open('user/tambahdata'); ?>
		
		<table cellpadding="8">
			<tr>
				<td>ID User</td>
				<td><input type="int" name="input_id_user" value="<?php echo set_value('input_id_user'); ?>"></td>
			</tr>
			<tr>
				<td>Nama Mata Pelajaran</td>
				<td><input type="text" name="input_pelajaran" value="<?php echo set_value('input_pelajaran'); ?>"></td>
			</tr>
			<tr>
				<td>Kelas Tinggkat</td>
				<td><input type="text" name="input_tingkat" value="<?php echo set_value('input_tingkat'); ?>"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelas</td>
				<td><input type="text" name="input_kelas" value="<?php echo set_value('input_kelas'); ?>"></td>
			</tr>
			<tr>
				<td>Dari Tanggal</td>
				<td><input type="date" name="input_datgl" value="<?php echo set_value('input_datgl'); ?>"></td>
			</tr>
			<tr>
				<td>Sampai Tanggal</td>
				<td><input type="date" name="input_satgl" value="<?php echo set_value('input_satgl'); ?>"></td>
			</tr>
		</hr>
		<input type="submit" name="submit" value="Simpan">
		<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		
		<?php echo form_close(); ?>
</body>

</html>
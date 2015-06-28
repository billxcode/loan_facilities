
<form method="post" action="../database/data_add_user.php">
<table>
	<tr><td>Nama</td><td>:  <input type="text" name="namalengkap" placeholder="Nama Lengkap" value="<?php echo selecting("nama_lengkap"); ?>"></td><td><input name="tanggal"type="text" type="date" id="datepicker" value="<?php echo selecting("tanggal"); ?>"></td></tr>
	<tr><td>Username</td><td>:  <input type="text" name="username" placeholder="username" value="<?php echo selecting("username"); ?>"></td><td rowspan="4"><textarea name="deskripsi" rows="10" cols="60"><?php echo selecting("deskripsi");?></textarea></td></tr>
	<tr><td>Password</td><td>:  <input type="password" name="password" placeholder="password" value="<?php echo selecting("password");?>"></td></tr>
	<tr><td>E-Mail</td><td>:  <input type="text" name="email" placeholder="E-Mail" value="<?php echo selecting("email"); ?>"></td></tr>
	<tr><td>Photo</td><td>:  <input type="file" name="photo" placeholder="Max 2MB"></td></tr>
	<tr><td colspan="2" align="center"><button type="submit" class="btn">Save</button><button type="reset" class="btn">Reset</button></td></tr>

</table>

</form>
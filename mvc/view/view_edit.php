<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				
				<tr >
					<td align="center">Genre film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="gr[]" value="horror" <?php  if(in_array("horror",$genre)){echo "checked";}?>/>horror <br>
						<input type="checkbox" name="gr[]"  value="action" <?php  if(in_array("action",$genre)){echo "checked";}?>/>action <br>
						<input type="checkbox" name="gr[]"  value="anime" <?php  if(in_array("anime",$genre)){echo "checked";}?>/>anime <br>
						<input type="checkbox" name="gr[]"  value="thriller" <?php  if(in_array("thriller",$genre)){echo "checked";}?>/>thriller <br>
						<input type="checkbox" name="gr[]"  value="animasi" <?php  if(in_array("animasi",$genre)){echo "checked";}?>/>animasi <br>
					</td>
				</tr>
				<tr >
					<td align="center">Tujuan travel</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="tr[]"  value="Bali" <?php  if(in_array("Bali",$wisata)){echo "checked";}?>/>Bali <br>
						<input type="checkbox" name="tr[]"  value="Raja ampat" <?php  if(in_array("Raja ampat",$wisata)){echo "checked";}?>/>Raja ampat <br>
						<input type="checkbox" name="tr[]"  value="Pulau Derawan" <?php  if(in_array("Pulau Derawan",$wisata)){echo "checked";}?>/>Pulau Derawan <br>
						<input type="checkbox" name="tr[]"  value="Bangka belitung" <?php  if(in_array("Bangka belitung",$wisata)){echo "checked";}?>/>Bangka belitung <br>
						<input type="checkbox" name="tr[]"  value="Labuan bajo" <?php  if(in_array("Labuan bajo",$wisata)){echo "checked";}?>/>Labuan bajo <br>

					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();
		//panggil controller update
	}
?>
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
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr >
					<td align="center">Genre film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="gr[]" value="horror"/>horror <br>
						<input type="checkbox" name="gr[]"  value="action"/>action <br>
						<input type="checkbox" name="gr[]"  value="anime"/>anime <br>
						<input type="checkbox" name="gr[]"  value="thriller"/>thriller <br>
						<input type="checkbox" name="gr[]"  value="animasi"/>animasi <br>
					</td>
				</tr>
				<tr >
					<td align="center">Tujuan travel</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="tr[]"  value="Bali"/>Bali <br>
						<input type="checkbox" name="tr[]"  value="Raja ampat"/>Raja ampat <br>
						<input type="checkbox" name="tr[]"  value="Pulau Derawan"/>Pulau Derawan <br>
						<input type="checkbox" name="tr[]"  value="Bangka belitung"/>Bangka belitung <br>
						<input type="checkbox" name="tr[]"  value="Labuan bajo"/>Labuan bajo <br>

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
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
		//panggil controller insert
	}
?>
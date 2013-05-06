<?php


			<br><br><h2 align='center'><br>Input Data Calon Pasien</h2><br><br>
			<p align="center">
			<form name="form1" method="post" action="inputsiswa.php">		
				<table>
					<tr><td><input type="hidden" name="id_siswa" size="5"/></td></tr>
					<tr><td>Nama Siswa</td><td><input type="text" name="nama_siswa" size="20"/></td></tr>				
					<tr><td>No. Hp</td><td><input type="text" name="phone" size="20"></td></tr>
					<tr><td>Kampus</td><td><input type="text" name="kampus" size="20"></td></tr>
					<tr><td>Tanggal Daftar</td><td><input type="text" name="tgl_daftar" id="tanggal"></td></tr>
					
					<tr><td>Id Person</td><td>
				<SELECT name="id_person">				
				$person=mysql_query("SELECT * FROM tb_person where id_person=1 || id_person=2");
				
				while($data=mysql_fetch_array($person)){
					echo "<option value=\"$data[id_person]\">$data[jenis_person]</option>";}
						</select></td></tr>
				<tr><td></td>
			<td><input value="Save" name="submit" type="submit" /> 
				<input value="Reset" type="reset" />
				<input value="Back" type="button"  onClick="self.history.back()">
			</td>
		</tr>
		
        </table>
		</form>
			</p>	
			
?>
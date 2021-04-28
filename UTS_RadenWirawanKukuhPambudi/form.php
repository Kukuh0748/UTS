<!DOCTYPE HTML>
<html>
  <head>
    <title>Form Tambah Data</title>
  </head>
  <body>
 
    <form name="form1" method="post" action="proses.php">
    <table width="580" border="0" align="center">
      <tr>
        <td colspan="3"><h3>Form Isian Data Pemantauan Covid-19</h3></td>
      </tr>
      <tr>
        <td width="250">Nama Wilayah</td>
        <td>:</td>
        <td width="530"><select name="cmb_wil" id="cmb_wil">
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Banten">Banten</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td>:</td>
        <td><input size="30" name="jml_pos" type="text" id="jml_pos" ></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td>:</td>
        <td><input size="30" name="jml_dir" type="text" id="jml_dir" ></td>
      </tr>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td>:</td>
        <td><input size="30" name="jml_sem" type="text" id="jml_sem" ></td>
      </tr>
 
      <tr>
        <td>Jumlah Meninggal</td>
        <td>:</td>
        <td><input size="30" name="jml_men" type="text" id="jml_men" ></td>
      </tr>

      <tr>
        <td>Nama Operator</td>
        <td>:</td>
        <td><input size="30" name="nm_op" type="text" id="nm_op" ></td>
      </tr>
      <tr>
        <td>NIM Mahasiswa</td>
        <td>:</td>
        <td><input size="30" name="nim" type="number" min="0" id="nim" ></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td align="center"><input name="Submit" type="submit" value="Simpan"></td>
      </tr>
      
    </table>
    </form>
    <table table width="580" border="0" align="center">
      <tr>
        <td colspan="3"><a href="index.php"><button value="Lihat">Lihat Data</button></a></br></td>
      </tr>
    </table>
 
  </body>
</html>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Membaca data.txt</title>
  </head>
  <body>
   
  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  echo '<center><h3>Data Pemantauan Covid 19 di Indonesia</h3></center>';
  echo '<center><a href="form.php"><button value="tambah">Tambah Data</button></a></center></br></br>';
 
  $i=1;

  foreach($rows as $row => $data)
  {

        
        $row_data = explode('|', $data);
        date_default_timezone_set('Asia/Jakarta');

        $info[$row]['cmb_wil']      = $row_data[0];
        $info[$row]['jml_pos']      = $row_data[1];
        $info[$row]['jml_dir']      = $row_data[2];
        $info[$row]['jml_sem']      = $row_data[3];
        $info[$row]['jml_men']      = $row_data[4];
        $info[$row]['nm_op']        = $row_data[5];
        $info[$row]['nim']          = $row_data[6];

        // Menampilkan Data
         echo ' <center>';
         echo '<table width="500">';
         echo '<tr>';
         echo '<td colspan="4" align="center">Data Pemantauan Covid19 Wilayah'. $info[$row]['cmb_wil']. '</td>';
         echo '</tr>';
         echo '<tr>';
         echo '<td colspan="4" align="center">Per '. date('d M Y H:i:s') . '</td>';
         echo '</tr>';
         echo '<tr>';
         echo '<td colspan="4" align="center">'. $info[$row]['nm_op'].' / '.$info[$row]['nim'].'</td>';
         echo '</tr>';
         echo '</table>';

         echo '<table border="1" width="500">';
         echo '<tr>';
         echo '<td> Positif </td> <td> Dirawat </td> <td> Sembuh </td> <td> Meninggal </td>';
         echo '</tr>';
         echo '<tr>';
         echo '<td> '. $info[$row]['jml_pos']. '</td> <td>' . $info[$row]['jml_dir']. '</td> <td> '. $info[$row]['jml_sem']. '</td> <td> '. $info[$row]['jml_men']. '</td>';
         echo '</tr>';
         echo '</table>';
         echo ' </center> </br></br>';
      
        

  }
  ?>

</body>
</html>
<?php
 
  // Menangkap isi variabel dari file yang telah diisi pada form.php
  date_default_timezone_set('Asia/Jakarta');
  $waktu = date('d F Y H:i:s'); 
  $cmb_wil = $_POST['cmb_wil'];
  $jml_pos = $_POST['jml_pos'];
  $jml_dir = $_POST['jml_dir'];
  $jml_sem = $_POST['jml_sem'];
  $jml_men = $_POST['jml_men'];
  $nm_op = $_POST['nm_op'];
  $nim = $_POST['nim'];
 
  // Format data yang akan di parsing

  $data = 
"              Data Pemantauan Covid19 Wilayah $cmb_wil
              Per $waktu
              $nm_op / $nim
--------------------------------------------------------------------------------------
Positif            | Dirawat             | Sembuh             | Meninggal            |
--------------------------------------------------------------------------------------
$jml_pos            | $jml_dir               | $jml_sem            | $jml_men                |
--------------------------------------------------------------------------------------";
          
 
  // Buka file data.txt, kemudian tuliskan isi variabel di atas kedalam data.txt
  $fh = fopen("data.txt", "a");
  fwrite($fh, $data);
 
  // Tutup file data.txt
  fclose($fh);
 
  // Keterangan bila data berhasil di input
  echo "<script>alert('Data Tersimpan');
        history.go(-1);</script>"; 
?>
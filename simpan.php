<?php  
include("hdr.html");

include("form.html");
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kota = $_POST['kota'];
    $nohp = $_POST['nohp'];
    $prodi = $_POST['prodi'];



	echo "<head><title>Isi Form</title></head>";
	$fp = fopen("data.txt", "a+");
	fputs($fp, "$nim|$nama|$kota|$nohp|$prodi\n");
	fclose($fp);
    echo "Terima Kasih Atas Partisipasi Anda Mengisi Form<br>";
    echo "<a href=form.html> Isi Buku form </a><br>"; 
include("ftr.html");
?>


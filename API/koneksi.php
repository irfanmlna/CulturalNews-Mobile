<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_uts");

if($koneksi){

} else {
	echo "gagal Connect";
}

?>
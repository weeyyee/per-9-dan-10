 <?php

include "../config/koneksi.php";

$ID = @$_POST['ID'];
$Nama_Barang = @$_POST['Nama_Barang'];
$Jumlah_Barang = @$_POST['Jumlah_Barang'];

$data = [];

$query = mysqli_query ($kon, "INSERT INTO barang(ID, Nama_Barang, Jumlah_Barang) 
VALUES ('$ID', '$Nama_Barang', '$Jumlah_Barang')");

if($query){
	$status = true;
	$pesan = "request success";
	$data[] = $query;
}else{
	$status = false;
	$pesan = "request failed";
}

$json = [
	"status" => $status,
	"pesan" => $pesan,
	"data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>
<?php 	
$koneksi=mysqli_connect("localhost","root",123,"db_webakhir");


 function querydata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
     $rows[] = $row;
    }
    return $rows;
}
$query=querydata("SELECT * FROM data_universitas");
$arrays=[];
foreach ($query as $data ) {
	$data=$data["nama_universitas"];
	 $arr='"'.$data.'",';
	 echo $arr;
	 

	


}

// var_dump($query["nama_universitas"]);    


 ?>

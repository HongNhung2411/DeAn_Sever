<?php
include "connect.php";
$str = $_POST['str'];
$mangsanpham = array();
$query = "SELECT * FROM sanpham WHERE tensanpham like '%$str%' ";
$data = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($data)) {
	array_push($mangsanpham, new Sanpham(
		$row['id'],
		$row['tensanpham'],
		$row['giasanpham'],
		$row['hinhanhsanpham'],
		$row['motasanpham'],
		$row['idsanpham']));
}
echo json_encode($mangsanpham);
class Sanpham{
	function Sanpham($id,$tensp,$giasp,$hinhanhsp,$motasp,$idsanpham){
		$this->id = $id;
		$this->tensp = $tensp;
		$this->giasp = $giasp;
		$this->hinhanhsp = $hinhanhsp;
		$this->motasp = $motasp;
		$this->idsanpham = $idsanpham;
	}
}
?>
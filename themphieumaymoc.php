<?php 
include ("dbconnection.php");
$con= dbconnection();


if(isset($_POST["ngaynhapphieu"]))
{
    $ngaynhapphieu=$_POST["ngaynhapphieu"];
}
else return;

$queryadd="INSERT INTO `phieumaymoc`(`ngayNhapPhieu`) VALUES ('$ngaynhapphieu')";
$exe = mysqli_query($con,$queryadd);

$arr=[];
if($exe){
    $arr["Success"]="true";
}
else{
    $arr["Success"]="false";
}
print(json_encode ($arr));
?>
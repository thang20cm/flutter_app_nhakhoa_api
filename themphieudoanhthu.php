<?php 
include ("dbconnection.php");
$con= dbconnection();


if(isset($_POST["ngaynhapphieu"]))
{
    $ngaynhapphieu=$_POST["ngaynhapphieu"];
}
else return;
if(isset($_POST["uid"]))
{
    $uid=$_POST["uid"];
}
else return;
if(isset($_POST["batdaugiolamviec"]))
{
    $batdaugiolamviec=$_POST["batdaugiolamviec"];
}
else return;
if(isset($_POST["ketthucgiolamviec"]))
{
    $ketthucgiolamviec=$_POST["ketthucgiolamviec"];
}
else return;



$queryadd="INSERT INTO `phieu_doanhthucongviec`(`ngayNhapPhieu`,`uid`,`Batdaugiolamviec`,`Ketthucgiolamviec`) VALUES ('$ngaynhapphieu','$uid','$batdaugiolamviec','$ketthucgiolamviec')";
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
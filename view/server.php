<?php
$con=mysqli_connect("localhost","root","","ecommerce") or die('Error');
//$sql="SELECT area FROM dhaka";
$sql="SELECT * FROM allproducts WHERE productname='$_GET[str]'";
$result=mysqli_query($con,$sql);
$arr=array();
$i=0;
while($row=mysqli_fetch_array($result)){
    $arr[$i]=$row['area'];
    $i++;
}

echo json_encode($arr);
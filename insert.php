<?php
$con=mysqli_connect('localhost','root',"",'laith');
if($con){
    echo"yes";
}
if(isset($_POST['po'])){
$la=$_POST['la'];
$no=$_POST['no'];
$ah=$_POST['ah'];
$mo=$_POST['mo'];
$insert=("INSERT INTO prod(name,password,email,phone)VALUES('$la','$no','$ah','$mo')");
mysqli_query($con,$insert);
















}
?>
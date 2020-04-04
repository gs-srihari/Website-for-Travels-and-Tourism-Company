<?php
$name=$_POST["name"];
$phone=$_POST["seats"];
$address=$_POST["rpd"];
$pass=$_POST["num"];
$f=fopen("car.csv","a+");
$list=array($name,$seats,$rpd,$pass,0);
fputcsv($f,$list);
echo "Succesfully Submitted Car details";
fclose($f);
echo "<script type=\"text/javascript\">
window.location.href='cda.php';
</script>";
?>

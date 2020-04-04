<html>

<?php
$name=$_POST["username"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];
$pass=$_POST["num"];
$f=fopen("driver.csv","a+");
$list=array($name,$phone,$address,$email,$pass);
fputcsv($f,$list);
echo "Succesfully Submitted driver details";
fclose($f);
echo "<script type=\"text/javascript\">
window.location.href='cda.php';
</script>";
?>
<body style="background-image:url('gbimg3.jpg'); color:white;">
</body>
</html>

<html>
<?php
$f=fopen('dcdate.csv','a');
$f1=fopen("drcar.csv","r");
while(($data=fgetcsv($f1,1000,","))!=FALSE)
{
	$dat1=$data;
}
$ij=0;
do
{
	array_push($dat1,'False');
	$ij+=1;
}while($ij<=38);	
fputcsv($f,$dat1);

fclose($f);
fclose($f1);
?>
<body style="background-image:url('gbimg3.jpg'); color:white;">
<p>
Driver allocated to Car Successfully<br>
<a href="ohome.html">Click here to Logout</a>
</body>
</html>


<html>
<?php

echo "<h1 style='background-color:green;'><p><a href='home.html'>Home</a><a href='book1.html'>Book Tour</a><a href='cancel1.php'>Cancel Tour</a><a href ='service.html'>Our Services</a><a href ='service.html'>Contact Details</a><a href ='ohome.html'>Logout</a></h1>";

$a1=$_POST["a"];
$a2=$_POST["b"];
$a3=$_POST["c"];
$a4=$_POST["d"];
$a5=$_POST["e"];
$a6=$_POST["f"];
$a7=$_POST["g"];
$arr=array($a1,$a2,$a3,$a4,$a5,$a6,$a7);

$f1=fopen("dcdate.csv","r");
$i=-1;
$lis=fgetcsv($f1,1000,",");
$fl1=$a6;
$f12=$a7;

$d3=date_create($a6);
$d4=date_create($a7);


$i=3;
$k=39;
$i2=0;
$i1=0;
while($i<=$k)
{
	$d=date_create($lis[$i]);
	if($d3==$d)
	{
  
		$i1=$i;
	}
	$i++;
}
$i=3;
$k=39;
while($i<=$k)
{
	$d=date_create($lis[$i]);
	if($d4==$d)
	{

		$i2=$i;
	}
	$i++;
}
$i3=0;
$fl=0;
$i7=0;
$temp=$i1;
$temp1="FALSE";
$temp2=$i2-$i1+1;
$temp3=$i2;
$temp4=$i1;
$tempk=array($temp3,$temp4);

$fk=0;
if($a5<=4)
	$fk=1;
else if($a5<=6)
	$fk=2;
else
	$fk=3;
if($fk==1)
{
while($lis1=fgetcsv($f1,1000,","))
{
  $i3++;
if($lis1[2]==4)
  {
	$i7=0;
	while($i1<=$i2)
	{
		
		if(strcmp($lis1[$i1],$temp1)==0)
		{
		$i7++;}
	    $i1++;
    } 
   
	if(($i2-$temp+1)==$i7)
	break;
    else
	$i1=$temp;
  }  
}
}
else if($fk==2)
{
while($lis1=fgetcsv($f1,1000,","))
{
  $i3++;
if($lis1[2]==6)
  {
	$i7=0;
	while($i1<=$i2)
	{
		if(strcmp($lis1[$i1],$temp1)==0)
		{
		$i7++;}
	    $i1++;
    } 
   
  
	if(($i2-$temp+1)==$i7)
	break;
    else
	$i1=$temp;
  }  
}	
}
else
{
while($lis1=fgetcsv($f1,1000,","))
{
  $i3++;
if($lis1[2]==15)
  {
	$i7=0;
	while($i1<=$i2)
	{
		
		if(strcmp($lis1[$i1],$temp1)==0)
		{
		$i7++;}
	    $i1++;
    } 
   
	if(($i2-$temp+1)==$i7)
	break;
    else
	$i1=$temp;
  }  
}	
}


fclose($f1);
$f2=fopen("dcdate.csv","r");
$f3=fopen("dd1.csv","w");
$i31=0;
while($lis1=fgetcsv($f2,1000,","))
{
	if($i31==$i3)
	{
		while($temp<=$i2)
	{
		$lis1[$temp]='TRUE';
		$temp++;
    } 
	}
	fputcsv($f3,$lis1);
	$i31+=1;
}
fclose($f2);
fclose($f3);
$f4=fopen("dcdate.csv","w");
$f5=fopen("dd1.csv","r");
while($lis1=fgetcsv($f5,1000,","))
{
	fputcsv($f4,$lis1);
}
fclose($f4);
fclose($f5);
$f6=fopen("dcdate.csv","r");
$f7=fopen("bookings.csv","a");

$i31=0;
$kkk=0;


$aa1=array($a1,$a2,$a3,$a4,$a5,$a6,$a7);
while($lis1=fgetcsv($f6,1000,","))
{
	$kk=array($lis1[0],$lis1[1],$lis1[2]);
	$val=$lis1[1];
	
	$f8=fopen("car.csv","r");
	while($lis2=fgetcsv($f8,1000,","))
	{
		
		if($lis2[0]==$lis1[1])
			break;
	}
	fclose($f8);
	array_push($kk,$lis2[2]*$temp2);
	
		
	if($i31==$i3)
	{ $kkk=array_merge($aa1,$kk);
    $f9=fopen("abc.csv","r");
	$lis3=fgetcsv($f9,1000,",");
	$lis3[0]=$lis3[0]+1;
	$kkk=array_merge($kkk,$lis3);
	$kkk=array_merge($kkk,$tempk);
	fclose($f9);
	$f9=fopen("abc.csv","w");
	fputcsv($f9,$lis3);
	fputcsv($f7,$kkk);
	break;}
   
	$i31++;
}
fclose($f6);
fclose($f7);
echo "<br>Booking Number : ".$kkk[11];
echo "<br>Name: ".$kkk[0];
echo "<br>Destination/Place to travel : ".$kkk[1]; 
echo "<br>Phone Number : ".$kkk[2];
echo "<br>Address : ".$kkk[3];
echo "<br>No of members to travel : ".$kkk[4];
echo "<br>Date(From) : ".$kkk[5];
echo "<br>Date(To) : ".$kkk[6];
echo "<br>Driver Name  : ".$kkk[7];
echo "<br>Car Name : ".$kkk[8];
echo "<br>No of seats : ".$kkk[9];
echo "<br>Cost of Travel : ".$kkk[10];
?>
<body style="background-image:url('gbimg3.jpg'); color:white;">
</body>
</html>

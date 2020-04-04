<html>
<?php
$name=$_POST["username"];
$pass=$_POST["pass"];
$flag=0;
$f=fopen("regist.csv","r");
while(($data=fgetcsv($f,1000,","))!=FALSE)
{
if(($data[0]==$name)&&($data[4]==$pass))
 {
  $flag=1;
 }
}
fclose($f);
 if($flag==1)
 {echo "<script type=\"text/javascript\">
window.location.href='home.html';
</script>";}
 else
 {
  echo "Unsuccesful Login";
 }
?>
<body style="background-image:url('gbimg3.jpg'); color:white;">
</body>
</html>

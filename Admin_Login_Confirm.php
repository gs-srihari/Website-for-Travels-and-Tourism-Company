<html>
<?php
$name=$_POST["username"];
$pass=$_POST["pass"];
$flag=0;
if(($name=="Admin")&&($pass=="Admin123"))
 {
  $flag=1;
 }
 if($flag==1)
 {echo "<script type='text/javascript'>
window.location.href='a.html';
</script>";}
 else
 {
  echo "Unsuccesful Login";
 }
?>
<body style="background-image:url('gbimg3.jpg'); color:white;">
</body>
</html>

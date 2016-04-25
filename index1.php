<!doctype html>
<html lang="en">	
	<meta charset="UTF-8">
	<title>lessons 2</title>
</head>
<body>

<?php

$a=2;
$A=null;
$b=3;
echo "<b>Hello world</b>";
echo"<hr>";
$sum=$a+$b;
echo $sum;
echo"<hr>";
$a=4.6;
$sum=$a+$b;
echo $sum,"<br>";
$sum=$sum +4;//$sum+=4;
echo $sum,"<br>";
$res=sqrt($sum);
echo $res,"<br>";
$round = round($res,  2);
echo $round,"<br>";
$floor=floor($res);
echo $floor,"<br>";
$ceil=ceil($res);
echo $ceil,"<br>";
echo"<hr>";
$str="это строка";
echo $str,"<br>";
$a=3;
$pow=4;
$res=pow($a,$pow);
echo "$a в $pow степени равно $res";
/*$a++;
$a--;
++$a;*/
echo ++$a,"<br>";
echo $a;
echo"<hr>";

define ('PI',3.14);
echo PI;



//это строчный коментарий
/* это блочный коментарий
*
*/
?>
</body>
</html>
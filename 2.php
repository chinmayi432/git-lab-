<?php
$number=25;
$guess=$number/2;
for($i=0;$i<10;$i++)
{
$guess=0.5*($guess+($number/$guess));
}
echo"The square root of $number=$guess";
?>

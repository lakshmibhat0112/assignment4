


<?php  
/* Print fiboancci series upto 12 elements. */  
$num = 12; 
 
echo "<h3>Fibonacci series using recursive function:</h3>";  
echo "\n";  
/* Recursive function for fibonacci series. */  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";

 
}
echo "\n";
echo "Prime numbers are: ";  
 for($i=1;$i<$num-1;$i++)
{
$a= prime($i);
echo "\n";
if($a==1)
{
	
	echo $i ; 
	echo "\n";
}
}
function prime($i)
{
for($n=2; $n<$i;$n++)
{
	if($i % $n==0)
	{
		return 0;
	}
}
return 1;
}



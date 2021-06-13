<html>
<head><title>fib_prime</title></head>
<style type="text/css">
body {
font-size:30px;
position: absolute;
top: 30%;
left: 30%;
background-color: grey;
color: white;
}
</style>
<body>
     <h3>
        Fibonacci Series and Prime Numbers
    </h3>
    <form method="post">
        <table border="0">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter the number"/>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
<?php   
    if($_POST)  
    {   
        $num = $_POST['num1'];
        $i = 3;
        $n1 = 0;  
        $n2 = 1;  
        $last = $n2;
        echo "Fibonacci series of number $num:";
	echo "</br>";  
        echo $n1.' '.$n2.' ';  
        while ($i <= $num )  
        {  
            $n3 = $n2 + $n1;  
            echo $n3.' ';  
            $n1 = $n2;  
            $n2 = $n3;  
            $i = $i + 1;  
            $last = $n2;

        } 

        //prime
        $count = 0; 
        $num1 = $_POST['num1']; 
        $num = 2;   
        $n1 = 1;
        $n2 = 1;  
        $n3 = 2;    
	echo "</br>";
        echo "Prime Numbers in the given fibonnaci series:";  
	echo "</br>";
while ($count < $last )  
{  
$div_count=0;  
while($num == $n3)
{
    if($last > 2){
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
} 
if ($div_count<3)  
{  
echo $num." , ";
} 
}
$n1=$n2;
$n2=$n3;
$n3 = $n1 + $n2;
} 
$num=$num+1;
$count =$count+1;
}  
    }    
?>
</body>
</html>



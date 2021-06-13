<html>
<head><title>Reverse Number</title></head>
<style type="text/css">
        body {
font-size:30px;
font-weight: bold;
position: absolute;
top: 30%;
left: 30%;
background-color: grey;
color: white;
}
</style>
<body>
    <form method="post">        
    Enter a Number: <input type="text" name="num"/><br>  <br>
      <button type="submit">Check</button>  
    </form> 

<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $ori_num = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The reverse Number of $ori_num is $rev_num";
        echo "</br>";
        echo "The sum of the digits of given number $ori_num is: $sum"; 
        echo "</br>";
        if($ori_num == $rev_num){  
            echo "The number $ori_num is Palindrome";     
        }else{  
            echo "The number $ori_num is not a Palindrome";   
        }  
}     
      ?> 
</body>
</html>



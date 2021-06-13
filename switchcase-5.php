<html>
<head><title>Using Switch case</title></head>
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
<h3>Arithmatic Operations</h3>
    <form method="post">
        <table border="0">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter 1st number"/>
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="opr" placeholder="Enter the arithmetic operator"/>
                </td>
            </tr>
            <tr>
            <td> <input type="text" name="num2"  placeholder="Enter 2nd number:"/>
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
 
if(isset($_POST['submit'])) {
 
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['opr'];
 
    echo "The first number is $a"; 
    echo "</br>";
    echo "The second number is $b"; 
    echo "</br>";

    switch($ch) {
        case '+':
            $r = $a + $b;
            echo " Addition of two numbers = " . $r ;
            break;
 
        case '-':
            $r = $a - $b;
            echo " Subtraction  of two numbers= " . $r ;
            break;
 
        case '*':
            $r = $a * $b;
            echo " Multiplication of two numbers = " . $r ;
            break;
 
        case '/':
            $r = $a / $b;
            echo " Division of two numbers = " . $r ;
            break;
 
        default:
            echo ("invalid option\n");
    }
}
?>
</body>
</html>
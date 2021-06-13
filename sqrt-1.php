<html>
<head><title>Random Number</title></head>
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
<h2><p>Random Number is : <?php
    $choice = rand(1, 100);
    echo $choice;
?> </p><p>Square root of <?php echo $choice ?> is : <?php
    echo round(sqrt($choice),3);
?> </p></h2>
</body>
</html>
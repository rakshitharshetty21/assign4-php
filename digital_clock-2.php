<html>
<head>
    <title>Digital Clock</title>
    <style type="text/css">
        p {
font-size:50px;
font-weight: bold;
position: absolute;
top: 30%;
left: 25%;
}
    </style>
</head>
<body style="background-color: grey;color: white;">
<p>
    The Current Time is :
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
    ?>.
</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .a{
            color: red;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            }   
    </style>
    <?php 
    $cd =5;
    $cr= 7;
    $dt =  $cd *$cr;
    echo "<p class ='a'> $dt</p>";
    $number = 7;
    switch ($number)
    {
        case 1:
            echo "Tết nội";
        break ;  
        case 2:
            echo "Tết ngoại";
        break ; 
        case 3:
            echo "Tết thầy";
        break ; 
        case 4:
            echo "tết ngta";
        break ; 
        case 5:
            echo "ngủ";
        break  ;
        case 6:
            echo "nhà";
        break  ;
        case 7:
            echo "Tết PNV";
        break ; 
    }
    ?>
</body>
</html>
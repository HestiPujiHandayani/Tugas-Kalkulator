<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
        $num=$_POST['input'].$_POST['num'] ;
    }

    else {
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                break;
                case "*":
                    $result=$_COOKIE['num']*$num;
                break;
                case "/":
                    $result=$_COOKIE['num']/$num;
                break;

        }
        $num=$result;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body{
            background-color: rgb(333, 333, 333);
        }
        .maininput {
            font-size: 100px;
            color: rgb(50, 50, 50);
            font-weight: 100;
        }
        .calc{
            margin: auto;
            background-color: rgb(222, 223, 224);
            border: 2px solid rgb(186, 74, 74);
            width: 28%;
            height: 500px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px palevioletred;
        }
        .maininput{
            background-color: rgb(240, 235, 230);
            border: 1px solid rgb(186, 74, 74);
            height: 90px;
            width: 98.2%;
        }
        .numbtn{
            padding: 32.5px 36.5px;
            border-radius: 32.5px;
            font-family: bold;
            font-weight: 100;
            background-color: rgb(150, 150, 150);
        }
        .numbtn:hover{
            background-color: rgb(240, 127, 146);
            color: whitesmoke;
        }
        .calbtn{
            padding: 32.5px 36.5px;
            border-radius: 32.5px;
            font-family: bold;
            font-weight: 100;
            background-color: rgb(220, 55, 150);
        }
        .calbtn:hover {
            background-color: rgb(100, 60, 98);
            color: whitesmoke;
        }
        .equal{
            padding: 32.5px 36.5px;
            border-radius: 32.5px;
            font-family: bold;
            font-weight: 100;
            background-color: rgb(232, 63, 149);
        }
        .equal:hover{
            background-color: rgb(211, 60, 190);
            color: whitesmoke;
        }
        .c{
            padding: 32.5px 36.5px;
            border-radius: 32.5px;
            font-family: bold;
            font-weight: 100;
            background-color: rgb(60, 60, 60);
        }
        .c:hover{
            background-color: rgb(150, 65, 60);
            color: whitesmoke;
        }
    </style>
</head>
<body>
	<div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num  ?>"><br> <br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"><br>
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="*"><br>
            <input type="submit" class="c" name="num" value="C">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="opl" value="/">






        </form>
    </div>
</body>
</html>
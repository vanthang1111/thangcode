<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 50%;
            margin: 0 auto;
            padding: 50px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

    <form action="" method="POST">
        <label for="numbera">Nhập a:</label>
        <input type="text" id="numbera" name="numbera" value="<?php $a = $_POST["numbera"]; echo $a; ?>">
        <label for="numberb">Nhap b:</label>
        <input type="text" id="numberb" name="numberb" value="<?php $b = $_POST["numberb"]; echo $b; ?>">
        <label for="ketqua">Kết quả:</label>
        <input type="text" id="ketqua" name="ketqua" disabled 
        value="<?php
            if (isset($_POST["numbera"]) && isset($_POST["numberb"])){
                $a = $_POST["numbera"];
                $b = $_POST["numberb"];
                if ($a == 0) {
                    echo "Số a phải khác 0";
                } else if ($b == 0) {
                    echo "Phương trình có vô số nghiệm";
                } else {
                echo -$b / $a;
                }
            }
        ?>">
        <input type="submit" value="Thực hiện">
    </form>
    
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blob{
            margin: 0 0 300px -2px;
            width: 60%;
        }
        img.typo{
            width: 80%;
            position: absolute;
            top: 28%;
            left: 12%;
        }
        .text{
            font-size: 26px;
            background-color: pink;
            width: 300px;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div class="text">Color Palette</div>
     <img class="typo" src="imgs/Screen Shot 2022-03-22 at 10.38.47 PM.png">
    <img class="blob" src="imgs/blob.png">
    <?php include 'footer.php';?>

</body>
</html>
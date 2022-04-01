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
            top: 33%;
            left: 12%;
        }
        .text{
            font-size: 60px;
            color: #723800;
            font-weight: bold;
            width: 600px;
            position: absolute;
            top: 20%;
            left: 12%;
        }
        .descript{
            font-family: 'Ubuntu', sans-serif;
            font-weight: normal;
            font-size: 24px;
            position: absolute;
            text-align: center;
            top: 70%;
            left: 12%;
            width: 70%;
            line-height: 34px;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div class="text">Color Palette</div>
     <img class="typo" src="imgs/Screen Shot 2022-03-22 at 10.38.47 PM.png">
     <div class = "descript">We used several shades of <strong>orange</strong> and one <strong>green.</strong><br>
Orange is associated with meanings of joy, engagement, warmth, and heat. By using this color we’re trying to convey that everybody deserves <strong>warmth</strong> and a <strong>feeling of safety</strong>, and how simple little donation can bring <strong>joy</strong> and <strong>happiness</strong>.<br>
Our choice of green is a very <strong>calm</strong> green, which means <strong>safety</strong>, life, and is a very common choice among charity organizations. </div>
    <img class="blob" src="imgs/blob.png">
    <?php include 'footer.php';?>

</body>
</html>
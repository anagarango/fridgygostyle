<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        span{
            font-family: 'Ubuntu', sans-serif;
            position: absolute;
            bottom: 20%;
        }
        .blob{
            margin: 0 0 100px -2px;
            width: 60%;
        }
        /* img.typo{
            width: 80%;
            position: absolute;
            top: 28%;
            left: 12%;
        } */

    </style>
</head>
<body>

    <?php include 'header.php';?>
    <div class="text">Typography</div>
    <img class="blob" src="imgs/blob.png">
    <!-- <img class="typo" src="imgs/typography.png"> -->
    <span>ABCDEFGHIJKLM</span>
    <?php include 'footer.php';?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .font{
            font-family: 'Ubuntu', sans-serif;
            position: absolute;
            top: 20%;
            left: 20%;
            display: flex;
            flex-direction: column;
        }
        span {
            line-height: 70px;
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
    <div class = "font">
        <span class = "bold">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "semi-bold">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "regular">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "regular-small">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "bold-small">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "regular-small">ABCDEFGHIJKLM  abcdefghijklm</span>
    </div>
    <?php include 'footer.php';?>

</body>
</html>
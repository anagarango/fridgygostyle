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
            top: 30%;
            left: 10%;
            display: flex;
            flex-direction: column;
        }
        span {
            line-height: 70px;
        }
        .typeface{
            font-family: 'Ubuntu', sans-serif;
            position: absolute;
            top: 20%;
            left: 150px;
            font-size: 26px;
        }
        .fontsizes{
            font-family: 'Ubuntu', sans-serif;
            position: absolute;
            top: 20%;
            left: 350px;
            font-size: 26px;
        }

        .bold{
            font-weight: bold;
            font-size: 36px;
        }
        .regular{
            font-weight: normal;
            font-size: 36px;
        }
        .regular-small{
            font-weight: normal;
            font-size: 24px;
        }
        .bold-small{
            font-weight: bold;
            font-size: 16px;
        }
        .regular-smaller{
            font-weight: normal;
            font-size: 16px;
        }

        .size{
            display: flex;
            flex-direction: column;
            font-family: 'Ubuntu', sans-serif;
            position: absolute;
            top: 30%;
            left: 55%;
        }
        .bold-ubuntu{
            font-weight: bold;
            font-size: 36px;
        }
        .regular-ubuntu-one{
            font-weight: normal;
            font-size: 36px;
        }
        .regular-ubuntu-two{
            font-weight: normal;
            font-size: 24px;
        }
        .bold-ubuntu-two{
            font-weight: bold;
            font-size: 16px;
        }
        .regular-ubuntu-three{
            font-weight: normal;
            font-size: 16px;
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
    <div class = "typeface">Typefaces<hr></div>
    <div class = "font">
        <span class = "bold">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "regular">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "regular-small">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "bold-small">ABCDEFGHIJKLM  abcdefghijklm</span>
        <span class = "regular-smaller">ABCDEFGHIJKLM  abcdefghijklm</span>
    </div>
    <div class = "fontsizes">Font Sizes<hr></div>
    <div class = "size">
        <span class = "bold-ubuntu">Ubuntu Bold 36px</span>
        <span class = "regular-ubuntu-one">Ubuntu Regular 36px</span>
        <span class = "regular-ubuntu-two">Ubuntu Regular 24px</span>
        <span class = "bold-ubuntu-two">Ubuntu Bold 16px</span>
        <span class = "regular-ubuntu-three">Ubuntu Bold 16px</span>
    </div>
    <?php include 'footer.php';?>

</body>
</html>
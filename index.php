<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
        .blob{
            width: 750px;
            margin-top: -16px;
        }
        .welcome{
            position: relative;
            color: white;
            top: -420px;
            left: 170px;
            font-size: 50px;
            font-weight: 900;
        }
        .welcomeblob{
            margin: 0 0 0 -2px;
            /* background-color: black; */
            width: 90%;
        }
        .hey{
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div class="welcomeblob">
        <img class="blob" src="imgs/blob.png">
        <div class="welcome">Welcome to FridgyGo</div>
    </div>
    <div class="hey"></div>
    <?php include 'footer.php';?>
</body>
</html>
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
            width: 110%;
            margin-top: -16px;
        }
        .welcome{
            position: absolute;
            color: white;
            top: 30%;
            left: 170px;
            font-size: 50px;
            font-weight: 900;
            font-family: 'Staatliches', cursive;
        }
        .welcomeblob{
            margin: 0 0 0 -2px;
            width: 50%;
        }
        .home_page_logo{
            position: absolute;
            top: 200px;
            left: 65%;
        }
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div class="welcomeblob">
        <img class="blob" src="imgs/blob.png">
        <div class="welcome">Welcome to FridgyGo</div>
    </div>
    <div class="home_page_logo">
        <img src="imgs/vertical_logo.png" alt="final logo of FridgyGo">
    </div>
    <?php include 'footer.php';?>
</body>
</html>
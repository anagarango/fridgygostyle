<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
        html{
            background-color: rgb(253, 241, 227);
            background-color: #f7e6df
        }
        body{
            margin: -10px 0 0 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .header{
            display: flex;
            position: fixed;
            margin-top: -5px;
            background-color: white;
            height: 105px;
            width: 100vw;
            justify-content: center;
            align-items: center;
            z-index: 1;
            font-family: 'Staatliches', cursive;
        }
        .header > a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top:10px;
            width: 120px;
            height: 95px;
            font-size: 22px;
            color: #119962;
            text-decoration: none;
            font-weight: 600;
        }
        .header > .hover:hover {
            font-size: 26px;
            background-color: #efc2a3;
            color: rgb(163, 98, 45);
            transition: 0.4s;
            font-weight: 800;
        }
        .logo {
            width: 100px;
            margin-top:35px;
            height: 100%;
            background-image: url("imgs/final_logo.png");
            background-size: 50%;
            background-repeat: no-repeat;

        }
    </style>
</head>
<body>
    <ul class="header">
        <a class="logo" href="index.php"></a>
        <a class="hover" href="index.php">Home</a>
        <a class="hover" href="logo.php">Logo</a>
        <a class="hover" href="imagery.php">Imagery</a>
        <a class="hover" href="colour.php">Colour</a>
        <a class="hover" href="typo.php">Typography</a>
        <a class="hover" href="ref.php">Reference</a>
    </ul>
</body>
</html>
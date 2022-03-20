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
            font-family: 'Staatliches', cursive;
        }
        body{
            margin: -10px 0 0 0;
        }
        .header{
            display: flex;
            position: fixed;
            margin-top: -5px;
            background-color: rgb(204, 136, 81);
            height: 105px;
            width: 100vw;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
        .header > a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top:10px;
            width: 120px;
            height: 95px;
            font-size: 22px;
            color: white;
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
            margin-top:25px;
            height: 100%;
            background-image: url("imgs/fridge.png");
            background-size: 83%;
            background-repeat: no-repeat;

        }
    </style>
</head>
<body>
    <ul class="header">
        <a class="logo" href="index.php"></a>
        <a class="hover" href="index.php">Home</a>
        <a class="hover" href="logo.php">Logo</a>
        <a class="hover" href="colour.php">Colour</a>
        <a class="hover" href="typo.php">Typography</a>
        <a class="hover" href="ref.php">Reference</a>
    </ul>
</body>
</html>
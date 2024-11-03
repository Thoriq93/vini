<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman PHP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: red;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            text-transform: uppercase;
        }
        .navbar {
            background-color: blue;
            height: 50px;
        }
        .content1 {
            background-color: yellow;
            float: left;
            width: 50%;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .content1 img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
        .content2 {
            background-color: white;
            float: right;
            width: 50%;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .content2 h2 {
            font-size: 36px;
            color: #333;
        }
        .black-bar {
            background-color: black;
            height: 50px;
            clear: both;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
        }
        .black-bar span {
            padding: 10px;
        }
        .footer {
            background-color: gray;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="header">Halaman PHP</div>
    <div class="navbar"></div>
    <div class="content1"><img src="https://via.placeholder.com/400x300" alt="Sample Image"></div>
    <div class="content2"><h2>Welcome to our Creative PHP Page!</h2></div>
    <div class="black-bar"><span>Explore More</span></div>
    <div class="footer">Footer</div>
</body>
</html>
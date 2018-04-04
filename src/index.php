
<?php

// This is gonna be the awesome cinema booking made by Mireille Eva and Tam
//(eventhough it's a bit suspicious what the catch is. :D )

//handling the form
//add to database

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cinema Booking </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <!--<script src="main.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    button {
        background:#1c1c1c;
        border-radius: 5px;
        color: lightgray;
        margin-top: 10px;
    }
    form div {
        width: 25%;
        display: flex;
        justify-content: space-between;
    }
    input {
        background: #1c1c1c;
        color:white;
    }
    body{
        background-color: black;
        color: lightgray;
    }
    a {
        color: #7f7f7f;
    }
    main {
        width: 80%;
        margin: 0px auto;
        background-image: url(img/bgr.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }
    img {
        width: 40px;
        height: 40px;
    }

    #seat-area {
        margin-left: 40vw;
        margin-right: 0vw;
        display: flex;
        flex-wrap: wrap;
    }

    .available{
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background-color: green;
    }
    .occupied{
        border-radius: 50%;
        width: 10px;
        height: 10px;
        background-color: red;
    }
    h1{
        text-align: center;
        color: gold;
    }
    </style>
</head>
<body>

<main>
    <h1>The Cine Booking System</h1>
    <!-- include the form from Mireille -->
    <?php include 'form.php'?>
    <!-- include the table.php -->
    <?php include 'table.php'?>
    <?php include 'seats.php'?>
</main>

</body>
</html>

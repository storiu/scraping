<?php
require("mysql/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Schedule Checking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!--link href="https://fonts.googleapis.com/css?family=Athiti:600&display=swap" rel="stylesheet"-->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"-->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <!--<link href="https://fonts.googleapis.com/css?family=Athiti:600&display=swap" rel="stylesheet">-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <style>
        /* Style the body */
        body {
            font-family: 'Athiti', sans-serif;
            margin: 0;
            background-color: transparent;

        }

        /* Header/Logo Title */
        .header {
            padding: 0px;
            text-align: center;
            color: yellow;
            font-size: 30px;

        }

        /* Page Content */
        .content {
            padding: 20px;
        }

        .container {
            align-content: center
        }

        .navbar {
            width: 100%;
            background-color: #333;
            padding-left: 10%;
            padding-right: 10%;
            padding: auto;

        }

        .navbar a {
            color: white;
            font-size: 18px;
            padding: 7px;

        }

        .navbar a:hover {
            padding: 7px;
            
        }
		
		.navbar li {
			display: inline;
		}

        .active {
            background-color: darkgrey;

        }

        @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
        }


        table {
            width: 80%;
            margin: 0 auto;
            background-color: transparent;


        }

        th,
        td {
            border: 1px solid #ddd;

        }

        .button {
            color: white;
            padding: 6px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
            background-color: white;
            color: black;
            border: 2px solid #FF4500;
        }

        .button:hover {
            background-color: #FFDAB9;
            color: white;
        }

        #div1 {
            background-color: #333;

        }

        #padd-left {
            padding-left: 150px
        }

        select {
            border: 2px solid #E3E7E4;
            background-color: white;
            text-transform: uppercase;
            color: #47515c;
            padding: 8px 8px 8px 8px;
            width: auto;
            cursor: pointer;
            margin-bottom: 10px;
            font-size: 16px;
        }

        select>option {
            text-transform: uppercase;
            padding: 5px 0px;
        }


        input[type=submit] {
            background-color: forestgreen;
            text-decoration: none;
            color: white;
            padding: 10px 35px 10px 35px;
            font-size: 16px;
            font-weight: bold;
            border: 0px solid #FF4500;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type=submit]:hover {
            background-color: mediumseagreen;

        }

        .div2 {
            border: 0px solid #dadada;
            padding: 50px 50px;
            padding-left: 300px;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: #f5f5f5;
        }

        .div3 {

            align-content: center;
            text-align: center;
            border-radius: 10px;
            padding-right: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            margin-bottom: 10px;
            background-color: white;

        }

        .div4 {
            border: 1px solid #dadada;
            padding: 50px 50px;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: #f5f5f5;
            text-align: center;
        }

        .div5 {
            align-content: center;
            text-align: center;
        }

        input[type=text] {
            width: inherit;
            padding: 5px;
            margin: 5px;
            border-radius: 4px;
        }

        .div6 {
            align-content: center;
            text-align: center;
            border-radius: 10px;
            padding-right: 10px;
            padding-left: 10px;
            margin-bottom: 10px;
            background-color: white;

        }

        .div7 {
            text-align: center
        }

        .div8 {
            text-align: left;
            border-radius: 10px;
            padding-right: 200px;
            padding-left: 200px;
            padding-bottom: 10px;
            margin-bottom: 10px;
            background-color: white;

        }
        
        .div9{
            border: 1px solid #dadada;
            padding: 30px 30px;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: white;
            text-align: center;
        
        }

        .bg {
            background-color: white
        }
        
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
         
            
        }
        
        li{
            margin: 0px;
        }

    </style>
</head>

<body>


    <div class="header" id='div1'>
        <img width="100%" src="folder/blog4.png">
    </div>

    <div id="main-content">
        <ul class="navbar ">

            <li><a href="index.php" id="home">home</a></li>
            <li><a href="timetable.php" id="timetable">teachable for using room</a></li>
            <li><a href="lecture.php" id="lecture">list of teacher</a></li>
            <li><a href="course.php" id="course">subject in this term</a></li>
            <li><a href="classTeach.php" id="class">list of teacher in this subject</a></li>
            <li><a href="classroom.php" id="classroom">room</a></li>
            <li><a href="contact.php" id="contact">contact</a></li>
            
        </ul>
    </div>

</body>

</html>

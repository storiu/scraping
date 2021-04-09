<?php
include('header.php');
?>

<div id='main-content'>

</div>

<script>
    document.getElementById('contact').className = "active";

</script>


<head>
    <title>Our team</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="styles/demo.css">


    <style>
        #bg {
            background-color: orange;
        }



        .team {
            margin: 0px 0;
        }



        #prof {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }

        h2 {
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            padding-top: 10px;
            color: white;
        }

        h2:after {
            content: '';
            background: #fff;
            display: block;
            height: 3px;
            width: 150px;
            margin: 10px auto;
            color: white;
        }

        h4 {
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            padding-top: 20px;
            padding-bottom: 3px;
            color: white;
        }

        h5,
        p {
            color: white;
            float: right;
        }





        .profile {
            margin-top: 25px;
        }

        .profile .img-box {
            opacity: 1;
            display: block;
            position: relative;
        }

        .profile h3 {
            font-size: 22px;
            font-weight: bold;
            margin-top: 15px;
        }

        #f {
            padding: 40px 0;

        }

        .img-box:after {
            content: '';
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            right: 0;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .img-box ul {
            margin: 0;
            padding: 20px 0;
            position: absolute;
            z-index: 1;
            bottom: 0;
            display: block;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;

        }

        .img-box ul li {
            width: 30px;
            height: 30px;
            border: 1px solid #a73b23;
            border-radius: 50%;
            margin: 3px;
            padding: 7px;
            display: inline-block;
        }

        .img-box a {
            color: #fff;
        }

        .img-box:hover:after {
            opacity: 1;
        }

        .img-box:hover ul {
            opacity: 1;
        }

        .img-box a:hover li {
            color: #007bff;
            border: 1px solid #007bff;

        }

        .img-box:after,
        .img-box ul,
        .img-box ul li {
            transition: all o.5s ease-in-out 0s;
        }

        #align {
            align-content: center;
            padding-left: 200px;
        }

    </style>
</head>

<body>
    <table>
        <tbody>
            <tr>
          
                <td style='padding: 5px;border-left: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;'>
                    <div class="div9" id="bg">
                        <h2>Advisor</h2>
                        <img id="prof" src="images/Aj.Jiradej%20Ponsawat.jpg">
                        <h4>Asst.Prof. Jiradej Ponsawat</h4>
                    <!--    <div class="container">
                            <br><br>
                            <h2>Our team</h2>
                            <div class="row" id="align">
                                <div class="col-md-3" profile text-center>
                                    <div class="img-box">
                                        <img src="images/Faii.JPG" width="100%" id="f" class="img-responsive">
                                        <ul>
                                            <a href="https://www.facebook.com/fairlorai">
                                                <li><i class="fa fa-facebook"></i></li>
                                            </a>
                                           

                                        </ul>
                                    </div>
                                    <h5>Sansanee Srirapol</h5>
                                    <p>Connect and query data</p>

                                </div>
                                <div class="col-md-3" profile text-center>
                                    <div class="img-box">
                                        <img src="images/golf.JPG" id="f" width="100%" class="img-responsive">
                                        <ul>
                                            <a href="https://www.facebook.com/levine.lcp">
                                                <li><i class="fa fa-facebook"></i></li>
                                            </a>
                                            

                                        </ul>
                                    </div>
                                    <h5>Krittanu Suri</h5>
                                    <p>Designing of ERD</p>
                                    
                                    


                                </div>
                                <div class="col-md-3" profile text-center>
                                    <div class="img-box">
                                        <img src="images/Cream.JPG" id="f" width="100%" class="img-responsive">
                                        <ul>
                                            <a href="https://www.facebook.com/creamwalk.walkker">
                                                <li><i class="fa fa-facebook"></i></li>
                                            </a>
                                            

                                        </ul>
                                    </div>
                                    <h5>Phirawit Anusuriya</h5>
                                    <p>Database Web design</p>
                                    
                                    

                                </div>
                        
                
           
                        </div>
                    --></div>


                    </div>
                </td>
            </tr>

        </tbody>
    </table>

</body>

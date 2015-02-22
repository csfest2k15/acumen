<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumen 2K15</title>
    <meta name="description" content="Acumen 2015 Web Page " />
    <meta name="keywords" content="Acumen, CS FEST, VASAVI, CSE" />
    <meta name="author" content="little_bit_all" />
    <link rel="shortcut icon" href="favicon.ico">
    <style type="text/css">
    #loading {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -128px;
        margin-left: -128px;
        width: 256px;
        line-height: 256px;
        height: 256px;
        //display: block;
        //position: absolute;
        //top: 0;
        //left: 0;
        //z-index: 100;
        //width: 100%;
        //height: 100%;
        font-size: 25px;
        color: black;
        background-color: white;
        background-image: url("img/loading.gif");
        background-repeat: no-repeat;
        background-position: center;
        text-align: center;
    }
    </style>


    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css/multilevelmenu.css" />
     -->
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/animations.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <script src="js/modernizr.custom.js" type="text/javascript"></script>



</head>

<body>


    <div id="loading">
        0%
    </div>

    <script type="text/javascript">
    var imagesloaded = 0;

    var img2load = new Array();
    img2load.push("img/loading.gif");
    img2load.push("img/4.jpg");
    img2load.push("img/5.jpg");
    img2load.push("img/6.jpg");
    img2load.push("img/a21.png");
    img2load.push("img/b21.png");
    img2load.push("img/b-a.png");
    img2load.push("img/b-c.png");
    img2load.push("img/b-e1.png");
    img2load.push("img/b-nte.png");
    img2load.push("img/b-s.jpg");
    img2load.push("img/b-te.png");
    img2load.push("img/b-w.png");
    img2load.push("img/carousel.jpg");
    img2load.push("img/l-opc.png");
    img2load.push("img/b-oth.png");
    img2load.push("img/main_logo.png");
    img2load.push("img/opc_logo.png");
    img2load.push("img/text.png");
    
    var totimg = img2load.length;

    anImageLoaded = function() {
        imagesloaded++;
        document.getElementById('loading').innerHTML = Math.floor(imagesloaded / totimg * 100) + " %";
        console.log(Math.floor(imagesloaded / totimg * 100));

    };

    for (var i = 0; i < totimg; i++) {
        var s = new Image();

        s.onload = function() {
            anImageLoaded();
        };

        s.onerror = function() {
            anImageLoaded();
            console.log("failed to load " + this.src);

        };
        s.src = img2load[i];
    }
    </script>



    <div class="codrops-top clearfix " id="navbartop">
        <div class="container">
            <a href="#" onclick="pageTransition(0,-1)">
                <span>Acumen</span>
            </a>
            <a href="#" onclick="pageTransition(1,-1)">
                <span>About</span>
            </a>
            <a href="#" onclick="pageTransition(2,-1)">
                <span>Contact</span>
            </a>

            <span>  

                <a href="#"  class="navdropdown" onclick="pageTransition(3,-1)"> Technical Events </a>
                    
                    
            </span>

            <span>  

                <a href="#"  class="navdropdown" onclick="pageTransition(5,-1)">Non Technical Events </a>
                    
                    
            </span>



            <a href="#" onclick="pageTransition(4,-1)">
                <span>Sponsors</span>
            </a>

            <span class="right">
            <a class="" href="">
                    <span>G+</span>
            </a>
            <a class="" href="">
                <span>FBLIKE</span>
            </a>
            <a class="" href="">
                <span>YT</span>
            </a>
            <a class="" href="">
                <span>Tweet</span>
            </a>
            </span>
        </div>
    </div>

    <div id="pt-main" class="pt-perspective">

        <!-- 0. welcome -->
        <div class="pt-page pt-page-0" style="background-image: url('img/b-w.png');">

            <img class="showlogo" src="img/text.png" alt="mainlogo">

            <div class="navcolor">

            </div>

            <div class="container-fluid">

                <div id="slider1_container" class="" style="position: fixed; margin: 0 auto; left:0px; bottom: 30px; width: 1300px; height: 450px; overflow: hidden;">
                    <!-- Loading Screen -->
                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
                        </div>
                        <div style="position: absolute; display: block; background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuUOyPN4VE5s1gYaIZ5EAPImbQQEPkwuVDf8Zvevlqd8crdH22') no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
                        </div>
                    </div>
                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                        <div>
                            <img u="image" src="img/carousel.jpg" />
                            <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px; text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #000;">Acumen
                            </div>
                            <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF;">
                                CS Fest 2015
                            </div>
                        </div>
                        <div>
                            <img u="image" src="img/carousel.jpg" />
                            <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px; text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px; color: #000;">Creative
                            </div>
                            <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                                Awesomeness
                            </div>
                        </div>
                        <div>
                            <img u="image" src="img/carousel.jpg" />
                            <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px; text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #000;">Fun!!
                            </div>
                            <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                                Masti
                            </div>
                        </div>
                    </div>

                    <!-- Bullet Navigator Skin Begin -->

                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb21" style="position: fixed; bottom: 36px; right: 50%">
                        <!-- bullet navigator item prototype -->
                        <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
                    </div>
                    <!-- Bullet Navigator Skin End -->

                    <!-- Arrow Navigator Skin Begin -->

                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;"></span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px"></span>

                </div>


            </div>





            <div class="contains">



            </div>

        </div>

        <!-- 1 .about -->
        <div class="pt-page pt-page-1" style="background-image: url(img/b-a.png); ;">
            <div class="navcolor" style="background-color: #C1CDCD;">

            </div>

            <div class="contains">
                <div class="about">
                    <h1>Acumen - National Symposium</h1>
                    <p>The pace of progress in the field of Science & Technology in this millennium has overshadowed the speed of Technological changes in the past decades. Technical Symposiums like Acumen are an effort to catch up with the pace of technological innovation.</p>
                    <p>
                        ACUMEN is a technical festival. The event seeks to achieve communication of innovative ideas that promote the cause of the technological advantage among the students and also to keep them abreast with the latest advances in their respective fields. It also opens a window to the participants to interact with people from different backgrounds and upgrade their knowledge.
                    </p>
                    <p>
                        The theme "YOUTH-TECHNOLOGY-FUTURE" asserts the fact that the future of technology lies in the hands of the youth. This is the time for the students to draw out their talents in the areas related to academic routine.
                    </p>
                </div>
                <div class=" a-video">
                    <iframe width="440" height="270" src="https://www.youtube.com/embed/z8CwsjoE9u4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>


        </div>

        <!-- 2. Contacts -->
        <div class="pt-page pt-page-2" style="background-image: url(img/b-c.png);">
            <div class="navcolor" style="background-color: #F4A460;">

            </div>

            <div class="contains">
                <div class="contacts" style="color: black;">
                    <h1>Contacts </h1>
                    <div id="table-list">
                        <table cellspacing="20" style="border-collapse: separate; border-spacing: 0px 20px;">
                            <tr>
                                <td class="imp">ADDRESS </td>
                                <td class="details">
                                    Vasavi College of Engineering Affiliated to Osmanaia University, </br>Hyderabad Approved by AICTE, </br>New Delhi 9-5-81, </br>Ibrahimbagh Hyderabad - 500 031 Andhra Pradesh, </br>India
                                </td>
                            </tr>
                            <tr>
                                <td class="imp">CONVENERS </td>
                                <td class="details">
                                    <b>SOME FULL NAME AND ITS LONG (+919999999999)</b> </br>
                                    <b>SOME FULL NAME (+919999999999)</b> </br>
                                    <b>SOME FULL NAME (+919999999999)</b> </br>
                                    <b>SOME FULL NAME (+919999999999)</b> </br>
                                </td>
                            </tr>
                            <tr>
                                <td class="imp">EMAIL </td>
                                <td class="details">
                                    Email us at - <b>giveanemailid@gmail.com</b>
                                    </br>
                                    Subject - <b>HELP DESK - YOUR SUBJECT</b>
                                </td>
                            </tr>
                        </table>

                    </div>

                </div>
                <div class=" c-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.82610661964!2d78.38269171871812!3d17.38046038482994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb942a230c2425%3A0xe4bfd802564aecf6!2sVasavi+Engineering+College%2C+9-5-81%2C+Ibrahimbagh%2C+Golkonda%2C+Hyderabad%2C+Andhra+Pradesh+500031!5e0!3m2!1sen!2sin!4v1387305921789" width="450" height="337" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>


        <!-- 3. Technical Events -->
        <div class="pt-page pt-page-3" style="background-image: url('img/b-te.png');">
            <div class="navcolor" style="background-color: #292421">

            </div>

            <div class="contains">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item" style="background-image: url('img/l-opc.png');">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(6,-1);">
                                    <h3>Online Programing Contest</h3>
                                </a>
                                <p> The Only Thing we Know : CODEING
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item" style="background-image: url('img/l-oth.png');">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(8,-1);">
                                    <h3>Online Treasure Hunt</h3>
                                </a>
                                <p>Work like a captain, play like a pirate.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item" style="background-image: url('img/5.jpg');">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(10,-1);">
                                    <h3>Project Expo</h3>
                                </a>
                                <p>Look what I've Done :)
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(12,-1);">
                                    <h3>Paper <span style="margin-left:-14px;">Presentation</span></h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(14,-1);">
                                    <h3>Code Hunt</h3>
                                </a>
                                <p>we are the hunters they are the prey
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(16,-1);">
                                    <h3>Final Destiny</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(18,-1);">
                                    <h3>Poster <span style="margin-left:-14px;">Presentation</span></h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(20,-1);">
                                    <h3>Encoder</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(22,-1);">
                                    <h3>Engadget</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!--  <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(5,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a>
           </div> -->

        </div>

        <!-- 4. Sponsers -->
        <div class="pt-page pt-page-4" style="background-image: url('img/b-s.jpg');">
            <div class="navcolor" style="background-color: #123;">

            </div>

            <div class="container-fluid">


                <div class="contains">
                   

                </div>
            </div>

        </div>

        <!-- 5. Non Technical Events -->
        <div class="pt-page pt-page-5" style="background-image: url('img/b-nte.png');">
            <div class="navcolor" style="background-color: #8B4513;">

            </div>

            <div class="contains">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item ch-img-1">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(24,-1);">
                                    <h3>Tech-no tech</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(25,-1);">
                                    <h3>King of  Cards</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-3">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(26,-1);">
                                    <h3>Quikr</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(27,-1);">
                                    <h3>Who am I</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(28,-1);">
                                    <h3>Spy C</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(29,-1);">
                                    <h3>Wrong Turn</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(30,-1);">
                                    <h3>Smart Droid</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(31,-1);">
                                    <h3>CPU Assembly</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(32,-1);">
                                    <h3>Keyboard Assembly</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(33,-1);">
                                    <h3>Guess Who</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item ch-img-2">
                            <div class="ch-info">
                                <a href="#" onclick="pageTransition(34,-1);">
                                    <h3>It’s Appening</h3>
                                </a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!--  <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(5,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a>
           </div> -->

        </div>


        <!-- 6. Online Programing Contest Description part 1 -->
        <div class="pt-page pt-page-6" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #3D9140;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Online Programing Contest </h1>
                <div class="event-intro" style="color: black;">
                    <p>An online programming contest is pleasurable for a budding programmer. It is a delightful playground where programmers can explore their intelligence. “It is not the place for the frightened lizards but for the Programming Wizards.” It provides the perfect platform for all the programmers to showcase their skills. Get down on the battleground and claim the right of being the "best programmer".</p>

                    <p style="padding-top: 30px;">
                        <span class="">First Round :</span>
                        <span class="">Online</span>
                        <br>
                        <span class="">Second Round :</span>
                        <span class="">Campus</span>
                        <br>
                        <button type="button" class="btn btn-info" onclick="pageTransition(7,-1)">Details</button>
                    </p>
                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(7,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(8,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(22,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>


        </div>


        <!-- 7. Online Programing Contest Description Part 2 -->
        <div class="pt-page pt-page-7" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #3D9140;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Online Programing Contest Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p><b>First Round:</b> Online round. This round is open to all. Participants will be given certain questions and they would have to code the solutions. The problems will test your ingenuity, insight and your ability to optimize. All you need is a favourite text editor, a basic knowledge of C, C++/JAVA and the satisfaction of seeing your code work first time..</p>
                    <p><b>Second Round:</b> This round is on campus event. The participants shortlisted from the first round will have to come down to Vasavi Campus for the second round. This round has some debugging questions where the team will be given an erroneous code and they will have to remove all the errors to produce the desired output.
                        <br>Also other questions where the team has to produce the desired output given a code snippet. The team solving these questions correctly in minimum time wins!! </p>

                    <p>Each team can hold two participants. The participation for the first round is free. The winner gets a merit certificate and prize money. Participation certificates will be awarded to all attending Round 2 at Vasavi College of Engineering. </p>

                    <p style="padding-top: 30px;">
                        <span class="">For More Details :</span>
                        <span class="">Sone one : (999999999999999)</span>
                        <br>
                        <span class="">Sone one : (999999999999999)</span>
                        <br>
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(6,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>

        </div>

        <!--  8. Tresusre Hunt Contest Description Part 1 -->
        <div class="pt-page pt-page-8" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Online Treasure Hunt</h1>
                <div class="event-intro" style="color: black;">
                    <p>Treasure hunting isn’t just for pirates or professionals anymore! Acumen Csfest presents Online Treasure Hunt which is an exciting interactive Game. Once you master your matching skills, you'll want to continue the challenge.</p>

                    <p style="padding-top: 30px;">
                        <span class="">First Round :</span>
                        <span class="">Online</span>
                        <br>
                        <span class="">Second Round :</span>
                        <span class="">Campus</span>
                        <br>
                        <button type="button" class="btn btn-info" onclick="pageTransition(9,-1)">Details</button>
                    </p>
                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(9,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(10,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(6,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 9. Treasure Hunt Contest Description Part 2 -->
        <div class="pt-page pt-page-9" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Online Treasure Hunt Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p>The Event is of two Phases:
                        <br>
                        <b>Phase - 1</b> Pure Online Event.
                        <br>
                        <b>Phase - 2</b> The Teams that win the first round will have to attend Phase - 2 at Vasavi College of Engineering, Hyderabad. Teams winning phase 2 at College level are given Prize Money as well as Merit Certificate. Since the Event is Online, you have to use your greatest weapon i.e., Your Brain to Clear the Levels.
                    </p>

                    <p>
                        Contest Website: <a href="#">http://www.vcefest.in/oth2014</a>
                    </p>

                    <p>Each team can hold two participants. The participation for the first round is free. The winner gets a merit certificate and prize money. Participation certificates will be awarded to all attending Round 2 at Vasavi College of Engineering. </p>

                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(8,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  10. Project Expo Contest Description Part 1 -->
        <div class="pt-page pt-page-10" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Project Expo</h1>
                <div class="event-intro" style="color: black;">
                    <p>Eager to get your projects officially appreciated?! This event provides you with a platform to present your projects and win prizes. Prepare one on spot or showcase your existing one! </p>
                    <p>
                        Participants are requested to get any additional software or hardware needed for the implementation of their projects. Technical support and guidance will be provided up to a limit.</p>

                    <button type="button" class="btn btn-info" onclick="pageTransition(11,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(11,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(12,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(8,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 11. Project Expo Contest Description Part 2 -->
        <div class="pt-page pt-page-11" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Project Expo Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>Rules</b>
                        <br>Team should consist of 2 members.
                        <br> Project can be in any language.
                        <br> The team can register before the day of fest and also on the day of fest.
                        <br> Along with the submission, a 10 minutes presentation is to be delivered.
                        <br>

                    </p>


                    <p> The Round Consists of Project Execution and Demonstration (any kind of app like android,windows 8,iPhone etc can also be done)</p>

                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(10,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  12. Paper Presentation Contest Description Part 1 -->
        <div class="pt-page pt-page-10" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Paper Presentation</h1>
                <div class="event-intro" style="color: black;">
                    <p>As the popular adage goes “Exchanging ideas alone will leave you with more than what you start with; and exchanging everything else, will leave you with the same”. We, here at Vasavi strive to make it true. So for all those tech savvy folks brimming with ideas, bubbling with confidence and having the right acumen, your wait for the right opportunity to present your ideas to your fellow tech community is finally over. </p>
                    <p>
                        Paper presentation event of Acumen CSFest’14 is the best platform to place your ideas and solutions towards the latest and emerging technologies.</p>

                    <button type="button" class="btn btn-info" onclick="pageTransition(13,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(13,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(14,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(10,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 13. Paper Presentation Contest Description Part 2 -->
        <div class="pt-page pt-page-11" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Paper Presentation Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>Rules</b>
                        <ul>
                            <li>Registration fee is Rs.200 only (subjected to change). [Online Registration:225/- ]</li>
                            <li>No paper will be taken in the last 2 days to the fest.</li>
                            <li>A student can give only one paper. (Candidates however can submit more than one paper by paying the requisite amount for each paper but are allowed to present only one among them if selected)</li>
                            <li>Maximum of 2 participants per group.</li>
                            <li>Failing to be present when called in presentation will result in disqualification.</li>
                            <li>No other topics apart from the topic opted will be entertained.</li>
                            <li>Maximum 10 minute presentation.(8 minutes of talk followed by 2 minutes of questionnaire)</li>
                            <li>Paper submitted should be restricted to 3 single sided A4 pages in IEEE format.</li>
                            <li>Submit your papers to <i>acumen14paperpresentation@gmail.com</i> with
                                <br> name,ph.no,mail-id,college name and Receipt No. (Your bank transaction no. for online applicants) </li>
                            <li>Last date for submission is <i>2nd Jan,2014</i>
                            </li>
                            <li>All the submitted candidates will be given Certificate of Participation; Cash price and Merit certificates for winners</li>
                        </ul>
                    </p>




                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(12,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  14. Code Hunt Contest Description Part 1 -->
        <div class="pt-page pt-page-10" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Code Hunt</h1>
                <div class="event-intro" style="color: black;">
                    <p>Some Intresting Description of Code Hunt </p>
                    <p>
                        Anything more. </p>


                    <button type="button" class="btn btn-info" onclick="pageTransition(15,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(15,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(16,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(12,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 15. Code Hunt Contest Description Part 2 -->
        <div class="pt-page pt-page-11" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Code Hunt Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>First round - </b>The participant is given a encrypted text and he has to decrypt it. The text consists of the system name (IP address of the system). He has to search for the system with the corresponding IP address and there will be question in that system, answering that question he will be given another encrypted text to find other system name and answer the question. The team which takes minimum time to answer five questions will be promoted to the next round.

                    </p>

                    <p>
                        <b>Second round-</b> Each question consists of a program in which few lines of the code will be missing. The participant needs to complete the missing code parts. Options will be given for each line of code. Then they have to choose the options in the correct order of missing lines of code. Each option will be represented by a color. Then the options have to be answered through the color of a coin (representing an option). All the coins should be placed in the correct sequence in a limited time.

                    </p>


                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(14,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  16. Final Destiny Description Part 1 -->
        <div class="pt-page pt-page-16" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Final Destiny</h1>
                <div class="event-intro" style="color: black;">
                    <p>Some Intresting Description of Final Destiny </p>
                    <p>
                        Anything more. </p>


                    <button type="button" class="btn btn-info" onclick="pageTransition(17,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(17,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(18,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(14,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 17. Final Destiny Contest Description Part 2 -->
        <div class="pt-page pt-page-17" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Final Destiny Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>First round - </b>Kya Hoga ??

                    </p>

                    <p>
                        <b>Second round-</b> use badh kya hoga ??

                    </p>


                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(16,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  18. Poster presentation Description Part 1 -->
        <div class="pt-page pt-page-18" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Poster presentation</h1>
                <div class="event-intro" style="color: black;">
                    <p>Some Intresting Description of Poster presentation </p>
                    <p>
                        Anything more. </p>


                    <button type="button" class="btn btn-info" onclick="pageTransition(19,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(19,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(20,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(16,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 19. Poster presentation Contest Description Part 2 -->
        <div class="pt-page pt-page-19" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Poster presentation Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>First round - </b>Decide a theme (one or two) and the participants have to send a poster based on the theme. The best posters will be shortlisted for the second round.


                    </p>

                    <p>
                        <b>Second round-</b> They will be given a set of themes and have to present the posters on the specified dimension paper (can be A4, A1).

                    </p>


                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(18,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  20. Encoder Contest Description Part 1 -->
        <div class="pt-page pt-page-20" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Encoder</h1>
                <div class="event-intro" style="color: black;">
                    <p>Some Intresting Description of Encoder </p>
                    <p>
                        Anything more. </p>


                    <button type="button" class="btn btn-info" onclick="pageTransition(21,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(21,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(22,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(18,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 21. Encoder Contest Description Part 2 -->
        <div class="pt-page pt-page-21" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Encoder Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>First round - </b>Based on memory/ encryption.


                    </p>

                    <p>
                        <b>Second round-</b> Challenge them! If participant (p1) is given a question, he will be given a chance to pose that question to other participants there. If the other participant (p2) is able to answer the question, then p2 will get the points, if he couldn’t then p1 will be getting the points. Then p2 will be given chance to pose a question to others. This will continue for a time limit.

                    </p>


                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(20,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  22. Engadget Contest Description Part 1 -->
        <div class="pt-page pt-page-22" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Engadget</h1>
                <div class="event-intro" style="color: black;">
                    <p>Some Intresting Description of Engadget </p>
                    <p>
                        Anything more. </p>


                    <button type="button" class="btn btn-info" onclick="pageTransition(23,-1)">Details</button>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>


            <div class="arrow btm-rht"> <a href="#" onclick="pageTransition(23,-1)"><span class="fa fa-arrow-circle-down fa-3x"></span></a> </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(6,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(20,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!-- 23. Engadget Contest Description Part 2 -->
        <div class="pt-page pt-page-23" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center"> Engadget Details </h1>
                <div class="event-intro" style="color: black; ">
                    <p> <b>First round - </b>It is an offline event (pen- paper). Multiple choice questions will be given.



                    </p>

                    <p>
                        <b>Second round-</b> This is a buzzer round contest where the questions will be asked based on the latest technologies.


                    </p>


                    <p style="padding-top: 30px;">
                        For details contact,
                        <br> Someone: 999999999
                        <br> Someone: : 999999999
                    </p>



                </div>
                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>




            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(22,-1)"><span class="fa fa-arrow-circle-up fa-3x"></span></a> </div>
        </div>

        <!--  24. Tech-no Tech Contest Description  -->
        <div class="pt-page pt-page-24" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Tech-no Tech</h1>
                <div class="event-intro" style="color: black;">
                    <p><b>Round1-</b> A word with blanks is given. Each blank should be answered with the given clue for which points will be given. For the number of clues taken to answer each blank credits given to that point will be reduced.</p>
                    <p>
                        <b>Round2-</b> This round will have a set of questions that has to be answered within a time limit.
                    </p>


                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(25,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(34,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  25. King Of Cards Contest Description -->
        <div class="pt-page pt-page-25" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">King Of Cards</h1>
                <div class="event-intro" style="color: black;">
                    <p><b>Round1-</b> A set of 10 blurred images will be given (images might be any IT company logo/ founder personality). Out of the 10 images 7 should be answered to clear the round 1.</p>
                    <p>
                        <b>Round2-</b> A set of color cards having different questions will be there, pick a card and questions will be asked accordingly.


                    </p>


                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(26,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(24,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  26. Quikr Contest Description Part 1 -->
        <div class="pt-page pt-page-26" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Quikr</h1>
                <div class="event-intro" style="color: black;">
                    <p><b>Round1-</b> Participant shall first pick a chit from a box of chits (specific category) and later they have to pick up all the words from another box of chits which would relate to the chit category picked up first. </p>
                    <p>
                        <b>Round2-</b>Simple C questions will be asked and the answers for those questions should be surfed from the box of chits.
                    </p>
                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(27,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(25,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  27. Who am I Contest Description Part 1 -->
        <div class="pt-page pt-page-27" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Who am I</h1>
                <div class="event-intro" style="color: black;">
                    <p>You got to roll the dice and set of questions will be asked as per the throw. A sample of questions is given as follows. </p>
                    <p>
                        Eg: I can find out the number of characters of a string
                        <br>Ans: strlen

                    </p>
                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(28,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(26,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  28. Spy C Contest Description Part 1 -->
        <div class="pt-page pt-page-28" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Spy C</h1>
                <div class="event-intro" style="color: black;">
                    <p><b>Round1-</b>In this round multiple choice questions on app logos, products and their usage, and on various platforms will be asked. </p>
                    <p>
                        <b>Round2-</b> In this round app logos will be displayed randomly for seconds and the contestants have to write the logos as many as they remember.
                    </p>
                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(29,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(27,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  29. Wrong Turn Contest Description Part 1 -->
        <div class="pt-page pt-page-29" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Wrong Turn</h1>
                <div class="event-intro" style="color: black;">
                    <p>This event would be tricky, participants have to answer the first question when the second question is asked and the flow continues. Whoever flows up with the questions till the last question and answer the first question after the last question wraps up the event</p>
                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(30,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(28,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  30. Smart Droid Contest Description Part 1 -->
        <div class="pt-page pt-page-30" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Smart Droid</h1>
                <div class="event-intro" style="color: black;">
                    <p>A Quiz App(android app) is built and the apps play store link is placed in the website (ACUMEN official website), people who wish to play has to download and register.</p>

                    <p><b>Round1-</b>After registration you’ll find round1 questions in the app, you need to answer them and if your score crosses the threshold score you will be promoted to round two. </p>
                    <p>
                        <b>Round2-</b>A clone of Round 1 with increase in difficulty level. These two rounds are offline (means offsite).
                    </p>
                    <p>
                        <b>Round3-</b>This is onsite you have to use the App and the round will be activated onsite and the team with fastest and highest score will win.
                    </p>

                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(31,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(29,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  31. CPU Assembly Contest Description Part 1 -->
        <div class="pt-page pt-page-31" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">CPU Assembly</h1>
                <div class="event-intro" style="color: black;">
                    <p>Disassembled CPU will be given and a small demo of how the CPU is connected is showed before dismantling. Later you have to reassemble the CPU in the shortest possible time.</p>


                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(32,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(30,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  32. Keyboard  Assembly Contest Description Part 1 -->
        <div class="pt-page pt-page-32" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Keyboard  Assembly</h1>
                <div class="event-intro" style="color: black;">
                    <p>Disassembled Keyboard will be given and the keyboard in connected state is showed before dismantling. Later you have to reassemble the Keyboard in the shortest possible time.</p>


                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(33,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(31,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>


        <!--  33. Guess Who Contest Description Part 1 -->
        <div class="pt-page pt-page-32" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">Guess Who</h1>
                <div class="event-intro" style="color: black;">

                    <p><b>Round1-</b>It is time based event, participants are given a puzzle which contains snippets of code or basic parts of computer or a logo they have to complete the remains. </p>
                    <p>
                        <b>Round2-</b>This round declares the winner based on as many questions answered by the team. The questions would relate to personality and name the product built by that person(Clues will be given to identify them).
                    </p>


                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(34,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(32,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>

        <!--  34. It's Appening Contest Description Part 1 -->
        <div class="pt-page pt-page-34" style="background-image: url(img/b-e1.png);">
            <div class="navcolor" style="background-color: #F0E68C;">

            </div>

            <div class="contains">
                <h1 style="text-align: center">It's Appening</h1>
                <div class="event-intro" style="color: black;">

                    <p><b>Round1-</b>In this round multiple choice questions on app logos, products and their usage, and on various platforms will be asked. </p>
                    <p>
                        <b>Round2-</b>In this round app logos will be displayed randomly for seconds and the contestants have to write the logos as many as they remember.
                    </p>


                </div>


                <div class="event-img">
                    <img src="img/opc_logo.png" alt="" width="300" height="184">
                </div>
            </div>

            <div class="arrow top-rht"> <a href="#" onclick="pageTransition(24,-1)"><span class="fa fa-arrow-circle-right fa-3x"></span></a> </div>

            <div class="arrow top-lft"> <a href="#" onclick="pageTransition(33,-1)"><span class="fa fa-arrow-circle-left fa-3x"></span></a> </div>
        </div>










    </div>
    <!-- main -->







    <div class="pt-message">
        <p>Your browser does not support CSS animations.</p>
    </div>




</body>



<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>

<script>
jssor_slider1_starter = function(containerId) {
    var _CaptionTransitions = [];
    _CaptionTransitions["L"] = {
        $Duration: 900,
        x: 0.6,
        $Easing: {
            $Left: $JssorEasing$.$EaseInOutSine
        },
        $Opacity: 2
    };
    _CaptionTransitions["R"] = {
        $Duration: 900,
        x: -0.6,
        $Easing: {
            $Left: $JssorEasing$.$EaseInOutSine
        },
        $Opacity: 2
    };
    _CaptionTransitions["T"] = {
        $Duration: 900,
        y: 0.6,
        $Easing: {
            $Top: $JssorEasing$.$EaseInOutSine
        },
        $Opacity: 2
    };
    _CaptionTransitions["B"] = {
        $Duration: 900,
        y: -0.6,
        $Easing: {
            $Top: $JssorEasing$.$EaseInOutSine
        },
        $Opacity: 2
    };
    _CaptionTransitions["ZMF|10"] = {
        $Duration: 900,
        $Zoom: 11,
        $Easing: {
            $Zoom: $JssorEasing$.$EaseOutQuad,
            $Opacity: $JssorEasing$.$EaseLinear
        },
        $Opacity: 2
    };
    _CaptionTransitions["RTT|10"] = {
        $Duration: 900,
        $Zoom: 11,
        $Rotate: 1,
        $Easing: {
            $Zoom: $JssorEasing$.$EaseOutQuad,
            $Opacity: $JssorEasing$.$EaseLinear,
            $Rotate: $JssorEasing$.$EaseInExpo
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 0.8
        }
    };
    _CaptionTransitions["RTT|2"] = {
        $Duration: 900,
        $Zoom: 3,
        $Rotate: 1,
        $Easing: {
            $Zoom: $JssorEasing$.$EaseInQuad,
            $Opacity: $JssorEasing$.$EaseLinear,
            $Rotate: $JssorEasing$.$EaseInQuad
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 0.5
        }
    };
    _CaptionTransitions["RTTL|BR"] = {
        $Duration: 900,
        x: -0.6,
        y: -0.6,
        $Zoom: 11,
        $Rotate: 1,
        $Easing: {
            $Left: $JssorEasing$.$EaseInCubic,
            $Top: $JssorEasing$.$EaseInCubic,
            $Zoom: $JssorEasing$.$EaseInCubic,
            $Opacity: $JssorEasing$.$EaseLinear,
            $Rotate: $JssorEasing$.$EaseInCubic
        },
        $Opacity: 2,
        $Round: {
            $Rotate: 0.8
        }
    };
    _CaptionTransitions["CLIP|LR"] = {
        $Duration: 900,
        $Clip: 15,
        $Easing: {
            $Clip: $JssorEasing$.$EaseInOutCubic
        },
        $Opacity: 2
    };
    _CaptionTransitions["MCLIP|L"] = {
        $Duration: 900,
        $Clip: 1,
        $Move: true,
        $Easing: {
            $Clip: $JssorEasing$.$EaseInOutCubic
        }
    };
    _CaptionTransitions["MCLIP|R"] = {
        $Duration: 900,
        $Clip: 2,
        $Move: true,
        $Easing: {
            $Clip: $JssorEasing$.$EaseInOutCubic
        }
    };

    var options = {
        $FillMode: 2,
        $AutoPlay: true,
        $AutoPlayInterval: 4000,
        $PauseOnHover: 1,
        $ArrowKeyNavigation: true,
        $SlideEasing: $JssorEasing$.$EaseOutQuint,
        $SlideDuration: 800,
        $MinDragOffsetToSlide: 20,
        //$SlideWidth: 600,                                 
        //$SlideHeight: 300,                               
        $SlideSpacing: 0,
        $DisplayPieces: 1,
        $ParkingPosition: 0,
        $UISearchMode: 1,
        $PlayOrientation: 1,
        $DragOrientation: 1,

        $CaptionSliderOptions: {
            $Class: $JssorCaptionSlider$,
            $CaptionTransitions: _CaptionTransitions,
            $PlayInMode: 1,
            $PlayOutMode: 3
        },

        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $ChanceToShow: 2,
            $Steps: 1,
            $Lanes: 1,
            $SpacingX: 8,
            $SpacingY: 8,
            $Orientation: 1,
            $Scale: false
        },

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $ChanceToShow: 1,
            $AutoCenter: 2,
            $Steps: 1
        }
    };

    var jssor_slider1 = new $JssorSlider$(containerId, options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizes
    function ScaleSlider() {
        var bodyWidth = document.body.clientWidth;
        if (bodyWidth)
            jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
        else
            $Jssor$.$Delay(ScaleSlider, 30);
    }

    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);

    $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    //responsive code end
};

jssor_slider1_starter('slider1_container');
</script>


<script type="text/javascript" src="js/work.js"></script>



</html>

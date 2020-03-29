<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!--Bootstrap Framwork-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Body of portfolio-->
    <link href="{{asset('css/portfolioBody.css')}}" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="content">
            <!--laravel code-->
            <div class="title">
                <!--Bootstrap Code-->
                <div class="alert" role="alert">
                    <?php
                    $str = array("My Introduction Begins Here");
                    echo $str[0];
                    ?>


                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron Jumbotrone">
        <div class="page-header">
            <div class="txtCollection">
                <div id="backgroundImage"></div>
                <!--BackgroundImage  Container-->
                <div id="rePostion">
                    <img class="img" id="selfi" src="/images/selfi.jpg" style="height: 320px">
                    <h1>Othman Adi :
                        <br>
                        <small>
                            i am a self tough Programmer From Hama,Syria
                        </small>
                    </h1>
                    <h3>
                        My mission in life is to Create and help
                    </h3>
                    <br>
                    ------
                    <br>
                    ------
                    <br>
                    ------
                    <br>
                    ------
                </div>
            </div>
        </div>
    </div>

    <!--Button Change Layout-->
    <div class="btn-group-sm Bgroup" role="group" aria-label="...">
        <button type="button" class="btn btn-default btnDefault" onclick="hideThecard(Cards)">Layout 1</button>
        <!--out for now !-> <button type="button" class="btn btn-default btnDefault" onclick="hidetheIICard(Cardz)">Layout 2</button>
    <end-->
    </div>

    <div class="card cardZ" id="Cardz">
        <!--My curriculum vitae-->
        <center>
            <h1>Hello world</h1>
        </center>
        <!--SLids-->
        <div class="BodyofSlideTwo">
            <div class="container ContainerOfslids">
                <ul id="slides">
                    <li class="slide showing">
                        <p id="NameofSlide">Slide 1</p>
                    </li>
                    <li class="slide">
                        <p id="NameofSlide2">Slide 2</p>
                    </li>

                </ul>
                <div class="buttons">
                    <button type="button" class="btn btn-default controls" id="previous">&lt;</button>

                    <button type="button" class="btn btn-default controls" id="pause">&#10074;&#10074;</button>

                    <button type="button" class="btn btn-default controls" id="next">&gt;</button>
                </div>
            </div>
        </div>
    </div>
    <!--CV-->
    <div class="card cardC" id="Cards">
        <!--My curriculum vitae-->
        <div class="cv">
            <div class="containFirstpic">
                <img class="firstPic" src="/images/cv.png" style="height:1550px ; width:550px">
            </div>
            <!--My curriculum vitae Slids-->
            <img class="secondPic" src="/images/cvII.png" style="height:1550px ; width:450px">
        </div>
        <div class="card-body CardBody">
            <div class="card-title">
                Got a Questione
                <i class="far fa-question-circle"></i>
                <a href="#" class="btn btn-light ">
                    <?php
                    echo "Mail Service"
                    ?>
                </a>
                <!--Links directing to Public Profiles-->
                <div class="box boxx">
                    <a href="https://soundcloud.com/tonie22"> <i class="fab fa-soundcloud" alt="To Soundcloud"></i></a>
                    <a href="https://github.com/mino-cmd"> <i class="fab fa-github-alt" alt="To GitHub"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--Empty Links to be used->
    <div class="links">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
<--end-->
    <script>
        var Cards = document.getElementById('Cards');

        function showDiv(Cards) {
            Cards.style.display = "inherit";
        }

        function closeDiv(Cards) {
            Cards.style.display = "none";
        }

        function hideThecard(Cards) {
            if (Cards.style.display === "inherit") {
                closeDiv(Cards),
                    /*change to second slide*/
                    showDiv(Cardz)
            } else {
                showDiv(Cards),
                    /*change to second slide*/
                    closeDiv(Cardz)
            }

        }

        var controls = document.querySelectorAll('.controls');
        for (var i = 0; i < controls.length; i++) {
            controls[i].style.display = 'inline-block';
        }

        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 5000);

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function previousSlide() {
            goToSlide(currentSlide - 1);
        }

        function goToSlide(n) {
            slides[currentSlide].className = 'slide';
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }


        var playing = true;
        var pauseButton = document.getElementById('pause');

        function pauseSlideshow() {
            pauseButton.innerHTML = '&#9658;'; // play character
            playing = false;
            clearInterval(slideInterval, );
        }

        function playSlideshow() {
            pauseButton.innerHTML = '&#10074;&#10074;'; // pause character
            playing = true;
            slideInterval = setInterval(nextSlide, );
        }

        pauseButton.onclick = function() {
            if (playing) {
                pauseSlideshow();
            } else {
                playSlideshow();
            }
        };
        var next = document.getElementById('next');
        var previous = document.getElementById('previous');

        next.onclick = function() {
            pauseSlideshow();
            nextSlide(nextSlide, );
        };
        previous.onclick = function() {
            pauseSlideshow();
            previousSlide();
        };

        //Control By JS Activation on Browser         
        var controls = document.querySelectorAll('.controls');
        for (var i = 0; i < controls.length; i++) {
            controls[i].style.display = 'inline-block';
        }
        //Slids wont be ListedOut in case of JS isnt Acivated
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.position = 'absolute';
        }
    </script>
    <!--later->
    <div class="classname">
        <//?php include("/path/to/file.html"); ?>
    </div>
    <--later-->
    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">@2020 copyright
        </div>

    </footer>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('blade-scafolding.partials.head')
</head>

<body>
    <ol class="breadcrumb" id="fixedtopHeader">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--Button Change Layout-->
                    <div class="btn-group-sm Bgroup" role="group" aria-label="...">
                        <p class="navbar-text">Take me to next layout!</p>
                        <button type="button" class="btn btn-default btnDefault" onclick="hideThecard(Cards)">Layout
                            1</button>
                        <!--out for now !-> <button type="button" class="btn btn-default btnDefault" onclick="hidetheIICard(Cardz)">Layout 2</button>
    <end-->
                    </div>
                </div>
            </div>
        </nav>
    </ol> <!-- Nav bar to contain Views-->
    <div class="container-fluid" id="container-fluid-for-content">
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
                    <img class="img" id="selfi" src="/assets/images/selfi.jpg" style="height: 320px">
                    <h1>Othman Adi :</h1>
                    <br>
                    <h3>
                        i am a self tough Programmer From Hama,Syria
                    </h3>
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
                    <a href="/Osteopage" target="_blank" rel="noopener noreferrer">
                        <button type="button" class="btn btn-default movetoOsteo">
                            <!--GO TO THE WEBSITE OSTEOAI.COM-->
                            <h1>Go to Osteo</h1>
                            <!--GO TO THE WEBSITE OSTEOAI.COM-->
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card cardZ" id="Cardz">
        <div class="buttons">
            <button type="button" class="btn btn-default controls playButton" id="previous">&lt;</button>

            <button type="button" class="btn btn-default controls playButton" id="pause">&#10074;&#10074;</button>

            <button type="button" class="btn btn-default controls playButton" id="next">&gt;</button>
        </div>
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
                    <li class="slide">
                        <p id="NameofSlide2">Slide 3</p>
                    </li>
                    <li class="slide">
                        <p id="NameofSlide2">Slide 4</p>

                    </li>
                    <p><code id="codeExample">
                            <div class="boxtheCode">
                                <p id="Displaybeneath">
                                    function showDiv(Cards) {
                                    Cards.style.display = "inherit";
                                    }
                        </code></p>
                    <p><code id="codeExample">function closeDiv(Cards) {
                            Cards.style.display = "none";
                            }</code>
                        <p><code id="codeExample">
                                var controls = document.querySelectorAll('.controls');</code></p>
                        <p><code
                                id="codeExample">for (var i = 0; i < controls.length; i++) { controls[i].style.display='inline-block' ; }</code>
                        </p>
                        <p><code
                                id="codeExample"> var slides=document.querySelectorAll('#slides .slide'); var currentSlide=0; var slideInterval=setInterval(nextSlide, 5000); function nextSlide()</code>
                        </p>
                        <p><code id="codeExample"> { goToSlide(currentSlide + 1); }</code></p>
                        <p>+HTML<br><code> div class="card cardZ" id="Cardz" </code>
                            <!--end of example-->
                </ul>
            </div>
        </div>
        </p>
    </div>
    </div>
    </div>
    <!--CV-->
    <iframe src="assets/CV.blade.php" id="Cards" class="parallax cardC" style="border: none"></iframe>
    <a class="tesxtUnderSlids">
        @include('blade-scafolding.partials.scripts')
        <!--NotUsedNoMore-- <div class="card cardC" id="Cards">
                            My curriculum vitae->
                            <div class="cv">
                                <div class="containFirstpic">
                                    <img class="firstPic" src="/assets/images/cv.png" style="height:1550px ; width:550px">
                                </div>
                                My curriculum vitae Slids->
                                <img class="secondPic" src="/assets/images/cvII.png" style="height:1550px ; width:450px">
                            </div>
                            Empty Links to be used->
                            <div class="links">
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                            </div>
                            <--end-->
        <!--later->
    <div class="classname">
        <//?php include("/path/to/file.html"); ?>
    </div>
    <--later-->
        @include('blade-scafolding.partials.footer')
        </div>

</body>

</html>
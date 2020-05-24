<!DOCTYPE html>
<html lang="en">
<title>HelloWorld</title>

<head>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.head')
</head>

<body>
    <ol class="breadcrumb" id="fixedtopHeader">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--Button Change Layout-->
                    <div class="btn-group-sm Bgroup" role="group" aria-label="...">
                        <p class="navbar-text whitecolor">Take me to next</p>
                        <button type="button" class="btn btn-dark btnDefault" onclick="()" value="Show image">
                            Layout!
                        </button>
                        <div class="card cardScrolldwon" style="padding:10px 10px 10px 10px;width:70%">↓ScrollDown↓
                        </div>
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
                    $str = array("Finally, Standing on its own Feet, my Website! :)");
                    echo $str[0];
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron JumbotroneClass">
        <div class="backgroundphoto"></div>
        <!--BackgroundImage  Container-->
        <div id="rePostion">

            <img class="img rounded" id="selfi" src="/assets/images/selfi.jpg" style="height: 320px">
            <div class="container" id="Containerintruduce">
                <h1 class="whitecolor">Othman Adi</h1>
                <br />
                <h3 class="whitecolor">
                    i am a self tough Programmer From<br /> Hama,Syria 🎓
                    <img class="PlaynextLayout" id="PlaynextLayout" src="" style="height: 320px">
                </h3>
                <h3 class="whitecolor">
                    <?php
                $str = array("♥Passion to Create and Help");
                echo $str[0];
                ?>
                </h3>
            </div>
            <br />
            <br />
            <div class="movemeUpLeft">
                <a href="/music" target="_blank" rel="noopener noreferrer">
                    <button type="button" class="btn btn-dark movetoOsteo">
                        <!--GO TO THE MusicGrid-->
                        <h3 class="whitecolor">Music</h3>
                        <!--GO TO THE MusicGrid-->
                    </button>
                </a>
                <br />
                <br />
                <a href="/Osteopage" target="_blank" rel="noopener noreferrer">
                    <button type="button" class="btn btn-dark movetoOsteo">
                        <!--GO TO THE WEBSITE OSTEOAI.COM-->
                        <h1 class="whitecolor">Go to Osteo.AI</h1>
                        <!--GO TO THE WEBSITE OSTEOAI.COM-->
                    </button>
                </a>
            </div>
            <p><code>Music</code> is where you can check out my music
                <p><code>OsteoAI</code> a Private project that i want to finished
        </div>
    </div>
    <!--CV-->
    <iframe src="assets/CV.blade.php" id="ResumeSheet" class="parallax cardC" style="border: none"></iframe>
    <!--Beauty Space-->
    <!--Beauty Space-->
    <!--Beauty Space-->
    @include('blade-scafolding.layout.sliderpage')

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
        </div>

        <!--SLids-->
    {{-- 
    <button type="button" class="btn btn-default controls" onclick="nextLayout()" id="previous">&lt;</button>
    <button type="button" class="btn btn-default controls" id="pause">&#10074;&#10074;</button>

    <button type="button" class="btn btn-default controls" id="next">&gt;</button> --}}
    {{-- 

    <div class="card cardZ" id="Cardz" style="background-color: #2c2b29">
        
    <div class="buttons">
        <button type="button" class="btn btn-default controls playButton" id="previous">&lt;</button>

        <button type="button" class="btn btn-default controls playButton" id="pause">&#10074;&#10074;</button>

        <button type="button" class="btn btn-default controls playButton" id="next">&gt;</button>
    </div>
        <!--My curriculum vitae-->
        <center>
            <p> please Click the Above Buttons to move to next Slide
                <h1>Sliding Resume</h1>
        </center>

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
                </ul>
            </div>
        </div>
    </div> --}}

    <!-- This section Explains some of my Javascript work into making the website-->
    <center>
        <code id="codeExample"
            style="background-color: rgba(38, 50, 59, 0.753); width:50%;color:rgb(209, 181, 181);font-size:18px">
             function showDiv(Cards) {
            Cards.style.display = "inherit";
            }
        function closeDiv(Cards) {
        Cards.style.display = "none";
        }</code>
        <code id="codeExample"
            style="background-color: rgba(38, 50, 59, 0.753); width:50%;color:rgb(209, 181, 181);font-size:18px">
            var controls = document.querySelectorAll('.controls');
        <br />
        for (var i = 0; i
        < controls.length; i++) { controls[i].style.display='inline-block' ; } var
            slides=document.querySelectorAll('#slides .slide'); var currentSlide=0; var
            slideInterval=setInterval(nextSlide, 5000); function nextSlide() <br />
        { goToSlide(currentSlide + 1); }
        +HTML<br /> div class="card cardZ" id="Cardz" </code>
    </center>
    <!--end of example-->
    <!--CV-->
    <!--Embeded Footer of Website-->
    @include('blade-scafolding.partials.footer')

</body>

</html>
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
                        <button type="button" class="btn btn-default btnDefault" onclick="hideThecard(Cards)">Layout 1</button>
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
                <img class="firstPic" src="/assets/images/cv.png" style="height:1550px ; width:550px">
            </div>
            <!--My curriculum vitae Slids-->
            <img class="secondPic" src="/assets/images/cvII.png" style="height:1550px ; width:450px">
        </div>
        <!--Empty Links to be used->
    <div class="links">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
    </div>
<--end-->
        @include('blade-scafolding.partials.scripts')
        <!--later->
    <div class="classname">
        <//?php include("/path/to/file.html"); ?>
    </div>
    <--later-->
        @include('blade-scafolding.partials.footer')
    </div>

</body>

</html>
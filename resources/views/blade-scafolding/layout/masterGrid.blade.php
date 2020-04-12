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
                        <p class="navbar-text">-->Take me back to main page</p>


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
                    $str = array("Music Pisces");
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
                    <img class="img" id="selfi" src="/assets/images/MusicGridProfilepicture.jpeg" style="height: 320px">
                    <h1>TonieXXII
                        <br>
                        <small>
                            collaborative & Original productions
                        </small>
                    </h1>
                    <h3>
                        people say it sounds like greenTea on a Softcouch
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

    <!--Empty Links to be used->
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

    <!--***************-->
    <!--Here comes the GRID-->
    <div class="container-fluid">
        <div class="card" id="cardofSoundcloud">
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <iframe width="100%" height="100%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/791443015&color=%23491da6&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                    <div class="well" style="color: white">
                        2020
                    </div>
                </div>
                <div class="col-xs-3 col-md-3 offset-md-4">
                    <iframe width="100%" height="150%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/785185321&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                    <div class="well" style="color: white">
                        2020
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-md-3 offset-md-3">
                    <iframe width="100%" height="100%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/232099575&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                    <div class="well" style="color: white">
                        2016
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--***************-->
    <!---End Of the GRID-->

    <!--**************FOOTER************-->
    @include('blade-scafolding.partials.footer')


</body>

</html>
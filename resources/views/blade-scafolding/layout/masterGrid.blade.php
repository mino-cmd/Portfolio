<!DOCTYPE html>
<html lang="en">
<title>Music Page</title>

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
                    <img class="img-fluid rounded" id="selfiGrid" src="/assets/images/MusicGridProfilepicture.jpeg"
                        style="height: 320px">
                    <h1>TonieXXII
                        <br />
                        <small>
                            collaborative & Original productions
                        </small>
                    </h1>
                    <h3>
                        people say it sounds like greenTea on a Softcouch
                    </h3>
                    <br />
                    ------
                    <br />
                    ------
                    <br />
                    <a href="/music" target="_blank" rel="noopener noreferrer">
                        <button type="button" class="btn btn-dark movetoOsteo">
                            <!--GO TO THE MusicGrid-->
                            <h3>Music</h3>
                            <!--GO TO THE MusicGrid-->
                        </button>
                    </a>
                    <br />
                    ------
                    <br />
                    <a href="/Osteopage" target="_blank" rel="noopener noreferrer">
                        <button type="button" class="btn btn-dark movetoOsteo">
                            <!--GO TO THE WEBSITE OSTEOAI.COM-->
                            <h1>Go to Osteo.AI</h1>
                            <!--GO TO THE WEBSITE OSTEOAI.COM-->
                        </button>
                    </a>
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
    <!---CSS in MasterGrid-->
    <div class="container mt-3" id="musicContainer">
        <div class="card" id="cardofSoundcloud">
            <div class="row" id="mainBorder">
                <!--Actual Column-->
                <div class="col-md-6">
                    <!---Box Shape-->
                    <div class="col-lg-10 align-self-start "> <a href="https://soundcloud.com/vhs2000/upset"
                            class="thumbnail">
                            <!--End of box-->
                            <iframe width="100%" height="40%" scrolling="no" frameborder="no" allow="autoplay"
                                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/791443015&color=%23491da6&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
                            </iframe></div>

                    <div class="col-md-10 ml-auto">
                        <!---Box Shape-->
                        <div class="col-lg-10 toPad"> <a href="https://soundcloud.com/vhs2000/upset" class="thumbnail">
                                <!--End of box-->
                                <iframe width="100%" height="30%" scrolling="no" frameborder="no" allow="autoplay"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/785185321&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
                                </iframe>

                        </div>
                    </div>
                    <div class="col-md-10 align-self-end">
                        <!---Box Shape-->
                        <div class="col-lg-10 toPad"> <a href="https://soundcloud.com/vhs2000/zojylgcvq86w"
                                class="thumbnail">
                                <!--End of box-->
                                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/795619648&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true">
                                </iframe>
                        </div>
                    </div>
                    <div class="col-sm-7 demo-content">
                        This Content was created in |2020|
                    </div>

                </div>
            </div>
            <div class="row offset-6" id="leftRowMusic">
                <!--Actual Column-->
                <div class="col-md-10 padleft">
                    <!---Box Shape-->
                    <div class="col-lg-10 align-self-start widenup"> <a href="https://soundcloud.com/tonie22/loyal"
                            class="thumbnail">
                            <!--End of box-->
                            <iframe width="200%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/265360794&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true">
                            </iframe>
                    </div>
                    <div class="col-md-10 ml-auto">
                        <!---Box Shape-->
                        <div class="col-lg-10 toPad widenup"> <a href="https://soundcloud.com/tonie22/metakalda"
                                class="thumbnail">
                                <!--End of box-->
                                <iframe width="200%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/268579700&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true">
                                </iframe>
                        </div>
                    </div>
                    <div class="col-md-10 align-self-end toPad widenup">
                        <!---Box Shape-->
                        <div class="col-lg-10"> <a href="https://soundcloud.com/tonie22/vhs-2000-warrior"
                                class="thumbnail">
                                <!--End of box-->
                                <iframe width="200%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/549259428&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true">
                                </iframe>
                        </div>
                    </div>
                    <div class="col-sm-9 demo-content ">
                        This Content was created in the past
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--*******End Of The Grid********-->
    <!--**FIRST COLUMN**\->
    <div class="col-xs-3 col-md-3 offset-md-2">
        <button style="color: orange" type="button" class="btn btn-default" data-toggle="tooltip" data-placemnet="right" title="none">
            <a href="https://soundcloud.com/vhs2000/upset" class="thumbnail">
                <iframe width="100%" height="40%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/791443015&color=%23491da6&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

            </a>
            <a href="https://soundcloud.com/vhs2000/ilikedals" class="thumbnail">
                <iframe width="100%" height="30%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/785185321&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

            </a>2020</button>
        <button style="color: orange" type="button" class="btn btn-default" data-toggle="tooltip" data-placemnet="left" title="none">
            <a href="https://soundcloud.com/tonie22/manufactured-without-addictive-additives" class="thumbnail">
                <iframe width="100%" height="30%" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/232099575&color=%235c39ba&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </a>2016
    </div>
    <-->
    <!---End Of the GRID-->

    <!--**************FOOTER************-->
    @include('blade-scafolding.partials.footer')


</body>

</html>
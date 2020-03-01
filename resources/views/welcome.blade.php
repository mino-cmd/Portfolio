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
    <script type="text/javascript" src="{{asset('css/javaScriptPortfolio.js')}}"></script>

</head>

<body>

    <div class="container-fluid">
        <div class="content">
            <!--laravel code-->
            <div class="title">
                <!--Bootstrap Code-->
                <div class="alert" role="alert">

                    My Introduction Begins Here

                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron Jumbotrone">
        <div class="page-header">
            <div class="txtCollection">
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

    <!--Button Change Layout-->
    <div class="btn-group-sm Bgroup" role="group" aria-label="...">
        <button type="button" class="btn btn-default btnDefault" onclick="hideThecard(Cards)">Layout 1</button>
        <!--out for now !-> <button type="button" class="btn btn-default btnDefault" onclick="hidetheIICard(Cardz)">Layout 2</button>
    <end-->
    </div>
    <!--CV-->
    <div class="card cardZ" id="Cardz">
        <!--My curriculum vitae-->
        <center>
            <h1>Hello world</h1>
        </center>
        <!--CV-->
        <div class="cvS2">
            <div class="containFirstpicS2"  id="showSlide1">
                <img class="firstPicS2" src="/images/cv.png" style="height:1550px ; width:550px">

            </div>
            <div class="containFirstpicS2" id="SwitchSlide">
                <img class="secondPicS2" src="/images/cvII.png" style="height:1550px ; width:450px">
            </div>
        </div>
        <!--Pagination-->
        <nav aria-label="pagination">
            <ul class="pagination">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span></a>
                <li class="page-item"><button onclick="Slidein(SwitchSLide)"> <a class="page-link">1</a></button></li>
                <!--Button to be Added later->  <li class="page-item"><button> <a class="page-link">2</a></button></li><end of Button-->
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&raquo;</span> </a>
            </ul>
            <img class="" src="">
        </nav>
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
                                Email me</a>
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

                    };

                    var SwitchSlide = document.getElementById('SwitchSlide');
                    var showSlide1 = document.getElementById('showSlide1');

                    function showSlide1(showSlide1){
                        SwitchSlide.style.display = "none";
                    }

                    function SwitchSlide2(SwitchSlide){
                        SwitchSlide.style.display = "block";
                    }

                    function SwitchSlide(SwitchSlide){
                        if (SwitchSlide.style.display === "none"){
                            showSlide1(showSlide1),
                            SwitchSlide2(SwitchSlide)
                        } else { SwitchSlide2(SwitchSlide),
                            showSlide1(showSlide1)
                        }
                    };
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
</body>

</html>
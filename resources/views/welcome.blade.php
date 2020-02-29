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
        <button type="button" class="btn btn-default btnDefault" onclick="hidetheIICard(Cardz)">Layout 2</button>
    </div>
    <!--CV-->
    <div class="card cardZ" id="Cardz">
        <!--My curriculum vitae-->
        <h1>Hello world</h1>
        <div class="">
            <div class="">
                <img class="" src="">
            </div>
            <!--My curriculum vitae-->
            <img class="" src="">
        </div>
    </div>
    <!--CV-->
    <div class="card cardC" id="Cards">
        <!--My curriculum vitae-->
        <div class="cv">
            <div class="containFirstpic">
                <img class="firstPic" src="/images/cv.png" style="height:1550px ; width:550px">
            </div>
            <!--My curriculum vitae-->
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
                closeDiv(Cards)
            } else {
                showDiv(Cards)
            }
        };
        /*this is the cond function*/


        var Cardz = document.getElementById('Cardz');

        function showDiv(Cardz) {
            Cardz.style.display = "inherit";
        }

        function closeDiv(Cardz) {
            Cardz.style.display = "none";
        }

        function hidetheIICard(Cardz) {
            if (Cardz.style.display === "inherit") {
                closeDiv(Cardz)
            } else {
                showDiv(Cardz)
            }
        };
    </script>
    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">@2020 copyright
        </div>

    </footer>

</body>

</html>
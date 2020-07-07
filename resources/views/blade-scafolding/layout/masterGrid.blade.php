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
@include('blade-scafolding.partials.footer')


</body>

</html>
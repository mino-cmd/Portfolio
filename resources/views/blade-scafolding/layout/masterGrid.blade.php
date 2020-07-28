<!DOCTYPE html>
<html lang="en">

<head>
    <title>Music Page</title>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.MusicGridHead')
    @include('blade-scafolding.partials.head')
</head>

<body>

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
{{--Here is the MUSIC GRID Build--}}
<div style="color: white">
    @include('blade-scafolding.layout.Listed_Music_Items')
</div>
{{--Here is the MUSIC GRID Build--}}
{{--**************--}}
@include('blade-scafolding.layout.RedirectsHome')
{{--My Dynamic page Footer--}}

@include('blade-scafolding.layout.footer')
{{--My Dynamic page Footer--}}

</body>

</html>
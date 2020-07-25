<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hello World</title>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.MainPageHeadLink')
    @include('blade-scafolding.partials.head')

</head>

<body>
<div class="container-fluid" id="container-fluid-for-content">
    <div class="content">
        <!--laravel code-->
        <div class="title">
            <!--Bootstrap Code-->
            <div class="alert" role="alert">
                @include('blade-scafolding.partials.MyArrays.ArrayPcked')
            </div>
        </div>

        {{--    SELFi : Under Construction --}}

        @include('blade-scafolding.layout.Selfi')
        {{--    SELFi --}}
    </div>
    @include('blade-scafolding.layout.sliderpage')
</div>
<!--My Embedded FOOTER-->
@include('blade-scafolding.layout.footer')
{{--TODO: Information about Music Page and Osteoai--}}
{{--            <div class="movemeUpLeft">--}}
{{--                <a href="/music" target="_blank" rel="noopener noreferrer">--}}
{{--                    <button type="button" class="btn btn-dark movetoOsteo">--}}
{{--                        <!--GO TO THE MusicGrid-->--}}
{{--                        <h3 class="whitecolor">Music</h3>--}}
{{--                        <!--GO TO THE MusicGrid-->--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--                <br />--}}
{{--                <br />--}}
{{--                <a href="/Osteopage" target="_blank" rel="noopener noreferrer">--}}
{{--                    <button type="button" class="btn btn-dark movetoOsteo">--}}
{{--                        <!--GO TO THE WEBSITE OSTEOAI.COM-->--}}
{{--                        <h1 class="whitecolor">Go to Osteo.AI</h1>--}}
{{--                        <!--GO TO THE WEBSITE OSTEOAI.COM-->--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <p><code>Music</code> is where you can check out my music--}}
{{--                <p><code>OsteoAI</code> a Private project that i want to finished--}}
</body>

</html>

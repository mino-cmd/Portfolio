<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome 🎈</title>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.MainPageHeadLink')
    @include('blade-scafolding.partials.head')
    @include('blade-scafolding.partials.ExtendCssOfLOADER')
    @include('blade-scafolding.Loader.Loader')
</head>

<body class="pd-fr-ng-spc">
<div class="container-fluid pd-fr-ng-spc" id="container-fluid-for-content">
    <div class="content">
        <!--laravel code-->
        <div class="title">
            <!--Bootstrap Code-->
            <div class="alert" role="alert">
                @include('blade-scafolding.partials.MyArrays.ArrayPcked')
            </div>
        </div>
        {{--    SELFi --}}
        @include('blade-scafolding.layout.Selfi')
        {{--    SELFi --}}
    </div>
    @include('blade-scafolding.layout.sliderpage')
</div>
@include('blade-scafolding.layout.Redirects')
{{--Switch div--}}
<div class="SwitchButtonDiv">
    {{--    *****************--}}
    {{--    Paging To project page --}}
    @include('blade-scafolding.layout.Paging')
</div>
<!--My Embedded FOOTER-->
@include('blade-scafolding.layout.footer')
</body>
</html>

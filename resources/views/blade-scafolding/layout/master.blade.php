<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome 🎈</title>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.MainPageHeadLink')
    @include('blade-scafolding.partials.head')
    @include('blade-scafolding.partials.ExtendCssOfLOADER')

</head>

<body>
<div class="container-fluid" id="container-fluid-for-content">
    @include('blade-scafolding.Loader.Loader')
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
{{----}}

<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
{{----}}
@include('blade-scafolding.layout.Redirects')
<!--My Embedded FOOTER-->
@include('blade-scafolding.layout.footer')

{{--    *****************--}}
{{--    Paging To project page --}}
@include('blade-scafolding.layout.Paging')
</body>
</html>

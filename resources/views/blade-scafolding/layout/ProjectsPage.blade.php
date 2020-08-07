<!DOCTYPE html>
<html lang="en">

<head>
    <title> Projects </title>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.MainPageHeadLink')
    @include('blade-scafolding.partials.head')
    @include('blade-scafolding.partials.ExtendCssOfLOADER')
</head>

<body>
@include('blade-scafolding.partials.MyArrays.Moto')
@include('blade-scafolding.Loader.Loader')
{{--    SELFi --}}
@include('blade-scafolding.layout.Selfi2')
{{--    SELFi --}}
{{----}}
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
{{----}}
{{--FOOTER--}}
@include('blade-scafolding.layout.footer')
{{--    Paging To project page --}}
@include('blade-scafolding.layout.Paging2')
@include('blade-scafolding.layout.Aliontheheat')
</body>
</html>
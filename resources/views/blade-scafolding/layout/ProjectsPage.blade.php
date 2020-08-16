<!DOCTYPE html>
<html lang="en">

<head>
    <title> Projects </title>
    @include('blade-scafolding.partials.Coookiee')
    @include('blade-scafolding.partials.MainPageHeadLink')
    @include('blade-scafolding.partials.head')
    @include('blade-scafolding.partials.ExtendCssOfLOADER')
    @include('blade-scafolding.partials.ExtendedFileForProjectPage')
</head>

<body>
@include('blade-scafolding.partials.MyArrays.Moto')
@include('blade-scafolding.layout.Aliontheheat')
@include('blade-scafolding.layout.VideoJumbotron')

{{--    SELFi --}}
@include('blade-scafolding.layout.Selfi2')
{{--    SELFi --}}
{{--FOOTER--}}
@include('blade-scafolding.layout.footer')
{{--    Paging To project page --}}
@include('blade-scafolding.layout.Paging2')
</body>
</html>
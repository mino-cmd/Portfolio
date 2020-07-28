
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
@include('blade-scafolding.layout.Redirects')
<!--My Embedded FOOTER-->
@include('blade-scafolding.layout.footer')
</body>
</html>

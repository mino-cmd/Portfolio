@include('blade-scafolding.partials.head')
@include('blade-scafolding.partials.motocss')
<html lang="en">

<body>
    <p id="loader" class="display-2 text-light card-body" style="background-color: #2c2b29;">
        @php
        $_moto = "If you love what you do you will love to push what you love";
        echo $_moto;
        @endphp
    </p>
</body>
<script>
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $("#loader").animate({
            top: -1000
        }, 8000);
    });
</script>

</html>
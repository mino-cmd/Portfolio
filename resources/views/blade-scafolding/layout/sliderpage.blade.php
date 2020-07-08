@include('blade-scafolding.partials.slidestyleLINK')

{{--Start--}}
{{--Here we Build the Container for the Menue and slides--}}
<div class="container-fluid container-sm" id="_ContainerFluid_OfSlides">
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <p class="navbar-brand" href="#" style="cursor: default;">Lists</p>
        <ul class="navbar-nav">
            <li class="nav-item CertificateButton" id="ListTextContainer">
                <button id="CertificatesClass"
                        style=" background-color: transparent ;border: none"> Certificates /
                </button>
            </li>
            <li class="nav-item JobXButton" id="ListTextContainer">
                <button id="ArbeitClass"
                        style=" background-color: transparent ;border: none"> Arbeitserfahrung /
                </button>
            </li>
            <li class="nav-item BildungButton" id="ListTextContainer">
                <button id="BildungsClass"
                        style="background-color: transparent ;border: none"> Bildung /
                </button>
            </li>
            <li class="nav-item SklizSprechenButton" id="ListTextContainer">
                <button id="SklzUSprechenClass"
                        style="background-color: transparent; border: none"> Skills & Sprachen /
                </button>
            </li>
        </ul>
    </nav>
</div>
<article id="cc-slider">
    <input checked="checked" name="cc-slider" id="slide1" type="radio">
    <input name="cc-slider" id="slide2" type="radio">
    <input name="cc-slider" id="slide3" type="radio">
    <input name="cc-slider" id="slide4" type="radio">
    <input name="cc-slider" id="slide5" type="radio">
    <div id="cc-slides">
        <div id="overflow">
            <div class="inner ">
                <article>

                    <img class="FirstSLids" src="/assets/images/1.jpg">
                </article>
                <article>

                    <img class="FirstSLids" src="/assets/images/2.jpg">
                </article>
                <article>

                    <img class="FirstSLids" src="/assets/images/3.jpg">
                </article>
                <article>

                    <img class="FirstSLids" src="/assets/images/4.jpg">
                </article>

                <article>

                    <img class="SecondSlides" src="/assets/images/1.jpg">
                </article>
                <article>

                    <img class="SecondSlides" src="/assets/images/2.jpg">
                </article>
                <article>

                    <img class="SecondSlides" src="/assets/images/3.jpg">
                </article>
                <article>

                    <img class="SecondSlides" src="/assets/images/4.jpg">
                </article>
                <article>

                    <img class="ThirdSlide" src="/assets/images/1.jpg">
                </article>
                <article>

                    <img class="ThirdSlide" src="/assets/images/2.jpg">
                </article>
                <article>

                    <img class="ThirdSlide" src="/assets/images/3.jpg">
                </article>
                <article>

                    <img class="ThirdSlide" src="/assets/images/4.jpg">
                </article>
                <article>

                    <img class="FourthSlide" src="/assets/images/1.jpg">
                </article>
                <article>

                    <img class="FourthSlide" src="/assets/images/2.jpg">
                </article>
                <article>

                    <img class="FourthSlide" src="/assets/images/3.jpg">
                </article>
                <article>

                    <img class="FourthSlide" src="/assets/images/4.jpg">
                </article>

            </div>
        </div>
    </div>
    <div id="controls">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
</article>

<script>
    $(document).ready(function () {
        $('.CertificateButton').on("click", function (e) {
            $('.FirstSLids').toggle('');
        });
    });

    $(document).ready(function () {
        $('.JobXButton').on("click", function (e) {
            $('.SecondSlides').toggle('');
        });
    });
    $(document).ready(function () {
        $('.BildungButton').on("click", function (e) {
            $('.ThirdSlide').toggle('');
        });
    });

    $(document).ready(function () {
        $('.SklizSprechenButton').on("click", function (e) {
            $('.FourthSlide').toggle('');
        });
    });
</script>

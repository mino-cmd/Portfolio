@include('blade-scafolding.partials.slidestyleLINK')

{{--Start--}}
{{--Here we Build the Container for the Menue and slides--}}
<div class="container-fluid container-sm" id="_ContainerFluid_OfSlides">
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <p class="navbar-brand" href="#" style="cursor: default;">Lists</p>
        <ul class="navbar-nav">
            <a href="#" onclick="toggler('CertiClick');">
                <li class="nav-item CertificateButton" id="ListTextContainer">
                    <button id="CertificatesClass"
                            style=" background-color: transparent ;border: none"> Certificates /
                    </button>
                </li>
            </a>
            <a href="#" onclick="toggler('ArbeitsClick');">
                <li class="nav-item JobXButton" id="ListTextContainer">
                    <button id="ArbeitClass"
                            style=" background-color: transparent ;border: none"> Arbeitserfahrung /
                    </button>
                </li>
            </a>
            <a href="#" onclick="toggler('Bildungsclick');">
                <li class="nav-item BildungButton" id="ListTextContainer">
                    <button id="BildungsClass"
                            style="background-color: transparent ;border: none"> Bildung /
                    </button>
                </li>
            </a>
            <a href="#" onclick="toggler('SklizSprechenClick');">
                <li class="nav-item SklizSprechenButton" id="ListTextContainer">
                    <button id="SklzUSprechenClass"
                            style="background-color: transparent; border: none"> Skills & Sprachen /
                    </button>
                </li>
            </a>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row align-items-start" id="CertiClick">
            <div class="row">
                <div class="col" style="color: white">
                    One of three columns
                    <li class="media">
                        <img class="mr-3" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                    </li>
                </div>
                <div class="col" style="color: white">
                    One of three columns
                    <li class="media">
                        <img class="mr-3" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                    </li>
                </div>
                <div class="col" style="color: white;">
                    One of three columns
                    <li class="media">
                        <img class="mr-3" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-start" id="ArbeitsClick">
        <div class="row">
            <div class="col" style="color: white">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
            <div class="col" style="color: white">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
            <div class="col" style="color: white;">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>
    </div>
    <div class="row align-items-start" id="Bildungsclick">
        <div class="row">
            <div class="col" style="color: white">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
            <div class="col" style="color: white">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
            <div class="col" style="color: white;">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>
    </div>

    <div class="row align-items-start" id="SklizSprechenClick">
        <div class="row">
            <div class="col" style="color: white">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
            <div class="col" style="color: white">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
            <div class="col" style="color: white;">
                One of three columns
                <li class="media">
                    <img class="mr-3" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>
    </div>
</div>

{{--    SELFi --}}
<!-- Right-aligned media object -->
<div class="media">
    <div class="media-body">
    </div>
    <div class="media-right">
        <img src="/assets/images/Selfi.png" class="media-object" style="width:300px">
    </div>
</div>

{{--    SELFi --}}
<script>

    function toggler(divId) {
        $("#" + divId).toggle();

    }
</script>
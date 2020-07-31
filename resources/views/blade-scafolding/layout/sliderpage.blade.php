@include('blade-scafolding.partials.slidestyleLINK')

{{--Start--}}
{{--Here we Build the Container for the Menue and slides--}}
<div class="container-fluid" id="_ContainerFluid_OfSlides">
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <!--suppress JSUnresolvedFunction -->
        <p class="navbar-brand" href="#" style="cursor: default;">
            <button onclick="ToggleAll('divId');" class="btn" style="color: white;"> List All</button>
        </p>
        <ul class="navbar-nav Ul">
            <!--suppress JSUnresolvedFunction -->
            <a href="#" onclick="TogglerCerti('CertiClick');">
                <li class="nav-item CertificateButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="CertificatesClass"
                            style=" background-color: transparent ;border: none"> Certificates /
                    </button>
                </li>
            </a>
            <!--suppress JSUnresolvedFunction -->
            <a href="#" onclick="ToggleArbeits('ArbeitsClick');">
                <li class="nav-item JobXButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="ArbeitClass"
                            style=" background-color: transparent ;border: none"> Arbeitserfahrung /
                    </button>
                </li>
            </a>
            <!--suppress JSUnresolvedFunction -->
            <a href="#" onclick="ToggleBildungs('Bildungsclick');">
                <li class="nav-item BildungButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="BildungsClass"
                            style="background-color: transparent ;border: none"> Bildung /
                    </button>
                </li>
            </a>
            <!--suppress JSUnresolvedFunction -->
            <a href="#" onclick="ToggleSklizSprechen('SklizSprechenClick');">
                <li class="nav-item SklizSprechenButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="SklzUSprechenClass"
                            style="background-color: transparent; border: none"> Skills & Sprachen /
                    </button>
                </li>
            </a>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-0" id="CertiClick">
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/adiothman_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/third_certificate__1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/Untitled_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
            <div class="col-sm-offset-0" id="ArbeitsClick">
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/Greenhouse_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/Siemens_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/Durstexpress_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
            <div class="col-sm-offset-2" id="Bildungsclick">
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/2.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/3.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
            <div class="col-sm-offset-3" id="SklizSprechenClick">
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/Deutsche_kurse_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/SlideImages/live_Ton_mischung_1.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0" src="/assets/images/2.jpg" alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
        </div>
    </div>
</div>


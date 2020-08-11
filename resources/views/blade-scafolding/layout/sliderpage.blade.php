@include('blade-scafolding.partials.slidestyleLINK')
{{--Start--}}
{{--Here we Build the Container for the Menue and slides--}}
<div class="container-fluid" id="_ContainerFluid_OfSlides">
    <nav class="navbar navbar-dark navbar-expand-sm _ChangeNav">
        <!--suppress JSUnresolvedFunction -->
        <a href="#" onclick="ToggleAll();" class="btn btn-sm btn-secondary"
           style="cursor: default; color: white;"> List All</a>
        <ul class="navbar-nav Ul">
            <!--suppress JSUnresolvedFunction -->
            <a href="#" onclick="TogglerCerti('CertiClick');">
                <li class="nav-item CertificateButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="CertificatesClass"
                            style=" background-color: transparent ;border: none"> Zertifikate /
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
                            style="background-color: transparent ;border: none"> Bildung
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
                    <img class="p-0 flipLeft" src="/assets/images/SlideImages/Intermidiate_Java_OpenHPI__1.jpg"
                         alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0 flipLeft"
                         src="/assets/images/SlideImages/High_School_sector__Computer_Science__1.jpg"
                         alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
            <div class="col-sm-offset-0" id="ArbeitsClick">
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0 flipLeft" src="/assets/images/SlideImages/Greenhouse_1.jpg"
                         alt="Generic placeholder image"
                         style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0 flipLeft" src="/assets/images/SlideImages/Durstexpress_1.jpg"
                         alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
            <div class="col-sm-offset-2" id="Bildungsclick">
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0 flipRight" src="/assets/images/SlideImages/Folkwang_Universitt_der_Knste_1.jpg"
                         alt="Generic placeholder image" style="max-width: 100%">
                </li>
                <li class="media">
                    <!--suppress HtmlUnknownTarget -->
                    <img class="p-0 flipRight" src="/assets/images/SlideImages/BAMF_Integrationkurs__1.jpg"
                         alt="Generic placeholder image" style="max-width: 100%">
                </li>
            </div>
        </div>
    </div>
</div>
@include('blade-scafolding.partials.slidestyleLINK')

{{--Start--}}
{{--Here we Build the Container for the Menue and slides--}}
<div class="container-fluid" id="_ContainerFluid_OfSlides">
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <p class="navbar-brand" href="#" style="cursor: default;">Lists</p>
        <ul class="navbar-nav">
            <a href="#" onclick="ToggleCards('CertiClick');">
                <li class="nav-item CertificateButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="CertificatesClass"
                            style=" background-color: transparent ;border: none"> Certificates /
                    </button>
                </li>
            </a>
            <a href="#" onclick="ToggleCards('ArbeitsClick');">
                <li class="nav-item JobXButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="ArbeitClass"
                            style=" background-color: transparent ;border: none"> Arbeitserfahrung /
                    </button>
                </li>
            </a>
            <a href="#" onclick="ToggleCards('Bildungsclick');">
                <li class="nav-item BildungButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="BildungsClass"
                            style="background-color: transparent ;border: none"> Bildung /
                    </button>
                </li>
            </a>
            <a href="#" onclick="ToggleCards('SklizSprechenClick');">
                <li class="nav-item SklizSprechenButton" id="ListTextContainer">
                    <button value="Yes" type="button" id="SklzUSprechenClass"
                            style="background-color: transparent; border: none"> Skills & Sprachen /
                    </button>
                </li>
            </a>
        </ul>
    </nav>
    <div class="row">
        <div class="col-sm-offset-0" id="CertiClick">
            <div class="container-fluid">
                One of three columns
                <li class="media">
                    <img class="p-0" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>
        <div class="col-sm-offset-1" id="ArbeitsClick">
            <div class="container-fluid">
                One of three columns
                <li class="media">
                    <img class="p-0" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>
        <div class="col-sm-offset-2" id="Bildungsclick">
            <div class="container-fluid">
                One of three columns
                <li class="media">
                    <img class="p-0" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>
        <div class="col-sm-offset-3" id="SklizSprechenClick">
            <div class="container-fluid">
                One of three columns
                <li class="media">
                    <img class="p-0" src="/assets/images/1.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/2.jpg" alt="Generic placeholder image"/>
                </li>
                <li class="media">
                    <img class="p-0" src="/assets/images/3.jpg" alt="Generic placeholder image"/>
                </li>
            </div>
        </div>

        <script>

            function ToggleCards(divId) {
                $("#" + divId).toggle();
            }

            //
            // function CertiToggle(CertificatesClass) {
            //     var showCertiboard = document.getElementById("CertiClick");
            //     if (CertificatesClass.value === "Yes") {
            //         showCertiboard.style.display = "block";
            //         CertificatesClass.value = "No";
            //     } else{
            //         showCertiboard.style.display= "none";
            //         CertificatesClass.value="Yes";
            //     }
            // }
            // function Arbeitstoggle(ArbeitClass) {
            //     var showCertiboard = document.getElementById("ArbeitsClick");
            //     if (ArbeitClass.value === "Yes") {
            //         showCertiboard.style.display = "block";
            //         ArbeitClass.value = "No";
            //     }else{
            //         showCertiboard.style.display="none";
            //         ArbeitClass.value="Yes";
            //     }
            // }
            // function BildungsToggle(BildungsClass) {
            //     var showCertiboard = document.getElementById("ArbeitsClick");
            //     if (BildungsClass.value === "Yes") {
            //         showCertiboard.style.display = "block";
            //         BildungsClass.value = "No";
            //     }else{
            //         showCertiboard.style.display="none";
            //         BildungsClass.value="Yes";
            //     }
            // }
            // function SkillsuSprchToggle(SklzUSprechenClass) {
            //     var showCertiboard = document.getElementById("ArbeitsClick");
            //     if (SklzUSprechenClass.value === "Yes") {
            //         showCertiboard.style.display = "block";
            //         SklzUSprechenClass.value = "No";
            //     }else{
            //         showCertiboard.style.display="none";
            //         SklzUSprechenClass.value="Yes";
            //     }
            // }
        </script>
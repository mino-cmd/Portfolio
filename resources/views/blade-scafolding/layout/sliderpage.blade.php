@include('blade-scafolding.partials.slidestyleLINK')

{{--Start--}}
{{--Here we Build the Container for the Menue and slides--}}
<div class="container-fluid" id="_ContainerFluid_OfSlides">
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <p class="navbar-brand" href="#" style="cursor: default;">Lists</p>
        <ul class="navbar-nav Ul">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-0" id="CertiClick">
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
            <div class="col-sm-offset-1" id="ArbeitsClick">
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
            <div class="col-sm-offset-2" id="Bildungsclick">
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
            <div class="col-sm-offset-3" id="SklizSprechenClick">
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
    </div>
</div>
<script>

    function ToggleCards() {
        // $("#" + divId).toggle();
        //This is the Slids
        // ******************************
        var ShowCertiCards = document.getElementById("CertiClick");
        var ShowArbeitsCards = document.getElementById("ArbeitsClick");
        var ShowBildungsCards = document.getElementById("Bildungsclick");
        var ShowotherCards = document.getElementById("SklizSprechenClick");
        //This is the Button Click
        // ******************************
        var _CertificatesClass = document.getElementById("CertificatesClass");
        var _ArbeitClass = document.getElementById("ArbeitClass");
        var _BildungsClass = document.getElementById("BildungsClass");
        var _SklzUSprechenClass = document.getElementById("SklzUSprechenClass");


        if (_CertificatesClass.value === "Yes") {
            ShowCertiCards.style.display = "Block";
            _CertificatesClass.value = "No";
        } else {
            ShowCertiCards.style.display = "None";
            _CertificatesClass.value = "Yes";
        }

        if (_ArbeitClass.value === "Yes") {
            ShowArbeitsCards.style.display = "Block";
            _ArbeitClass.value = "No";
        } else {
            ShowArbeitsCards.style.display = "none";
            _ArbeitClass.value = "Yes";
        }
        if (_BildungsClass.value === "Yes") {
            ShowBildungsCards.style.display = "Block";
            _BildungsClass.value = "No";
        } else {
            ShowBildungsCards.style.display = "none";
            _BildungsClass.value = "Yes";
        }
        if (_SklzUSprechenClass.value === "Yes") {
            ShowotherCards.style.display = "Block";
            _SklzUSprechenClass.value = "No";
        } else {
            ShowotherCards.style.display = "none";
            _SklzUSprechenClass.value = "Yes";
        }
    }

</script>
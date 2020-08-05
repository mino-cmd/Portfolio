//
// $(document).ready(function () {
//     $('.btnWORK').on("click", function (e) {
//         $('.myImg').toggle('');
//     });
// });

function TogglerCerti() {
    // $("#" + divId).toggle();
    const ShowCertiCards = document.getElementById("CertiClick");
    const _CertificatesClass = document.getElementById("CertificatesClass");


    if (_CertificatesClass.value === "Yes") {
        ShowCertiCards.style.display = "Block";
        _CertificatesClass.value = "No";
    } else {
        ShowCertiCards.style.display = "None";
        _CertificatesClass.value = "Yes";
    }
}

function ToggleArbeits() {
    const ShowArbeitsCards = document.getElementById("ArbeitsClick");
    const _ArbeitClass = document.getElementById("ArbeitClass");
    if (_ArbeitClass.value === "Yes") {
        ShowArbeitsCards.style.display = "Block";
        _ArbeitClass.value = "No";
    } else {
        ShowArbeitsCards.style.display = "None";
        _ArbeitClass.value = "Yes";
    }
}

function ToggleBildungs() {
    const ShowBildungsCards = document.getElementById("Bildungsclick");
    const _BildungsClass = document.getElementById("BildungsClass");
    if (_BildungsClass.value === "Yes") {
        ShowBildungsCards.style.display = "Block";
        _BildungsClass.value = "No";
    } else {
        ShowBildungsCards.style.display = "None";
        _BildungsClass.value = "Yes";
    }
}

function ToggleSklizSprechen() {
    const ShowotherCards = document.getElementById("SklizSprechenClick");
    const _SklzUSprechenClass = document.getElementById("SklzUSprechenClass");
    if (_SklzUSprechenClass.value === "Yes") {
        ShowotherCards.style.display = "Block";
        _SklzUSprechenClass.value = "No";
    } else {
        ShowotherCards.style.display = "None";
        _SklzUSprechenClass.value = "Yes";
    }
}

function ToggleAll() {
    const Element1 = document.getElementById("CertiClick");
    const Element2 = document.getElementById("ArbeitsClick");
    const Element3 = document.getElementById("Bildungsclick");
    const Element4 = document.getElementById("SklizSprechenClick");

    const ElementClicked = document.getElementsByClassName("btn-secondary");

    if (ElementClicked.value === "Yes") {
        Element1.style.display = "Block";
        Element2.style.display = "Block";
        Element3.style.display = "Block";
        Element4.style.display = "Block";
        ElementClicked.value = "No";
    } else {
        Element1.style.display = "None";
        Element2.style.display = "None";
        Element3.style.display = "None";
        Element4.style.display = "None";
        ElementClicked.value = "Yes";
    }
}

//
//
//
$(window).on("load", function () {
    $(".loader-wrapper").fadeOut("slow");
});
END
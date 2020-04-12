var Cards = document.getElementById('Cards');

function showDiv(Cards) {
    Cards.style.display = "inherit";
}

function closeDiv(Cards) {
    Cards.style.display = "none";
}

function hideThecard(Cards) {
    if (Cards.style.display === "inherit") {
        closeDiv(Cards)
    } else {
        showDiv(Cards)
    }
};
/*this is the cond function*/


var Cardz = document.getElementById('Cardz');

function showDiv(Cardz) {
    Cardz.style.display = "inherit";
}

function closeDiv(Cardz) {
    Cardz.style.display = "none";
}

function hidetheIICard(Cardz) {
    if (Cardz.style.display === "inherit") {
        closeDiv(Cardz)
    } else {
        showDiv(Cardz)
    }
};
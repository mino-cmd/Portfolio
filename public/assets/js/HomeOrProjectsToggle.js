function clickinner() {
    const x = document.getElementById("Checky");
    if (x === true) {
        window.location.href = '/';
    } else {
        window.location.href = '/ProjectsPage';
    }
}

function clickinner2() {
    const y = document.getElementById("Checky2");
    if (y === true) {
        window.location.href = '/ProjectsPage';
    } else {
        window.location.href = '/';

    }
}

//TODO: Test Action
//
// function JSme() {
//     $('ThestrapsJStoggle').bootstrapToggle({
//         on: 'true';
//         off: 'false';
//     })
// }
function menuCollapse() {
    var x = document.getElementById("navToggle");
    if (x.className === "notClicked") {
        x.className = "clicked";
        document.getElementById("navToggle-btn").innerHTML = "X";
    } else {
        x.className = "notClicked";
        document.getElementById("navToggle-btn").innerHTML = "&#9776;";
    }
};
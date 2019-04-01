//Menu toggle

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

function postBackgroundSwitch() {
	var x = document.getElementsByClassName("postWrapper");
	var i; 
	for (i = 1; i < x.length; i += 2) {
		x[i].classList.add("alternateBackground");
	}
};

window.onload = postBackgroundSwitch();
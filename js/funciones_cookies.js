function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }

    return "";
}

function checkCookie() {
    var user = getCookie("username");

        user = document.getElementById("name").value;
        if (user != "" && user != null) {
            setCookie("username", user, 30);
            location.reload();
    }
}


if (sessionStorage.c) {
    sessionStorage.c = parseInt(sessionStorage.c) + 1;
} else {
    sessionStorage.c = 1;
}
function miraDatos () {
    var user = getCookie("username");

    if (user != "") {
        var info = document.getElementById("info");
        var nameinfo = document.getElementById("nameinfo");
        var nameinfo1 = document.getElementById("nameinfo1");
        info.style.display = "none";
        nameinfo1.style.display = "block";
        if(sessionStorage.c<=2){
        nameinfo.innerHTML = "Welcome " + user;
            }
        if(sessionStorage.c>2){
        nameinfo.innerHTML = "Welcome again " + user;
            }
    }
    else{
        checkCookie();
    }
}
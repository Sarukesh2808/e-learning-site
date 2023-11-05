function validate() {
    var u = document.getElementById("u").value;
    var p = document.getElementById("p").value;
    var z = document.getElementById("e").value;






    if (u.length < 3 || u.length > 12) {
        alert("User name length should be between 3 and 12");
        return false;
    }

    if (p.length < 3 || p.length > 12) {
        alert("Password length should be between 3 and 12");
        return false;
    }

    var n = z.indexOf(".");
    var m = z.indexOf("@")
    if (n == -1 || m == -1) {

        alert("Include @ and .");
        return false;
    }
    if (m >= n) {
        alert("Include @ before .");
        return false;
    }
}
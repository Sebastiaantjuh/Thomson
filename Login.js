// COMMENT

console.log("JavaScript gekoppeld");

function showpassword() {
    var x = document.getElementById("wachtwoord");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}



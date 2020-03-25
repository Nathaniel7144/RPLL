user = {
    name: "John",
    gender: 0,
    position: ""
} // will be accepted from server later

$(document).ready(function () {
    changeUIIfUserExists();
})

function changeUIIfUserExists() {
    // if user exists: display name, determine title,
    // email -> password
    if (user !== undefined) {
        emailToPasswordInput();
    }
}

function emailToPasswordInput() {
    $("#login__input").attr({
        type: "password",
        placeholder: "Password"
    });
    $("#login__ic").attr({
        src: "../asset/ic_lock.png",
        width: "19px",
        height: "19px"
    });
}
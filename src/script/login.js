// user = {
//    name: "Alex",
//    gender: 0,
//    position: "Admin"
// } // will be accepted from server later

user = undefined

$(document).ready(function () {
    userView = new UserView(user);
    changeUIIfUserExists();
})

function changeUIIfUserExists() {
    // if user exists: display name, determine title, change avatar if necessary
    // email -> password
    if (user !== undefined) {
        emailToPasswordInput();
        userView.setAvatar();
        userView.displayUsername();
    }
}

function emailToPasswordInput() {
    // change email to password input if user is not undefined
    $("#login__input").attr({
        type: "password",
        placeholder: "Password"
    });
    $("#login__ic").attr("src", userView.ASSET + "ic_lock.png");
}
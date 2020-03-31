//user = {
//    name: "Alex",
//    gender: 0,
//    position: "Admin"
//} // will be accepted from server later

user = undefined

TITLEANDPHOTO = {
    Doctor: {
        title: "Dr. "
    },
    Nurse: {
        title: "Nurse "
    },
    General: {
        0: {
            title: "Mr. "
        },
        1: {
            title: "Ms. "
        }
    }
}

ASSET = "../asset/";

$(document).ready(function () {
    changeUIIfUserExists();
})

function changeUIIfUserExists() {
    // if user exists: display name, determine title,
    // email -> password
    if (user !== undefined) {
        emailToPasswordInput();
        user.position = generalizePosition(user.position);
        displayUsername(
            getTitle(user.gender, user.position) +
            user.name
        );
        setAvatar(user.position, user.gender);
    }
}

function emailToPasswordInput() {
    // change email to password input if user is not undefined
    $("#login__input").attr({
        type: "password",
        placeholder: "Password"
    });
    $("#login__ic").attr("src", ASSET + "ic_lock.png");
}

function generalizePosition(position){
    // function to change admin/HR/Cashier -> General
    return ((!(position === "Doctor" || position === "Nurse")))?
        "General" : position;
}

function getTitle(gender, position){
    // Mr., Ms., ...
    return getDataByPositionGender(
        position, gender
    )["title"];
}

function getDataByPositionGender(position, gender){
    // Access TITLEANDPHOTO tree
    return (position === "General")?
        TITLEANDPHOTO[position][gender]:
        TITLEANDPHOTO[position];
}

function displayUsername(name){
    // method to display username if user has provided email
    $("#login__name").text(name);
}

function setAvatar(position, gender){
    // method that will set avatar
    $("#login__avatar__img").attr(
        "src", ASSET + position.toLowerCase() +
        "_" + ((gender === 0)? "male" : "female") + ".jpg"
    );
}
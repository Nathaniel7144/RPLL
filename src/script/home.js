// Script for home.html. This page can only be entered if user exists

user = {
   name: "Alex",
   gender: 1,
   position: "Doctor"
}

$(document).ready(function () {
    userView = new UserView(user);

    userView.setAvatar();
    userView.displayUsername();

    // profile pencil icon
    $("#edit-profile").hover(function(){
        $("#avatar__ic_edit").attr('src', "../asset/ic_edit_hover.png");
    });

    $("#edit-profile").mouseleave(function(){
        $("#avatar__ic_edit").attr('src', "../asset/ic_edit.png");
    });
})
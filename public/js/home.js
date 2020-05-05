// Script for home.html. This page can only be entered if user exists

$(document).ready(function () {
    userView = new UserView(getUser());

    userView.setAvatar();
    userView.displayUsername();

    onHoverProfileText();
    onClickLogoutButton();
})

function onHoverProfileText(){
    $("#edit-profile").hover(function(){
        $("#avatar__ic_edit").attr('src', "/img/ic_edit_hover.png");
    });

    $("#edit-profile").mouseleave(function(){
        $("#avatar__ic_edit").attr('src', "/img/ic_edit.png");
    });
}

function onClickLogoutButton(){
    $("#ic_logout").click(function(){
        if(confirm("Are you sure you want to logout?")){
            logout();
            redirectTo("/login");
        }
    })
}
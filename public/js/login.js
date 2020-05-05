user = undefined

$(document).ready(function () {
    userView = new UserView(user);
    onSubmitLoginForm();
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
    setInputValue($("#login__input"), "");
    $("#login__ic").attr("src", userView.ASSET + "ic_lock.png");
}

function onSubmitLoginForm(){
    $("form").submit(function(event){
        event.preventDefault();
        userInput = $("#login__input");
        if(userInput.attr('type') === "email"){
            $.when(getUserFromEmail(userInput.val())).done(function(result){
                result = JSON.parse(result);
                if(result.error !== undefined){
                    onLoginFail(result.error);
                }else{
                    user = result;
                    changeUIIfUserExists();
                }
            })
        }else{ // if password is what is submitted
            $.when(
                userLogin(
                    user.email,
                    userInput.val()
                )
            ).done(function(result){
                result = JSON.parse(result);
                if(result.error !== undefined){
                    onLoginFail(result.error);
                }else{
                    user = result;
                    createSession();
                    redirectTo("/home");
                }
            });
        }
    })
}

function onLoginFail(errorMessage){
    alert(errorMessage);
}

function createSession(){
    sessionStorage.setItem("user", JSON.stringify({
        "id": user.id,
        "name": user.name,
        "gender": user.gender,
        "position": user.position
    }));
}
function setInputValue(input, value){
    input.val(value);
}

function redirectTo(link){
    window.location.href = window.location.origin + link;
}

function getUser(){
    return JSON.parse(sessionStorage.getItem("user"));
}

function createSession(user){
    sessionStorage.setItem("user", JSON.stringify({
        "id": user.id,
        "name": user.name,
        "gender": user.gender,
        "position": user.position
    }));
}

function logout(){
    sessionStorage.removeItem("user");
}

function importScript(path){
    $("head").append(
        `<script src="js/${path}"></script>`
    );
}

function importStyle(path) {
    $("head").append(`<link rel="stylesheet" href="/css/${path}">`);
}
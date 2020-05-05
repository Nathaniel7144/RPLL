function setInputValue(input, value){
    input.val(value);
}

function redirectTo(link){
    window.location.href = window.location.origin + link;
}

function getUser(){
    return JSON.parse(sessionStorage.getItem("user"));
}

function logout(){
    sessionStorage.removeItem("user");
}
function getUserFromEmail(_email){
    $.ajax({
        type: 'GET',
        url: '/email-login',
        data: {
            email: _email
        },
        success: function(user){
            // console.log(user);
            // window.location.href = window.location.origin + "/home";
            return user;
        }
    });
}
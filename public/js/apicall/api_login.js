function getUserFromEmail(_email){
    return $.ajax({
        type: 'POST',
        url: '/login-email',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            email: _email
        },
        success: function(result){
            return result;
        }
    });
}

function userLogin(_email, _pwd){
    return $.ajax({
        type: 'POST',
        url: '/login-pass',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            email: _email,
            pwd: _pwd
        },
        success: function(result){
            return result;
        }
    });
}
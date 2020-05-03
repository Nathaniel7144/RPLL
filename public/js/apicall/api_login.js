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
            // window.location.href = window.location.origin + "/home";\
            return result;
        }
    });
}
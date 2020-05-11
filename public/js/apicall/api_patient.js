function apiSearchPatient(basedOn){
    return $.ajax({
        type: 'GET',
        url: '/search-patient',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: basedOn,
        success: function(result){
            return result;
        }
    });
}
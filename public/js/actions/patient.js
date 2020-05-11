importScript('/apicall/api_patient.js');

function searchPatient() {
    $.when(apiSearchPatient(getAllInputsInForm("#search-patient")))
    .done(function(results){
        modal.createFromCollection({
            general: "result",
            specific: "patient",
            head: ['ID', 'NAME', 'GENDER', 'BIRTHDAY'],
            'table content': results
        }, 'patient-result');
        $("#patient-result").modal();
    })
}
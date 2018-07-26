function accept() {
    $("#adatvédelem").prop('disabled', false);
    $("#adatvédelem").prop('checked', true);
    $("#regButton").prop('disabled', false);
    $("#GDPRModal").modal('hide') 
}
function modClose() {
    $("#adatvédelem").prop('disabled', false);
}

function adatvedCheck() {
    if ($("#adatvédelem").prop('checked')) {
        $("#regButton").prop('disabled', false);
    } else {
        $("#regButton").prop('disabled', true);
    }
}


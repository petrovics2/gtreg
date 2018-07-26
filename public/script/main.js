function accept() {
    $("#adatvedelem").prop('disabled', false);
    $("#adatvedelem").prop('checked', true);
    $("#regButton").prop('disabled', false);
    $("#GDPRModal").modal('hide') 
}
function modClose() {
    $("#adatvedelem").prop('disabled', false);
}
function adatvedCheck() {
    if ($("#adatvedelem").prop('checked')) {
        $("#regButton").prop('disabled', false);
    } else {
        $("#regButton").prop('disabled', true);
    }
}
function checkName() {
    if (!$("#nev").val()) {
        $("#errorlist").append("<li>Kérlek írd be a neved!</li>");
        console.log("Nincs nev hiba");            
        return false;
    } else {
        console.log("Nev jo");            
        return true;
    }        
}
function checkEmail() {
    var email = new RegExp('^[a-zA-Z0-9._%+-]+[@]{1}[a-zA-Z0-9._%+-]+[.]{1}[a-zA-Z0-9.]{2,4}$');
    if (!$("#email").val()) {
        $("#errorlist").append("<li>Kérlek írd be az e-mail címed!</li>");
        console.log("Nincs email hiba");            
        return false;
    } else 
    { 
        if (email.test($("#email").val())) {
            console.log("Email jo");            
            return true;
        }
        else {
            console.log("Email RegEx hiba");                
            return false;                
        }  
    }
}
function checkTel() {
    if (!$("#telefonszam").val()) {
        $("#errorlist").append("<li>Kérlek írd be a telefonszámod!</li>");
        console.log("Nincs telefonszám hiba");            
        return false;
    } else
    {
        var tel = new RegExp('[0](6)[0-9]{8,10}|[\+](36)[0-9]{8,10}');
        if (tel.test($("#telefonszam").val())) {
            console.log("Telefonszám jo");            
            return true;
        } else {
            $("#errorlist").append("<li>Kérlek valós telefonszámot adj meg!</li>");
            console.log("Telefon RegEx hiba");                
            return false;
        }
    }
}
function checkLakcim() {
    if (!$("#lakcim").val()) {
        $("#errorlist").append("<li>Kérlek írd be a lakcímed!</li>");
        console.log("Nincs lakcim hiba");
        return false;
    } else {
        console.log("Lakcim jo");
        return true;
    }
}
function checkGdpr() {
    if ($("#adatvedelem").prop("checked")) {            
        console.log("GDPR jo");            
        return true;
    } else {
        $("#errorlist").append("<li>Kérlek ne hackeld meg az oldalt :(!</li>");
        console.log("GDPR rossz"); 
        return false;
    }
}


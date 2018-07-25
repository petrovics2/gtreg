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

jQuery.validator.addMethod("telNum", function(value, element) {
    return this.optional(elemet) || /(\+36|06)([0-9]{8,9})/.test(value);
}, 'Kérlek igazi telefonszámot írj be!')
jQuery.validator.addMethod("emailCim", function(value, element) {
    return this.optional(elemet) || /^([0-9a-z\.-]+)+@([0-9a-z-]+)+\.([a-z]{2,4})/.test(value);
}, 'Kérlek igazi e-mail címet írj be!')

function regVal() {
    console.log("Validálás");
    
    $("regForm").validate(
        {
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    emailCim: true,
                },
                address: {
                    required: true
                },
                telnumber: {
                    required: true,
                    telNum: true,
                }
            },
            messages: {
                name: {
                    required: "Kérlek add meg a neved!"
                },
                email: {
                    required: "Kérlek add meg az e-mail címed!",
                    emailCim: "Kérlek valós e-mail címet adj meg!"
                },
                address: {
                    required: "Kérlek add meg a lakcímed!"
                },
                telnumber: {
                    required: "Kérlek add meg a telefonszámodat!",
                    telNum: "Kérlek valós telefonszámot adj meg! Használd a +36 vagy 06 előtagot és ne válaszd el a számokat sehogy!",
                }
            }
        }
    );
}
$(document).ready(function() {
    $("#memory").mask("00GB", {
        reverse: true
    })
    $("#hd").mask("000GB", {
        reverse: true
    })
    $("#mac").mask("SS-SS-SS-SS-SS-SS", {
        translation: {
            'S': {
                pattern: /^[A-Za-z0-9]/
            }
        },
        reverse: true
    })
    $("#ip").mask("00.00.00.999")
})
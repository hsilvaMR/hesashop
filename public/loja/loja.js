$(function() {

    $('#hideMenu').on('click', function() {
        // $('.modulo-reset-password').removeClass("d-none")
        $('.dropDownMenu').addClass("d-none")
        $('#hideMenu').addClass("d-none")
        $('#showMenu').removeClass("d-none")
    })

    $('#showMenu').on('click', function() {
        $('.dropDownMenu').removeClass("d-none")
        $('#showMenu').addClass("d-none")
        $('#hideMenu').removeClass("d-none")
    })

})
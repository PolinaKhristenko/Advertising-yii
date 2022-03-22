$(document).ready(function() {

    // Menu


    $('.header__burger').on('click', function() {
        $('.nav__mobile').fadeIn('fast');
        $('.nav__mobile').css({display:'flex'});
    });

    $(".nav__close").on("click", function() {
            $(".nav__mobile").fadeOut('fast');
    });


    // Modal window

    $('.modal__trigger').on('click', function() {
        $('.modal').fadeIn('fast');
        $('.modal').css({display:'flex'});
    });


    $(".modal, .modal__close").on("click", function (e) {
        if (e.target == this) {
            $(".modal").fadeOut('fast');
        };
    });



    // Ajax 

    $('#form2').on('submit', function (e) {
        $.ajax({
            url: "/site/send-form",
            type: "POST",
            data: $(this).serialize(),
            beforeSend: function() {
                $('.modal__btn').css('disabled', true);
            },
        }).done(function(r) {
             console.log(r);
            if (r.status === 'error') {
                console.log(r);
            } else {
                $('.modal__window').fadeOut('fast', function() {
                    $('.thanks__modal').fadeIn('fast');
                    $('.modal').css({display:'flex'});
                })
            }
        });
        e.preventDefault();
    })



    $('#form1').on('submit', function (e) {
        $.ajax({
            url: "/site/send-form",
            type: "POST",
            data: $(this).serialize(),
            beforeSend: function() {
                $('.footer__btn').css('disabled', true);
            },
        }).done(function(r) {
             console.log(r);
            if (r.status === 'error') {
                console.log(r);

            } else {
                $('.modal__window').fadeOut('fast', function() {
                    $('.thanks__modal').fadeIn('fast');
                    $('.modal').css({display:'flex'});
                })
            }
        });
        e.preventDefault();
    })
 

});  

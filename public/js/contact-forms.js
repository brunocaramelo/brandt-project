$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".btn-submit-contact").click(function(e){

    e.preventDefault();

    $('.btn-submit-contact').attr('disabled', true);

    $('.message-contact-envited').fadeOut();

    $.ajax({
        type:'POST',
        url: contactFormTargetEndpoint,
        data:{
            name: $("input[name=name]").val(),
            message: $("textarea[name=message]").val(),
            email: $("input[name=email]").val()
        }
    ,success:function(data){

        $("input[name=name]").val('')
        $("textarea[name=message]").val('')
        $("input[name=email]").val('')

        $('.message-contact-envited').fadeIn("fast");

        $('.btn-submit-contact').attr('disabled', false);

    }
    });

});

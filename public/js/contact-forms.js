$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".btn-submit-contact").click(function(e){

    e.preventDefault();

    var name = $("input[name=name]").val();
    var message = $("textarea[name=message]").val();
    var email = $("input[name=email]").val();

    $('.message-contact-envited').fadeOut();

    $.ajax({
        type:'POST',
        url: contactFormTargetEndpoint,
        data:{
            name:name,
            message:message,
            email:email
    },success:function(data){
        $("input[name=name]").val('')
        $("textarea[name=message]").val('')
        $("input[name=email]").val('')

        $('.message-contact-envited').fadeIn("fast");
    }
    });

});

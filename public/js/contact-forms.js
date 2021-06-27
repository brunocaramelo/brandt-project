$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(".btn-submit-contact").click(function(e){


    var formActivadedObject = $(this).closest('form').get(0);
    var formActivaded =  formActivadedObject.id;


    e.preventDefault();

    $('#'+formActivaded+' .btn-submit-contact').attr('disabled', true);

    $('.message-contact-envited').fadeOut();

    $.ajax({
        type:'POST',
        url: formActivadedObject.target,
        data: $('#'+formActivaded).serialize()
    ,success:function(data){

        $('#'+formActivaded+" input[name=name]").val('')
        $('#'+formActivaded+" textarea[name=message]").val('')
        $('#'+formActivaded+" input[name=email]").val('')

        $('.message-contact-envited').fadeIn("fast");

        $('#'+formActivaded+' .btn-submit-contact').attr('disabled', false);

    }
    });

});

function activeTypeForm(value) {
    var formActivaded = "contact-"+value+"-form"
    $(".contact-form-model").hide();
    $("#"+formActivaded).show();
}

$(".btn-submit-newsletter").click(function(e){


    var formActivadedObject = $(this).closest('form').get(0);
    var formActivaded =  formActivadedObject.id;
    var htmlErrorMessage =  '';

    e.preventDefault();

    $('.btn-submit-newsletter').attr('disabled', true);

    $('.message-newsletter-envited').fadeOut();
    $('.message-newsletter-notenvited').fadeOut();

    $.ajax({
        cache: false,
        type:'POST',
        url: formActivadedObject.target,
        contentType: "application/json",
        data: JSON.stringify({
            name:$("#newsletter_form input[name=name]").val(),
            email:$("#newsletter_form input[name=email]").val()
        }),
        datatype: 'json',
    success:function(data){

        $("#newsletter_form input[name=name]").val('')
        $("#newsletter_form input[name=email]").val('')

        $('.message-newsletter-envited').fadeIn("fast");

        $('.btn-submit-newsletter').attr('disabled', false);

    },
    error: function(jqXHR, textStatus, errorThrown){
        returnErr = JSON.parse(jqXHR.responseText)
        returnErrors = returnErr.errors

        htmlErrorMessage = '<br />'

        returnErrors.forEach(function(item) {
            htmlErrorMessage += item+".<br />";
        });
        $('.message-newsletter-notenvited').fadeIn("fast");

        $('.btn-submit-newsletter').attr('disabled', false);
        $('#errors_on_newsletter_send').html(htmlErrorMessage)
    }
    })

});


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

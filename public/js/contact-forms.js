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

    $.ajax({
    type:'POST',
    url: contactFormTargetEndpoint,
    data:{
        name:name,
        message:message,
        email:email
    },success:function(data){
        alert(data.success);
    }
    });

});

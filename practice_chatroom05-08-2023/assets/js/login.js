$('.register').click(function(){
    $.ajax({
        url:'router/router.php?ind=register',
        data:$('#registration').serialize(),
        type:'POST',
        beforeSend:function(){
            $('regsiter').html('Submitting...')
        },
        success:function(){
            $('#register').html('Register')
        }
    })
})
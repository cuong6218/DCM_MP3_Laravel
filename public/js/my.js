
    $(document).ready(function(){
    $('#formSubmit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ url('') }}",
            method: 'post',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
            },
            success: function(result){
                if(result.errors)
                {
                    $('.alert-danger').html('');

                    $.each(result.errors, function(key, value){
                        $('.alert-danger').show();
                        $('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
                else
                {
                    $('.alert-danger').hide();
                    $('#exampleModal').modal('hide');
                }
            }
        });
    });
});

$('#send').on('click', function (e) {
    e.preventDefault();

    var form = $('#add_user_form')[0];
    var data = new FormData(form);
    var token = $('#token');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        url: app_url + '/user/postAddUser',
        data: data,
        type: 'POST',
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status === 200) {
                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false
                });
                setTimeout(function () {
                    window.location.href = app_url + '/user/userView';
                }, 2500);
            }
        },
        error: function(response){
            Swal.fire({
                icon: 'error',
                title: response.responseJSON.message
            });
        }
    });
});

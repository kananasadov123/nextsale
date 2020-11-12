<?php require_once 'header.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- Title area -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Users
                        <a class="text-right add-user" href="<?= APP_PATH ?>/user/addUser">Add User</a>
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody id="data-content">
                        <tr>
                            <th><i class="icon_profile"></i>Name</th>
                            <th><i class="icon_pens"></i>Surname</th>
                            <th><i class="icon_mail_alt"></i>Email</th>
                            <th><i class="icon_adjust-vert"></i>Phone</th>
                        </tr>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>

    </section>
</section>
<!--main content end-->
<?php require_once 'footer.php'; ?>

<script>

    $(document).ready(function () {
        $.ajax({
            url: app_url + '/user/userData',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                var html = '';
                if (response.status === 200) {
                    $.each(response.data, function (index, value) {
                        html += '<tr>\n' +
                            '                            <td>' + value.name + '</td>\n' +
                            '                            <td>' + value.surname + '</td>\n' +
                            '                            <td>' + value.email + '</td>\n' +
                            '                            <td>' + value.phone + '</td>\n' +
                            '                        </tr>'
                    });
                    $('#data-content').append(html);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Something went wrong!',
                        footer: '<a href>Why do I have this issue?</a>'
                    });
                }

            }
        });
    });

</script>

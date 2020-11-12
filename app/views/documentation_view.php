<?php require_once 'header.php'; ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- Title area -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h1>API Documentation</h1>
                        1.<ul>
                            <li><strong>Url: </strong></li><?= APP_PATH ?>/user/userData
                            <li><strong>Method: </strong></li> GET
                            <li><strong>Request headers: </strong></li> -
                            <li><strong>Request body: </strong></li> -
                            <li><strong>Response: </strong></li> data - Example: { data: [{id: "1", name: "Kənan Əsədov", surname: "Admin", email: "kenanasadov@mail.ru", phone: "10"}], message: "success", status: 200 }
                        </ul>
						2.<ul>
							<li><strong>Url: </strong></li><?= APP_PATH ?>/user/postAddUser
							<li><strong>Method: </strong></li> POST
							<li><strong>Request headers: </strong></li> token - Example: 31456e4b045121e5f7e6c7030aec7168
							<li><strong>Request body: </strong></li> name, surname, email, phone - Example: Kanan, Asadov, kanan.asadov123@gmail.com, 0557463160
							<li><strong>Response: </strong></li>  data (Example: )
						</ul>
                    </header>
                </section>
            </div>
        </div>

    </section>
</section>
<!--main content end-->
<?php require_once 'footer.php'; ?>

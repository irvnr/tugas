<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="<?= base_url() ?>/temlogin/login.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <section id="formHolder">

            <div class="row">

                <!-- Brand Box -->
                <div class="col-sm-6 brand">
                    <a href="#" class="logo">IRV <span>.</span></a>

                    <div class="heading">
                        <h2>CodeIgniter</h2>
                        <p></p>
                    </div>

                    <div class="success-msg">
                        <p>Great! You are one of our members now</p>
                        <a href="#" class="profile">Your Profile</a>
                    </div>
                </div>


                <!-- Form Box -->
                <div class="col-sm-6 form">

                    <!-- Login Form -->
                    <div class="login form-peice " id="log">
                        <!-- <form class="login-form" action="#" method="post"> -->

                        <?php
                        if (session()->getFlashdata('pesanLogin')) {
                            echo "<script>alert('Login Gagal !!, Email Atau Password Tidak Cocok !!');</script>";
                        } ?>



                        <?php echo form_open('auth/cekLogin'); ?>
                        <div class="form-group">
                            <label for="loginemail">Email Adderss</label>
                            <input type="email" name="email" id="loginemail" required>
                        </div>

                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" name="password" id="loginPassword" required>
                        </div>

                        <div class="CTA">
                            <input type="submit" value="Login">
                            <a href="#" class="switch">I'm New</a>
                        </div>
                        <?php echo form_close(); ?>
                        <!-- </form> -->
                    </div><!-- End Login Form -->


                    <!-- Signup Form -->
                    <div class="signup form-peice switched" id="regis">
                        <!-- <form class="signup-form" action="" method="post"> -->
                        <?php
                        if (session()->getFlashdata('pesan')) {
                            echo "<script>alert('Register berhasil disimpan, silahkan login');</script>";
                        } ?>
                        <?php echo form_open('auth/saveregister'); ?>

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="nama" id="name" required>
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Adderss</label>
                            <input type="email" name="email" id="email" required>
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="passwordCon">Confirm Password</label>
                            <input type="password" name="repassword" id="passwordCon" required>
                            <span class="error"></span>
                        </div>

                        <div class="CTA">
                            <input type="submit" value="Signup Now" id="submit">
                            <a href="#" class="switch">I have an account</a>
                        </div>

                        <?php echo form_close(); ?>
                        <!-- </form> -->
                    </div><!-- End Signup Form -->
                </div>
            </div>

        </section>

    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="<?= base_url() ?>/temlogin/login.js"></script>

</body>

</html>
<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>

    <!-- reCAPTCHA Javascript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <div class="card-body">
                    <h1 class="card-title">
                        Contact Us
                    </h1>

                    <?php
                    if (!empty($success)) {
                        ?>
                        <div class="alert alert-success">Your message was sent successfully!</div>
                        <?php
                    }
                    ?>

                    <?php
                    if (!empty($error)) {
                        ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                        <?php
                    }
                    ?>

                    <form method="post" action="submit.php">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email Address</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="subject">Your Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea name="message" id="message" class="form-control" rows="12"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
                        </div>

                        <button class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
</body>
</html>

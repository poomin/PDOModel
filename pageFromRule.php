<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/20/2018
 * Time: 11:57 AM
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Model</title>

    <!-- Bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <!--Bootstrap call out css -->
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-callout.css">
    <!-- Font Awesome icons -->
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="container">


<form data-toggle="validator" role="form">
    <div class="form-group">
        <label for="inputName" class="control-label">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
    </div>
    <div class="form-group has-feedback">
        <label for="inputTwitter" class="control-label">Twitter</label>
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
        </div>
        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
    </div>
    <div class="form-group">
        <label for="inputEmail" class="control-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label">Password</label>
        <div class="form-inline row">
            <div class="form-group col-sm-6">
                <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                <div class="help-block">Minimum of 6 characters</div>
            </div>
            <div class="form-group col-sm-6">
                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" name="underwear" required>
                Boxers
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="underwear" required>
                Briefs
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                Check yourself
            </label>
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>






</body>

<!-- Jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap core Javascript -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- Plugins -->
<script type="text/javascript" src="bootstrap/js/validate-bootstrap.jquery.js"></script>


</html>

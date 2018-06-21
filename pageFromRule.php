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


<!-- don't forget novalidate to stop browser form validation -->
<form class="form">
    <div class="container">
        <div class="row">
            <div class='col-sm-4 form-group'>
                <label for="name">Your Name:</label>
                <input id="lname" class="form-control" min="3" required type="text" data-error-msg="Must enter your name?">
            </div>
            <div class='col-sm-4 form-group'>
                <label for="name">Email:</label>
                <input id="email" class="form-control" type="email" required data-error-msg="The email is required in valid format!">
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-4 form-group'>
                <label for='address'>Address: (optional)</label>
                <input id='address' class='form-control' type='text'>
            </div>
        </div>
        <div class="row">
            <div class='col-sm-4 form-group'>
                <label for='terms'>Agree with T&Cs?</label>
                <select id='terms' class='form-control' required>
                    <option selected disabled>Select </option>
                    <option value="Y">Yes</option>
                    <option value="N">No</option>
                </select>
            </div>
            <div class='col-sm-4 form-group'>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="option1" value="" required data-error-msg="You have to select one expertise.">
                        HTML
                    </label>
                </div>
                <div class="checkbox disabled">
                    <label>
                        <input type="checkbox" name="option1" value="">
                        CSS
                    </label>
                </div>
            </div>
            <div class='col-sm-4 form-group'>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required data-error-msg="You have to select one expertise.">
                        Python
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Java
                    </label>
                </div>
                <div class="radio disabled">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                        SQL
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <button type="submit" class="btn btn-danger btn-block">Proceed</button>
            </div>
        </div>
    </div>



<footer style="padding-top: 150px;">

    <div class="container text-muted text-center">
        <p> &copy; 2018</p>
    </div>

</footer>
</body>

<!-- Jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap core Javascript -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- Plugins -->
<script type="text/javascript" src="bootstrap/js/validate-bootstrap.jquery.js"></script>


<script>
    $(function() {
        $('form').validator({
            validHandlers: {
                '.customhandler':function(input) {
                    //may do some formatting before validating
                    input.val(input.val().toUpperCase());
                    //return true if valid
                    return input.val() === 'JQUERY' ? true : false;
                }
            }
        });

        $('form').submit(function(e) {
            e.preventDefault();

            if ($('form').validator('check') < 1) {
                alert('Hurray, your information will be saved!');
            }
        })
    })
</script>

</html>

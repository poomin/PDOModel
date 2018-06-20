<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/18/2018
 * Time: 2:06 PM
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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-callout.css">
    <!-- Font Awesome icons -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="froala/css/froala_editor.css">
    <link rel="stylesheet" href="froala/css/froala_style.css">
    <link rel="stylesheet" href="froala/css/plugins/code_view.css">
    <link rel="stylesheet" href="froala/css/plugins/colors.css">
    <link rel="stylesheet" href="froala/css/plugins/emoticons.css">
    <link rel="stylesheet" href="froala/css/plugins/image_manager.css">
    <link rel="stylesheet" href="froala/css/plugins/image.css">
    <link rel="stylesheet" href="froala/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="froala/css/plugins/table.css">
    <link rel="stylesheet" href="froala/css/plugins/char_counter.css">
    <link rel="stylesheet" href="froala/css/plugins/video.css">
    <link rel="stylesheet" href="froala/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="froala/css/plugins/file.css">
    <link rel="stylesheet" href="froala/css/plugins/quick_insert.css">

</head>

<body class="container">

<div id="editor">
    <div id='edit' style="margin-top: 30px;">
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
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/scrollreveal.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<script type="text/javascript" src="froala/js/froala_editor.min.js" ></script>
<script type="text/javascript" src="froala/js/plugins/align.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/file.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/image.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/link.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/table.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/save.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/url.min.js"></script>
<script type="text/javascript" src="froala/js/plugins/video.min.js"></script>

<script>
    $(function() {
        $('#edit').froalaEditor({
            heightMin: 250,
        });
    });
</script>

</html>
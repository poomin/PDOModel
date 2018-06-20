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


<div id="loadFile" class="text-center">
    <div class="form-show-file" style="padding-top: 20px;">
        <img id="src_image" src="upload/file_upload/null.png" alt="File Upload" class="img-rounded">
    </div>
    <div class="form-inline hide" id="show_progressBar_upload">
        <div class="progress" style="float:left; width: 90%; margin-right: 5px;">
            <div id="progressBar_upload" class="progress-bar" role="progressbar"
                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                 style="width: 0%;">
                0%
            </div>
        </div>
        <button type="button" class="btn btn-danger btn-xs"
                onclick="cancelUploadFile()">
            <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
    </div>
    <div class="form-inline" style="padding-top: 20px;">
        <input class="form-control" id="path_upload" type="text" name="path_upload" value="">
        <input class="form-control" id="name_upload" type="text" name="name_upload" value="">
        <div class="box-img-ready">
            <label style="cursor: pointer;" for="file_upload">
                <h3><span class="label label-info"><i class="fa fa-upload"></i> Upload</span></h3>
                <input id="file_upload" accept="image/*" type="file" style="display:none;" onchange="uploadFile(this)">
            </label>
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
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/scrollreveal.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>



<script>

    var ajax_upload;
    function uploadFile(input) {
        if (input.files && input.files[0]) {
            ajax_upload = new XMLHttpRequest();
            var file_name = input.files[0].name;
            //console.log(file_name);

            var cut_type_file = file_name.split('.');
            var file_type = cut_type_file[cut_type_file.length - 1];
            file_type = file_type.toLowerCase();
            var file_type_set_accept = ["png"];
            //console.log(file_type);

            //check type file upload
            if (file_type_set_accept.indexOf(file_type)>=0) {

                var show_progressBar_upload = "show_progressBar_upload";
                var progressBar = "progressBar_upload";

                $('#'+show_progressBar_upload).removeClass('hide');

                var form_data = new FormData();
                form_data.append("fileToUpload", input.files[0]);
                ajax_upload.upload.addEventListener("progress", progressHandler, false);
                ajax_upload.addEventListener("load", completeHandler, false);
                ajax_upload.addEventListener("error", errorHandler, false);
                ajax_upload.addEventListener("abort", abortHandler, false);
                ajax_upload.open("POST", "/upload/upload_file.php");
                ajax_upload.send(form_data);

                function progressHandler(event) {
                    var percent = (event.loaded / event.total) * 100;
                    $("#" + progressBar).css('width', Math.round(percent) + "%");
                    $("#" + progressBar).html(Math.round(percent) + "%");
                }

                function completeHandler(event) {
                    var data_return = JSON.parse(event.target.responseText);
                    if (data_return['status'] == 'ok') {
                        var src = '/upload/file_upload/'+data_return['new_name'];
                        var res_filename = data_return['file_name'];
                        $('#' + show_progressBar_upload).addClass('hide');
                        $("#" + progressBar).css('width', "0%");
                        $("#" + progressBar).html("0%");

                        $('#src_image').attr('src',src);
                        $('#path_upload').attr('value',src);
                        $('#name_upload').attr('value',res_filename);


                    } else {
                        ajax_upload.abort();
                        alert("Error:" + data_return['message']);
                        $("#" + progressBar).css('width', "0%");
                        $("#" + progressBar).html("0%");
                    }
                }

                function errorHandler(event) {
                    ajax_upload.abort();
                    alert("Upload Failed");
                    $('#' + show_progressBar_upload).addClass('hide');
                    $("#" + progressBar).css('width', "0%");
                    $("#" + progressBar).html("0%");

                }

                function abortHandler(event) {
                    ajax_upload.abort();
                    alert("Upload Aborted");
                    $('#' + show_progressBar_upload).addClass('hide');
                    $("#" + progressBar).css('width', "0%");
                    $("#" + progressBar).html("0%");
                }

            } else {
                alert("File type cannot upload!!!");
            }
        } else {
            alert("Not found file input!!!");
        }
    }

</script>

</html>

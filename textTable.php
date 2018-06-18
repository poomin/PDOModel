<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/18/2018
 * Time: 2:58 PM
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


    <link rel="stylesheet" href="datatable/dataTables.bootstrap.min.css">

</head>

<body class="container">

<table id="thisdatatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>username</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>โรงเรียน</th>
        <th>ภาค</th>
        <th>สถานะ</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i=0;$i<20;$i++): ?>
        <tr>
            <td>game</td>
            <td>cherry</td>
            <td>gimo</td>
            <td>w.w.</td>
            <td>SC</td>
            <td><?=$i;?></td>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>


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


<script type="text/javascript" src="datatable/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="datatable/dataTables.bootstrap.min.js" ></script>

<script>
    $(document).ready(function () {
        $('#thisdatatable').DataTable();
    });
</script>

</html>
